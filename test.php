<?php require_once 'includes/helpers.php'; 
  // inclou session start + autoloader?>

<?php $titol="Test aleon"; ?>
<?php require_once 'includes/header.php'; ?>

<?php
//$test = new Form('/users/login/');
?>

<!-- 
-->
<div class= 'main'>


<?php

$f = new Form('test', 'post', 'test.php');

$text = new TextCamp('id_text', 'nom_text', ['valor_text']);
$num = new NumberCamp('id_number', 'nom_number', [5]);
$check = new CheckCamp('id_check', 'nom_check', ['Llimona','Taronja','Guacamole']);
$select = new SelectCamp('id_select', 'nom_select', ['Llimona','Taronja','Guacamole']);
$submit = new SubmitCamp('submit', 'submit', ['Go go!']);

$f->add_camp($text);
$f->add_camp($num);
$f->add_camp($check);
$f->add_camp($select);
$f->add_camp($submit);

echo $f->render();

echo htmlspecialchars( $f->render() );


?>

<!--fi main-->
</div>

<?php
//neteja formularis
  neteja_form(); 
?>


<?php require_once 'includes/footer.php';?>