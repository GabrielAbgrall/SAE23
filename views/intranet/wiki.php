<?php $title = "Wiki"; ?>

<?php ob_start(); ?>
<div class='mt-2 p-5'>
<div class='mt-3 rounded'>
<h1 class="rounded" style="background:#FFC107">Wiki de documentation du site</h1>
<h2 class="rounded" style="background:#CFD8DC">Présentation du site vitrine</h2>
<h3>Page Home</h3>
<p>Vitrine principale du site avec différents éléments founient par l'entreprise, possibilité de réaslisé un devis</p>
<h3>Page Activité</h3>
<p>Présentation des activités de l'entreprise communiquées</p>
<p>Informations sur les trois domaines de l'entreprise : Marketing Digital, SEO, Community Manager</p>
<h3>Présentation de l'équipe</h3>
<p>Affiche les membres de l'entreprises les plus importants et évoluent en fonction des utilisateurs</p>
<h3>Les informations sur nous</h3>
<p>Affichage des lieux des différents sites de l'entreprise, de la frise chronologique de celle-ci et de nos partenaires</p>
<h2 class="rounded" style="background:#CFD8DC">Présentation de la partie connexion</h2>
<h3>Connexion</h3>
<p>Page de connexion</p>
<p>Connexion de l'utilisateur permettant un accès à l'intranet si la permission lui est accordée</p>
<h3>Suppression Utilisateur</h3>
<p>Permet la suppresion d'un compte utilisateur</p>
<h3>Inscription</h3>
<p>Formulaire d'inscription de l'utilisateur</p>
<h3>Profil</h3>
<p>Permet l'affichage et la modification des éléments d'un profil</p>
<h2 class="rounded" style="background:#CFD8DC">Présentation de l'intranet</h2>
<h3>Document</h3>
<p>Possibilité de déposer, modifier, ajouter, supprimer des documents de l'intranet</p>
<h3>Annuaires</h3>
<p>Différents annuraires permettant d'afficher les différentes cartes de visites des membres de l'entreprise,des partenaires ou encore des clients</p>
<h3>Wiki</h3>
<p>La page ou nous sommes qui informe sur l'utilisation du site</p>
<h3>Connexion</h3>
<p>davidgatel@gmail.com / bonjour</p>
<p>frmenguy@gmail.com / bonjour</p>

<?php $content = ob_get_clean(); ?>

<?php require './templates/intranet.php'; ?>