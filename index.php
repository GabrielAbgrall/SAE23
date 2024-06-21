<?php

switch(strtolower($_SERVER['REQUEST_URI'])) {
    case '/mvc-example':
        require_once 'controllers/MVCExemple.php';
        MVCExemple();
        break ;
    case '/accueil':
        require_once 'controllers/Accueil.php';
        Vitrine();
        break;
}

?>