<?php $title = "A Propos"; ?>

<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid text-white mb-4 py-4" style="background-color:#455A64">
    <div class="text-center">
        <h1>Au sujet de l'entreprise</h1>
    </div>
</div>
<br>
<br>
<div class="row">
<div class="col p-3">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="./src/img/batiement.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">37</h4>
      <p class="card-text">Le siège de Nantes</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div>
<div class="col p-3">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="./src/img/angers.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">37</h4>
      <p class="card-text">Le site d'Angers</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div>
<div class="col p-3">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="./src/img/angers.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">37</h4>
      <p class="card-text">Un nouveau site à Saint-Malo</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div>
</div>

<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="la.jpg" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="chicago.jpg" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="New York" class="d-block" style="width:100%">
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