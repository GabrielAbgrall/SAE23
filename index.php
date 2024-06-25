<?php

$uri = explode('?', $_SERVER['REQUEST_URI'])[0];

switch($uri) {
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
    case '/personnes':
        require_once 'controllers/vitrine.php';
        personnes();
    case '/auth/login':
        require_once 'controllers/auth.php';
        login();
        break;
    case '/auth/logout':
        require_once 'controllers/auth.php';
        logout();
        break;
    case '/auth/register':
        require_once 'controllers/auth.php';
        register();
        break;
        case '/auth/unregister':
            require_once 'controllers/auth.php';
            unregister();
            break;
        case '/auth/me':
            require_once 'controllers/auth.php';
            me();
            break;
    default:
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
        break;
}

?>