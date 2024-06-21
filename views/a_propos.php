<?php $title = "A Propos"; ?>

<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid text-white mb-4 py-4" style="background-color:#455A64">
    <div class="text-center">
        <h1>Au sujet de l'entreprise</h1>
    </div>
</div>

<div class="container">
<h2>Notre entreprise :</h2>
  <p>Image at the top (card-img-top):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="./src/img/batiement.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">37</h4>
      <p class="card-text">Une hisoire particulière :</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require 'templates/vitrine.php'; ?>