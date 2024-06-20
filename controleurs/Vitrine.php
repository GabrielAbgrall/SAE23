<?php

function Accueil() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'vues/accueil.php';
    }
}

?>