<?php 

include "utils.php";


function get_users(){
    return load_data("users");
}


function create_user($name, $firstname, $phone, $mail, $password, $group){
    $user = array(
        "name" => $name,
        "firstname" => $firstname,
        "phone" => $phone,
        "mail" => $mail,
        "password" => $password,
        "group" => $group,
    );

    $users = get_users();
    array_push($users, $user);
    save_data("users", $users);
}


?>