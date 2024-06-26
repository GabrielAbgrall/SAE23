<?php

session_start();

require_once 'utils.php';

$uri = explode('?', $_SERVER['REQUEST_URI'])[0];

switch($uri) {

    case '/file':
        switch($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                echo "
                <form action='/file' method='POST' enctype='multipart/form-data'>
                    <input type='file' name='file' id='file'>
                    <input type='submit' value='Envoyer le fichier'>
                </form>
                ";
                require_once 'models/files.php';
                require_once 'models/users.php';
                var_dump(get_files(get_user($_SESSION['mail']), '/'));
                break;
            case 'POST':
                require_once 'models/files.php';
                // save_file('/', $_FILES['file'], 0);
                break;
        }
        break;

    // HOME
    case '/':
        redirect('/home');
        break;

    // SHOWCASE
    case '/home':
        require_once 'controllers/showcase.php';
        home();
        break;
    case '/about':
        require_once 'controllers/showcase.php';
        about();
        break;
    case '/activities':
        require_once 'controllers/showcase.php';
        activities();
        break;
    case '/employees':
        require_once 'controllers/showcase.php';
        employees();
        break;
    
    // INTRANET
    case '/intranet':
        require_once 'controllers/intranet.php';
        intranet();
        break;
    case '/intranet/directory_client':
        require_once 'controllers/intranet.php';
        directoryc();
        break;
    case '/intranet/directory_partner':
        require_once 'controllers/intranet.php';
        directoryp();
        break;  
    case '/intranet/directory_internal':
        require_once 'controllers/intranet.php';
        directoryi();
        break; 
    case '/intranet/wiki':
        require_once 'controllers/intranet.php';
        wiki();
        break; 
    case '/intranet/document':
        require_once 'controllers/intranet.php';
        document();
        break;
    
    // AUTH
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
    
    // DEFAULT 404
    default:
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
        break;
}

?>