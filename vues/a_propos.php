<?php 
include "utils.php";

$base = get_template("vitrine");

$base = str_replace("%TITRE%", "blou", $base);

echo $base;
?>