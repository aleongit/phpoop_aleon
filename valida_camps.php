<?php require_once 'includes/helpers.php'; ?>

<?php
var_dump($_POST);

//si no ko
if ( !isset($_POST['ko']) ) {

    //definim
    $_SESSION['camp_errors'] = []; //per retorn missatges
    $errors = 0; //comptador

    $_SESSION['camp'] = []; 

    $q = $_SESSION['form']['q'];

    //organitzo per camps (name camp + num)
    //afageixo passant test
    for ( $i = 1; $i <= $q; $i++ ) {
        //echo "<br>".$_POST['tipus'. $i];
        $tipus[] = test_input($_POST['tipus'. $i]);
        $ids[] = test_input($_POST['id'. $i]);
        $names[] = test_input($_POST['name'. $i]);
        $values[] = test_input($_POST['value'. $i]);
    }
    echo "<br>";
    echo "<br>" .var_dump($tipus);
    echo "<br>" .var_dump($ids);
    echo "<br>" .var_dump($names);
    echo "<br>" .var_dump($values);

    //validem
    for ($i=0; $i < $q; $i++) {
        
        //tipus
        $_SESSION['camp']['tipus'][$i] = $tipus[$i];
        if (!Valid::valida_tipus($tipus[$i])) {
            echo "<br>* FATAL ERROR * tipus". $i+1 ;
            echo NORMA_SELECT;
            $_SESSION['camp_errors']['tipus'][$i] = NORMA_SELECT;
            $errors ++;
        } else {
            $_SESSION['camp_errors']['tipus'][$i] = "";
        }

        //id
        $_SESSION['camp']['id'][$i] = $ids[$i];
        if (!Valid::valida_nom($ids[$i])) {
            echo "<br>* FATAL ERROR * id". $i+1 ;
            echo NORMA_NOM;
            $_SESSION['camp_errors']['id'][$i] = NORMA_NOM;
            $errors ++;
        } else {
            $_SESSION['camp_errors']['id'][$i] = "";
        }

        //name
        $_SESSION['camp']['name'][$i] = $names[$i];
        if (!Valid::valida_nom($names[$i])) {
            echo "<br>* FATAL ERROR * name". $i+1 ;
            echo NORMA_NOM;
            $_SESSION['camp_errors']['name'][$i] = NORMA_NOM;
            $errors ++;
        } else {
            $_SESSION['camp_errors']['name'][$i] = "";
        }

        //valors
        //no buit
        //si + d'un valor, separat per comes (només per select i checkbox)
        //passar valor + tipus a mètode static, si han passat tipus
        
        $_SESSION['camp']['value'][$i] = $values[$i];
        if (!Valid::valida_values($values[$i],$tipus[$i])) {
            echo "<br>* FATAL ERROR * value". $i+1 ;
            echo NORMA_VALUE;
            $_SESSION['camp_errors']['value'][$i] = NORMA_VALUE;
            $errors ++;
        } else {
            $_SESSION['camp_errors']['value'][$i] = "";
            //$_SESSION['camp']['value'][$i] = $values[$i];
            
            //separem valors
            $_SESSION['camp']['value_sep'][$i] = explode(",", $values[$i]);
        }
        
    }

    echo "<br>";
    echo "<br>". var_dump($_SESSION['camp_errors']);
    echo "<br>". var_dump($_SESSION['camp']);

    //errors ?
    echo "<br>* errors_______________________ *<br>";    
    echo $errors;
    
    //si no errors form, tirem endavant
    if ( $errors == 0 ) {
        echo "<br>* endavant *<br>";

        //activar session ok camps
        $_SESSION['camps_ok'] = true;

    }

    //netegem si ok ?
    if ( isset($_SESSION['camps_ok']) ) {
        neteja_form();
    }

    //si ko, destroy
} else {
    destroy();
}

header('Location: index.php');

?>