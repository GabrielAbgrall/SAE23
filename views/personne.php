<?php $title = "Personnel"; ?>

<?php ob_start(); ?>

<div class="container">
    <hr class="featurette-divider">
</div>
<div class="jumbotron jumbotron-fluid text-white mb-4 py-4" style="background-color:#455A64">
    <div class="text-center">
        <h1>Qui sommes nous ?</h1>
    </div>
</div>
<br>
<br>
<div>
    <p> fonction php qui affiche les directeurs et le site dont ils sont directeurs</p>
</div>

<?php $content = ob_get_clean(); ?>

<?php require 'templates/vitrine.php'; ?>