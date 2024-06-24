<?php

function accueil() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/accueil.php';
    }
}

?>
<?php

function a_propos() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/a_propos.php';
    }
}

?>
<?php

function activities() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/activities.php';
    }
}

?>
<?php

function personnes() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/personne.php';
    }
}

?>