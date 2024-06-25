<?php $title = "Wiki"; ?>

<?php ob_start(); ?>
<div class='mt-2 p-5'>
<div class='mt-3 rounded'>
<h1 class="rounded" style="background:#FFC107">Informations et commentaires sur le site !</h1>
<h3>Page D'acceuil</h3>
<p>Dans la page d'acceuil, rien de spécial, donne quelque information sur le site et affiche les 5 dernières annonces.</p>
<h3>Recherche</h3>
<p>Dans cette page, on affiche les annonces globales avec au dessus, un formulaire pour la recherche.</p>
<p>Le Foprmulaire demande au minimum une date pour les annonces et va rechercheer dans celle ci pour afficher uniquement celle qui correspond à la recherche.</p>
<h3>Calendrier</h3>
<p>Page qui est censé acceuillir le calendrier ( Pas eu le temps)</p>
<h3>Avis</h3>
<p>La page ou nous nous trouvons, elle explique l'utilisation du site</p>
<h3>Profil</h3>
<p>Page regroupant les informations du profil utilisateur</p>
<p>Il y a aussi la possibilité de changer ces informations</p>
<p>La session se met à jour directement dans le JSON mais il arrive que l'on doit rafraichir la page pour que les infos se mettent à jour</p>
<h3>Modifier une annonce</h3>
<p>Affiche les annonces posté par l'utilisateur</p>
<p>Celui ci à un bouton pour les supprimer</p>
<h3>Ajouter une annonce</h3>
<p>Formulaire permettant de créer une annonce et de l'ajouter dans la liste des annonce du fichier JSON, elle l'affiche en direct dans la liste des annonces</p>
<h3>Modération</h3>
<p>Page affichant les annonces avec une option pour les supprimer pour le modérateur</p>
<h3>Administration</h3>
<p>Page affichant les utilisateurs et offrant une option de modifier leur role</p>
<h3>Inscription</h3>
<p>Page d'inscription permmettant à une utilisateur de créer un compte 'user', celui ci peut y renseigner ses informations.</p>
<h3>Connexion</h3>
<p>Page de connexion permettant à un utilisateur de se connecter à son compte s'il est présent dans le fichier JSON utilisateurs</p>
<h3>Deconnexion</h3>
<p>Bouton de déconnexion</p>

<?php $content = ob_get_clean(); ?>

<?php require './templates/intranet.php'; ?>