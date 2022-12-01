<?php require_once 'includes/helpers.php'; ?>
<?php $titol="about"; ?>
<?php require_once 'includes/header.php'; ?>

<!-- 
-->
<div class= 'main'>

<pre>
Fes un generador de formularis. 

A partir d’un formulari d’entrada on li especificaràs l’id del formulari, action, el submit i el nombre de camps. 

un cop validades les dades d’aquest primer formulari i utilitzant una classe forms que cal tenir en un arxiu apart, genera el formulari en un arxiu formulari.php.

Per cada camp hauràs de demanar el nom, l’id, el tipus i el valor per defecte. 

Has de permetre camps de tot tipus (numèric, text, textarea, select, checkbox, i el submit) tipus Pensa en quines propietats ha de tenir el formulari,  si et cal fer mètodes estàtics que puguis cridar sense instànciar la classe, si has de fer una classe genèrica i a partir d’aquí herència, etc.

Un cop creat el formulari l’hauràs de mostrar.
</pre>

<!--fi main-->
</div>

<?php require_once 'includes/footer.php';?>