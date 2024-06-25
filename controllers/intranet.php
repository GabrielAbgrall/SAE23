<?php
require_once "utils.php";
function intranet() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/intranet.php';
    }
}
function directoryp() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/directory_partner.php';
    }
}
function directoryi() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/directory_internal.php';
    }
}
function directoryc() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/directory_client.php';
    }
}
function wiki() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/wiki.php';
    }
}
function document() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/document.php';
    }
}

?>