<?php

// Cet autoloader permet de faire les "require" des classes se trouvant dans le dossier "Classes".
function autoloader_perso($class) {
    require_once('Classes/'.$class.'.php');
}
spl_autoload_register('autoloader_perso');

?>