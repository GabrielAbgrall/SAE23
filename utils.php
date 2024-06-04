<?php

function read_file($path) {
    $file = fopen($path, 'r');
    $data = fread($file, filesize($path));
    fclose($file);
    clearstatcache();
    return $data;
}

function get_template($name) {
    return read_file("src/html/$name.html");
}

function load_data($path) {
    return json_decode(read_file("data/$path.json"), true);
}

function save_data($path, $data) {
    $file = fopen("data/$path.json", 'w');
    fwrite(
        $file,
        json_encode($data)
    );
    fclose($file);
    clearstatcache();
}

?>