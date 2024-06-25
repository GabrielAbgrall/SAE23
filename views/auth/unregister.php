<?php $title = "Se désinscrire"; ?>

<?php ob_start(); ?>

<form class="container-fluid" action="/auth/unregister" method="POST">
    <h1>Se désinscrire</h1>
    <p>Vous êtes connecté en tant que <?=$_SESSION['mail']?></p>
    <input type="password" name="password" id="password" placeholder="Mot de passe" required>
    <input type="checkbox" name="confirm" id="confirm" required>
    <label for="confirm">Je confirme la suppression définitive de mon compte</label>
    <input type="submit" value="Se désinscrire">

    <a href="/">Retour à l'acceuil</a>
</form>

<?php $main = ob_get_clean(); ?>

<?php $header = ''; ?>
<?php $footer = ''; ?>

<?php require 'templates/base.php'; ?>