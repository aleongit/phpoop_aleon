
<?php

//funció autoloader, amb paràmetre classe a carregar

function autoloader($classe) {
    //var_dump($classe);
    //die();
    //fitxer dins /autoloader/
    require_once strtolower($classe).'.php';
}

//funció spl_autoload_register
//passar com a paràmetre la funció anterior
//busca les classes a la carpeta /autoloader i carrega

spl_autoload_register('autoloader');

?>