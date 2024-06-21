<?php $title = "A Propos"; ?>

<?php ob_start(); ?>

<h1>Au sujet de l'entreprise</h1>
<p>Bienvenue sur la page de présentation d'exemple du modèle MVC</p>


<h2>Notre entreprise :</h2>
  <p>Image at the top (card-img-top):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="./src\img/batiement.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">37</h4>
      <p class="card-text">Une hisoire particulière :</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>

<p><?= $data ?></p>

<?php $content = ob_get_clean(); ?>

<?php require 'templates/vitrine.php'; ?>