<?php

function mvc_example() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'models/mvc_example.php';
        $data = get_data();
        require 'views/mvc_example.php';
    }
}

?>