<?php $title = "A Propos"; ?>

<?php ob_start(); ?>

<h1>Au sujet de l'entreprise</h1>
<p>Bienvenue sur la page de présentation d'exemple du modèle MVC</p>

<p><?= $data ?></p>

<?php $content = ob_get_clean(); ?>

<?php require 'templates/base.php'; ?>