<?php

switch(strtolower($_SERVER['REQUEST_URI'])) {
    case '/mvcexemple':
        require_once 'controleurs/MVCExemple.php';
        MVCExemple();
        break ;
    case '/accueil':
        require_once 'controleurs/Vitrine.php';
        Accueil();
        break;
}

?>