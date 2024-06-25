<?php $title = "Intranet"; ?>

<?php ob_start(); ?>
<h1>MVC Exemple</h1>
<p>Bienvenue sur la page de présentation d'exemple du modèle MVC</p>


<?php $content = ob_get_clean(); ?>

<?php require 'templates/intranet.php'; ?>