<?php 

require "utils.php";

function get_users(){
    return load_data("users");
}

function get_user($mail){
    $users = get_users();

    foreach($users as $user) {
        if($user['mail'] == $mail) return $user;
    }
}

function create_user($name, $firstname, $phone, $mail, $password, $group){
    if(get_user($mail) != null) return false;
    
    $user = array(
        "name" => $name,
        "firstname" => $firstname,
        "phone" => $phone,
        "mail" => $mail,
        "password" => password_hash($password, PASSWORD_DEFAULT),
        "group" => $group,
    );

    $users = get_users();
    array_push($users, $user);
    save_data("users", $users);
    return true;
}

function remove_user($mail, $password){
    if(!check_password($mail, $password))return false;
    $users = array();
    foreach(get_users() as $u) {
        if($u["mail"] != $mail) {
            array_push($users, $u);
        }
    }
    save_data("users", $users);
    return true;
}

function connect($mail, $password){
    if(!check_password($mail, $password))return false;
    $user = get_user($mail);
    session_start();
    $_SESSION["mail"] = $mail;
    $_SESSION["name"] = $user["name"];
    $_SESSION["firstname"] = $user["firstname"];
    $_SESSION["group"] = $user["group"];
    return true;
}

function is_connected() {
    return isset($_SESSION);
}

function disconnect(){
    session_destroy();
    unset($_SESSION);
}

function check_password($mail, $password){
    $user = get_user($mail);
    return password_verify($password, $user["password"]);
}

function has_permission($permission_level) {
    if(!is_connected()) return false;
    
    require 'models/groups.php';
    return get_group($_SESSION['group'])['level'] >= $permission_level;
}

?>