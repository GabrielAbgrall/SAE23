<?php

function open_file($path) {
    return fread(fopen($path, 'r'), filesize($path));
}

function get_template($name) {
    return open_file("src/html/$name.html");
}

function load_data($path) {
    return json_decode(fread(
        fopen("data/$path.json", 'r'),
        filesize("data/$path.json")
    ), true);
}

function save_data($path, $data) {
    fwrite(
        fopen("data/$path.json", 'w'),
        json_encode($data)
    );
}

?>