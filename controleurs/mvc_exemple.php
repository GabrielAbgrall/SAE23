<?php

function MVCExemple() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'modeles/mvc_exemple.php';
        $data = get_data();
        require 'vues/mvc_exemple.php';
    }
}

?>