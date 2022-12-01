<?php require_once 'includes/helpers.php'; ?>

<?php
var_dump($_POST);

//si no ko
if ( !isset($_POST['ko']) ) {

    //definim
    $_SESSION['form_errors'] = [];
    $_SESSION['form'] = [];

    //inicialitzem i netegem
    $id = test_input($_POST['id']);
    $metode = test_input($_POST['metode']);
    $action = test_input($_POST['action']);
    $q = test_input($_POST['q']);

    //guardem temp
    $_SESSION['form']['id'] = $id;
    $_SESSION['form']['action'] = $action;
    $_SESSION['form']['metode'] = $metode;
    $_SESSION['form']['q'] = $q;

    //validacions

    if (!Valid::valida_nom($id)) {
        echo "<br>* FATAL ERROR * id";
        echo NORMA_NOM;
        $_SESSION['form_errors']['id'] = NORMA_NOM;
    }

    if (!Valid::valida_metode($metode)) {
        echo "<br>* FATAL ERROR * mètode";
        echo NORMA_SELECT;
        $_SESSION['form_errors']['metode'] = NORMA_SELECT;
    }

    if (!Valid::valida_action($action)) {
        echo "<br>* FATAL ERROR * action";
        echo NORMA_ACTION;
        $_SESSION['form_errors']['action'] = NORMA_ACTION;
    }

    if (!Valid::valida_num($q)) {
        echo "<br>* FATAL ERROR * num camps";
        echo NORMA_CAMPS;
        $_SESSION['form_errors']['q'] = NORMA_CAMPS;
    } else {
        //pas a num
        $q = intval($q);
    }

    //errors ?
    echo "<br>* errors *<br>";    
    var_dump($_SESSION['form_errors']);

    //si no errors form, tirem endavant
    if ( count($_SESSION['form_errors']) == 0 ) {
        echo "<br>* endavant *<br>";

        //activar session
        $_SESSION['form_ok'] = true;
    }

    //netegem si ok ?
    if ( isset($_SESSION['form_ok']) ) {
        neteja_form();
    }

    //si ko, destroy
} else {
    destroy();
}

header('Location: index.php');

?>