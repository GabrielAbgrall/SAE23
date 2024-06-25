<?php

require_once 'utils.php';

function login() {
    require_once 'models/users.php';
    switch($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            $next = $_REQUEST['next'];
            if(!isset($next)) $next = '/';
            if(is_connected()) redirect($_REQUEST['next']);
            require_once 'views/auth/login.php';
            break;
        case 'POST':
            $next = $_REQUEST['next'];
            if(!isset($next)) $next = '/';
            if(connect($_POST['mail'], $_POST['password'])) {
                redirect($next);
            }
            else redirect('/auth/login?error=Identifiants invalides');
            break;
        default:
            abort(404);
            break;
    }
}

function logout() {
    require_once 'models/users.php';
    disconnect();
    redirect('/');
}

function register() {
    require_once 'models/users.php';
    switch($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            require_once 'views/auth/register.php';
            break;
        case 'POST':
            if(is_connected()) disconnect();
            if($_POST['password'] != $_POST['confirm_password']) redirect('auth/register?error=Les mots de passe ne correspondent pas');
            if(create_user($_POST['name'], $_POST['firstname'], $_POST['phone'], $_POST['mail'], $_POST['password'], 'Invité')) {
                connect($_POST['mail'], $_POST['password']);
                redirect('/');
            }
            else redirect('/auth/register?error=Cet email existe déjà');
            break;
        default:
            abort(404);
            break;
    }
}

function unregister() {
    require_once 'models/users.php';
    switch($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            if(!is_connected()) redirect('/auth/login?next=/auth/unregister');
            require_once 'views/auth/unregister.php';
            break;
        case 'POST':
            if(!is_connected()) redirect('/auth/login?next=/auth/unregister');
            else disconnect();
            if(remove_user($_SESSION['mail'], $_POST['password'])) {
                disconnect();
                redirect('/');
            }
            else redirect('/auth/unregister?error=Une erreur est survenue, veuillez réessayer plus tard');
            break;
        default:
            abort(404);
            break;
    }
}

function me() {
    require_once 'models/users.php';
    switch($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            if(!is_connected()) redirect('/auth/login?next=/auth/me');
            require_once 'views/auth/me.php';
            break;
        case 'POST':
            // TODO
            break;
        default:
            abort(404);
            break;
    }
}

?>