<?php

function accueil() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/accueil.php';
    }
}
function a_propos() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/a_propos.php';
    }
}

?>