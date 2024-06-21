<?php $title = "A Propos"; ?>

<?php ob_start(); ?>
<div class="container">
    <hr class="featurette-divider">
</div>
<div class="jumbotron jumbotron-fluid text-white mb-4 py-4" style="background-color:#455A64">
    <div class="text-center">
        <h1>Au sujet de l'entreprise</h1>
    </div>
</div>
<br>
<br>

<div class="row" style="margin-left : 75px;">
<div class="col p-3">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="./src/img/batiement.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">37</h4>
      <p class="card-text">Le siège de Nantes : <br><br>IL s'agit du siège social de l'entreprise, en plus de réunir tous les services de l'entreprise nous y retrouvons l'équipe de direction de l'entreprise et le service comptabilité.<br> Le site de Nantes réunit 157 employés et se localise au 3 boulevard de la république 44100 Nantes.<br></p>
    </div>
  </div>
</div>
<div class="col p-3">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="./src/img/angers.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">37</h4>
      <p class="card-text">Le site d'Angers <br><br> Ce site fut ouvert en 2009 suite à la demande importante de nos services en Pays de la Loire. <br>Sur ce site nous comptons 53 employés, il est situé au 5 boulevard des français 49000 Angers <br></p>
    </div>
  </div>
</div>
<div class="col p-3">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="./src/img/stmalo.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">37</h4>
      <p class="card-text">Un nouveau site à Saint-Malo : <br><br>L'ouverture du site de Saint-Malo est prévue pour le 15 février 2025. <br>Ce site permettera d'accueillir 50 des employés de Nantes qui seront aidés financierement dans le changement de localisation, et d'accueillir également 30 nouveaux employés consacrés à un nouveau service d'experts en communication.</p>
    </div>
  </div>
</div>
</div>
<br>
<div class="container">
    <hr class="featurette-divider">
</div>
<br>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
    <div class="carousel-item active">
    <img src="./src/img/frise3.png" alt="frise3" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
    <img src="./src/img/frise4.png" alt="frise4" class="d-block" style="width:100%">
    </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
</button>
</div>



<?php $content = ob_get_clean(); ?>

<?php require 'templates/vitrine.php'; ?>