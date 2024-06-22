<?php

switch(strtolower($_SERVER['REQUEST_URI'])) {
    case '/':
        header('Location: /accueil');
        break;
    case '/mvc-example':
        require_once 'controllers/mvc_example.php';
        mvc_example();
        break ;
    case '/accueil':
        require_once 'controllers/vitrine.php';
        accueil();
        break;
    case '/a-propos':
        require_once 'controllers/vitrine.php';
        a_propos();
        break;
    case '/activities':
        require_once 'controllers/vitrine.php';
        activities();
        break;
    default:
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
        break;
}

?>