<?php $title = "Intranet"; ?>

<?php ob_start(); ?>
<h1 class="rounded" style="background:#FFC107">Bienvenue sur l'intranet de l'entreprise</h1>
<h2 class="rounded" style="background:#CFD8DC">Informations</h2>
<p>La partie intranet n'est accessible qu'aux partenaires et membres de l'entreprise</p>
<h3>Page Activité</h3>
<p>Présentation des activités de l'entreprise communiquées</p>

<?php $content = ob_get_clean(); ?>

<?php require 'templates/intranet.php'; ?>