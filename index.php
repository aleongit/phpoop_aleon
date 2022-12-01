<?php require_once 'includes/helpers.php'; 
  // inclou session start + autoloader?>

<?php $titol="Creador de forms - aleon"; ?>
<?php require_once 'includes/header.php'; ?>

<?php
//$test = new Form('/users/login/');
?>

<!-- 
-->
<div class= 'main'>


<?php 
//si form validat, carregar form camps
//si camps validat, carregar formulari generat

if ( isset( $_SESSION['camps_ok'] ) ) {
  require_once 'includes/main_form_out.php';
}

elseif ( isset( $_SESSION['form_ok'] ) ) {
  require_once 'includes/main_camps.php';
} 
else {
  require_once 'includes/main_form.php';
} ?>

<!--fi main-->
</div>

<?php
//neteja formularis
  neteja_form(); 
?>


<?php require_once 'includes/footer.php';?>
