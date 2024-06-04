<?php

function open_file($path) {
    return fread(fopen($path, 'r'), filesize($path));
}

function get_template($name) {
    return open_file("src/html/$name.html");
}

?>