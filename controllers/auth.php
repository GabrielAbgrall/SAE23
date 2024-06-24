<?php

require_once 'utils.php';

function login() {
    switch($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            require_once 'models/users.php';
            if(is_connected()) redirect($_REQUEST['next']);
            require_once 'views/auth/login.php';
            break;
        case 'POST':
            if(true) {
                var_dump($_REQUEST['next']);
                redirect($_REQUEST['next']);
            }
            //else redirect('/auth/login');
            break;
        default:
            abort(404);
            break;
    }
}

function logout() {

}

function register() {
}

function unregister() {

}

?>