<?php $title = "Connexion"; ?>

<?php ob_start(); ?>

<form class="container-fluid" action="/auth/register" method="POST">
    <h1>S'inscrire</h1>
    <input type="text" name="name" id="name" placeholder="Nom" required>
    <input type="text" name="firstname" id="firstname" placeholder="Prénom" required>
    <input type="text" name="mail" id="mail" placeholder="Email" required>
    <input type="tel" name="phone" id="phone" required>
    <input type="password" name="password" id="password" placeholder="Mot de passe" required>
    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirmer le mot de passe" required>
    <input type="submit" value="S'inscrire'">

    <a href="/auth/login">Se connecter</a>
</form>

<?php $content = ob_get_clean(); ?>

<?php require 'templates/base.php'; ?>