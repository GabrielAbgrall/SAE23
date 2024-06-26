<?php
require_once "utils.php";
function intranet() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/intranet/intranet.php';
    }
}
function directoryp() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/intranet/directory_partner.php';
    }
}
function directoryi() {
    require_once "models/users.php";
 #   if (!has_permission(10)) abort(403);
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/directory_internal.php';
    }
}
function directoryc() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/intranet/directory_client.php';
    }
}
function wiki() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/intranet/wiki.php';
    }
}
function drive() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/intranet/drive.php';
    }
}

?>