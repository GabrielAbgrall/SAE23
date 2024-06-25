<?php $title = "Mon compte"; ?>

<?php ob_start(); ?>

<form class="container-fluid" action="/auth/register" method="POST">
    <h1>Mon compte</h1>

    <input type="text" name="name" id="name" placeholder="Nom" required value="<?=$_SESSION['name']?>">
    <input type="text" name="firstname" id="firstname" placeholder="Prénom" required value="<?=$_SESSION['firstname']?>">
    <input type="text" name="mail" id="mail" placeholder="Email" required value="<?=$_SESSION['mail']?>">
    <input type="tel" name="phone" id="phone" required value="<?=$_SESSION['phone']?>">

    <p>Groupe : <?=$_SESSION['group']?></p>
    
    <input type="password" name="confirm_password" id="confirm_password" placeholder="Nouveau mot de passe">
    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirmer le nouveau mot de passe">

    <input type="password" name="password" id="password" placeholder="Mot de passe" required>

    <input type="submit" value="Appliquer les modifications'">

    <a href="/">Retour à l'acceuil</a>
</form>

<?php $content = ob_get_clean(); ?>

<?php require 'templates/base.php'; ?>