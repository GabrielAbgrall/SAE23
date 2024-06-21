<?php

function intranet() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/intranet.php';
    }
}

?>