<?php $title = "Intranet"; ?>

<?php ob_start(); ?>
<div class="container mt-5">
        <div class="text-center">
            <h1 class="rounded p-3" style="background:#FFC107">Bienvenue sur l'intranet de l'entreprise</h1>
        </div>

        <div class="mt-5">
            <h2 class="rounded p-3" style="background:#CFD8DC">Informations</h2>
            <p class="mt-3">
                La partie intranet n'est accessible qu'aux partenaires et membres de l'entreprise. 
                Ici, vous trouverez toutes les informations et ressources nécessaires pour faciliter 
                votre travail au quotidien. N'hésitez pas à explorer les différentes sections pour 
                découvrir tout ce que notre intranet a à offrir.
            </p>
        </div>

        <div class="mt-4">
            <h3>Page Activité</h3>
            <p>
                Présentation des activités de l'entreprise communiquées. Nous nous efforçons de maintenir 
                nos employés informés des derniers développements et initiatives. Sur cette page, vous 
                trouverez des détails sur nos projets actuels, les succès récents, et les futurs événements 
                importants. Votre participation et vos idées sont toujours les bienvenues pour faire avancer 
                notre entreprise ensemble.
            </p>
        </div>

        <div class="mt-4">
            <h3>Dernières Nouvelles</h3>
            <p>
                Tenez-vous au courant des dernières nouvelles de l'entreprise. Notre section de nouvelles est 
                mise à jour régulièrement pour vous fournir les informations les plus récentes sur ce qui se 
                passe dans et autour de notre entreprise. Qu'il s'agisse de nouvelles embauches, d'annonces de 
                direction, ou de réalisations exceptionnelles, restez informés ici.
            </p>
        </div>

    </div>


<?php $content = ob_get_clean(); ?>

<?php require 'templates/intranet.php'; ?>