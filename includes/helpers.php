<?php declare( strict_types = 1 );  //strict requirement  ?>
<?php session_start();              // inici sessió       ?>
<?php require_once 'autoload/autoload.php'; ?>

<?php

define('NORMA_NOM', '1 x abc + abc123_');
define('NORMA_SELECT', 'Selecciona opció');
define('NORMA_ACTION', 'abc123_-.php');
define('NORMA_CAMPS', 'de 1 a 9');
define('NORMA_VALUE', "obligatori / [,] només per select i checkbox");

define('TIPUS', 
      [ 'text'  => 'text',
        'num'   => 'numèric',
        'check' => 'checkbox',
        'sel'   => 'select',
        'area'  => 'textarea',
        'sub'   =>  'submit' ]);

define('TIPUS_1', ['text', 'num', 'area', 'sub']);
define('TIPUS_N', ['check', 'sel']);

//funció neteja inputs (espais + barres + caràcters especials html)
function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = str_replace("'", "´", $data); //canviar cometes simples
        return $data;
      }

Function neteja_form() {
      unset($_SESSION['form_errors']);
      unset($_SESSION['camp_errors']);
      
      //unset($_SESSION['form']);
      //session_destroy();
        
      }

Function destroy() {
    session_destroy();
      }

Function render_form() {

  //var_dump($_SESSION['form']);
  //var_dump($_SESSION['camp']);

  
  //nou objecte form
  $form = new Form($_SESSION['form']['id'],
                   $_SESSION['form']['metode'],
                   $_SESSION['form']['action']);

  //quantitat camps
  $q = $_SESSION['form']['q'];


  for ($i = 0; $i < $q; $i++) {

    $tipus = $_SESSION['camp']['tipus'][$i];
    $id = $_SESSION['camp']['id'][$i];
    $nom = $_SESSION['camp']['name'][$i]; 
    $valors = $_SESSION['camp']['value_sep'][$i];

    //switch tipus
    switch ($tipus) {
      case 'text':
          $camp = new TextCamp($id,$nom,$valors);
          break;
      case 'num':
          $camp = new NumberCamp($id,$nom,$valors);
          break;
      case 'check':
          $camp = new CheckCamp($id,$nom,$valors);
          break;
      case 'sel':
          $camp = new SelectCamp($id,$nom,$valors);
          break;
      case 'area':
          $camp = new AreaCamp($id,$nom,$valors);
          break;
      case 'sub':
          $camp = new SubmitCamp($id,$nom,$valors);
        break;
      
    }
    $form->add_camp($camp);

  }

  echo $form->render();

  //codi
  echo "<br><br><p>Copia el codi per la teva web!</p><br>";
  echo "<textarea rows='10' cols='50'>".htmlspecialchars( $form->render() ) ."</textarea>";

}


?>