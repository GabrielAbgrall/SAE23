<?php

switch(strtolower($_SERVER['REQUEST_URI'])) {
    case '/mvc-example':
        require_once 'controllers/MVCExemple.php';
        MVCExemple();
        break ;
    case '/accueil':
        require_once 'controleurs/Vitrine.php';
        Accueil();
        break;
}

?>