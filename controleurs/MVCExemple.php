<?php

function MVCExemple() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'modeles/groups.php';
        $custom = get_group('Admin')['name'];
        require 'vues/MVCExemple.php';
    }
}

?>