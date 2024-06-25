<?php

require_once 'utils.php';

function get_all_files() {
    return load_data('drive/files');
}

function get_files($user) {
    $files = array();
    foreach(get_all_files() as $f) {
        if(has_access($f, $u)) 
    }
}

function get_file($path) {
}

function save_file($path, $file) {
    if(null !== get_file($path)) return false;


}

function delete_file($path) {
}

function create_folder($path) {
}

function delete_folder($path) {
}

function has_access($path, $user) {
}

?>