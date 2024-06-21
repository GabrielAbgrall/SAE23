<?php

function accueil() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'vues/accueil.php';
    }
}

?>