<?php 
include "utils.php";

$base = get_template("Base");

$base = str_replace("%TITRE%", "blou", $base);

echo $base;
?>