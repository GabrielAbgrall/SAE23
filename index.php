<?php

switch(strtolower($_SERVER['REQUEST_URI'])) {
    case '/mvc-example':
        require_once 'controllers/mvc_example.php';
        mvc_example();
        break ;
    case '/accueil':
        require_once 'controllers/accueil.php';
        vitrine();
        break;
}

?>