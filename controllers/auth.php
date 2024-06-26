<?php

require_once 'utils.php';

function login() {
    $next = @$_REQUEST['next'];
    if(!isset($next)) $next = '/';

    require_once 'models/users.php';
    switch($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            if(is_connected()) redirect($_REQUEST['next']);
            require_once 'views/auth/login.php';
            break;
        case 'POST':
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
    $next = @$_REQUEST['next'];
    if(!isset($next)) $next = '/';
    
    require_once 'models/users.php';
    switch($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            require_once 'views/auth/register.php';
            break;
        case 'POST':
            if(is_connected()) disconnect();
            if($_POST['password'] != $_POST['confirm_password']) redirect('/auth/register?error=Les mots de passe ne correspondent pas');
            if(strlen($_POST['password']) < 3) redirect('/auth/register?error=Le mot de passe est trop court');
            if(strpos($_POST['mail'], '@') === false || strpos($_POST['mail'], ' ') !== false) redirect('/auth/register?error=Format du mail incorrect');
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
            if(!is_connected()) redirect('/auth/login?next=/auth/me');

            require_once 'models/users.php';
            if(!check_password($_SESSION['mail'], $_POST['password'])) redirect('/auth/me?error=Mot de passe incorrect');

            $new_password = @$_POST['new_password'];
            if($new_password == '') $new_password = $_POST['password'];
            else {
                if($_POST['new_password'] != $_POST['confirm_new_password']) redirect('/auth/me?error=Les mots de passe ne correspondent pas');
                if(strlen($_POST['new_password']) < 3) redirect('/auth/me?error=Le mot de passe est trop court');
            }

            if(!modify_user(
                $_POST['name'],
                $_POST['firstname'],
                $_POST['phone'],
                $_POST['mail'],
                $new_password,
                $_SESSION['group'],
                $_SESSION['mail'],
                $_POST['password']
            )) redirect('/auth/me?error=Le nouveau mail est déjà utilisé');

            connect($_POST['mail'], $new_password);
            redirect('/auth/me');
            break;
        default:
            abort(404);
            break;
    }
}

?>
