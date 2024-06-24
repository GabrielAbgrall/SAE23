<?php $title = "Connexion"; ?>

<?php ob_start(); ?>

<form class="container-fluid" action="/auth/unregister" method="POST">
    <h1>Se désinscrire</h1>
    <input type="text" name="mail" id="mail" placeholder="Email" required>
    <input type="password" name="password" id="password" placeholder="Mot de passe" required>
    <input type="checkbox" name="confirm" id="confirm" required>
    <label for="confirm">Je confirme la suppression définitive de mon compte</label>
    <input type="submit" value="Se désinscrire">

    <a href="/">Retour à l'acceuil</a>
</form>

<?php $content = ob_get_clean(); ?>

<?php require 'templates/base.php'; ?>