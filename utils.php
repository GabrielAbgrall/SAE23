<?php

function read_file($path) {
    $file = fopen($path, 'r');
    $data = fread($file, filesize($path));
    fclose($file);
    clearstatcache();
    return $data;
}

function write_file($path, $data) {
    $file = fopen($path, 'w');
    fwrite($file, $data);
    fclose($file);
    clearstatcache();
}

function load_data($path) {
    return json_decode(read_file("data/$path.json"), true);
}

function save_data($path, $data) {
    write_file("data/$path.json", json_encode($data));
}

function abort($code) {
    header($_SERVER["SERVER_PROTOCOL"]."Error $code");
    exit;
}

function redirect($uri) {
    header("Location:$uri");
    exit;
}

?>