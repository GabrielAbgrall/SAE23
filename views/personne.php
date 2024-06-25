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
<?php
require_once "./models/users.php";

$directeurs = get_users_with_permission_between(41, 45);

foreach($directeurs as $directeur){
    echo '<div class="container d-flex flex-row mt-4 justify-content-between">
    <div class="mx-5">
            <img src="/src/img/pers.png" style="width:150px; height:auto" class="rounded-circle">
        </div>
        <div class="col-md-6">
            <h4>'.$directeur["name"].' '.$directeur["firstname"].'</h4>
            <p>'.$directeur["group"].'<br>'.$directeur["mail"].'<br>'.$directeur["phone"].'<br></p>
        </div>
    </div>
    <div class="container">
        <hr class="featurette-divider">
    </div>';
};
?>
<h3> Exemple de ce que ça donne(a enlever quand le php fonctionnera)</h3>
<div class="container d-flex flex-row mt-4 justify-content-between">
<div class="mx-5">
        <img src="/src/img/pers.png" style="width:150px; height:auto" class="rounded-circle">
    </div>
    <div class="col-md-6">
        <h2>Nom personne</h2>
        <p>@mail, num, poste</p>
    </div>
</div>
<div class="container">
    <hr class="featurette-divider">
</div>
<div class="container d-flex flex-row mt-4 justify-content-between">
<div class="mx-5">
        <img src="/src/img/perso1.jpeg" style="width:150px; height:auto" class="rounded-circle">
    </div>
    <div class="col-md-6">
        <h2>Nom personne</h2>
        <p>@mail, num, poste</p>
    </div>
</div>
<div class="container">
    <hr class="featurette-divider">
</div>
<div class="container d-flex flex-row mt-4 justify-content-between">
<div class="mx-5">
        <img src="/src/img/perso2.jpeg" style="width:150px; height:auto" class="rounded-circle">
    </div>
    <div class="col-md-6">
        <h2>Nom personne</h2>
        <p>@mail, num, poste</p>
    </div>
</div>
<div class="container">
    <hr class="featurette-divider">
</div>
<div class="container d-flex flex-row mt-4 justify-content-between">
<div class="mx-5">
        <img src="/src/img/perso3.jpeg" style="width:150px; height:auto" class="rounded-circle">
    </div>
    <div class="col-md-6">
        <h2>Nom personne</h2>
        <p>@mail, num, poste</p>
    </div>
</div>
<br>
<br>
<?php $content = ob_get_clean(); ?>

<?php require 'templates/vitrine.php'; ?>