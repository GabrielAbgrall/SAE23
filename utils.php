<?php

function read_file($path) {
    $file = fopen($path, 'r');
    $data = fread($file, filesize($path));
    fclose($file);
    clearstatcache();
    return $data;
}

function save_file($path, $data) {
    $file = fopen($path, 'w');
    fwrite($file, $data);
    fclose($file);
    clearstatcache();
}

function load_data($path) {
    return json_decode(read_file("data/$path.json"), true);
}

function save_data($path, $data) {
    save_data("data/$path.json", json_encode($data));
}

?>