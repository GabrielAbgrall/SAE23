<?php $title = "Connexion"; ?>

<?php ob_start(); ?>

<form class="container-fluid" action="/auth/login?next=<?=$next?>" method="POST">
    <h1>Connexion</h1>
    <input type="email" name="mail" id="mail" placeholder="Email" required>
    <input type="password" name="password" id="password" placeholder="Mot de passe" required>
    <input type="submit" value="Se connecter">

    <a href="/auth/register">Créer un compte</a>
</form>

<?php $main = ob_get_clean(); ?>

<?php $header = ''; ?>
<?php $footer = ''; ?>

<?php require 'templates/base.php'; ?>