<?php $title = "Se désinscrire"; ?>

<?php ob_start(); ?>
<div class="container">
    <hr class="featurette-divider">
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Se désinscrire</h1>
                    <form action="/auth/unregister" method="POST">
                        <div class="form-group">
                            <p class="form-control-lg">Vous êtes connecté en tant que <?=$_SESSION['mail']?></p>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg mb-3" name="password" id="password" placeholder="Mot de passe" required>
                        </div>
                        <div class="form-group form-check mb-3">
                            <input type="checkbox" class="form-check-input" name="confirm" id="confirm" required>
                            <label class="form-check-label form-control-lg" for="confirm">Je confirme la suppression définitive de mon compte</label>
                        </div>
                        <button type="submit" class="btn btn-danger btn-lg btn-block mb-3">Se désinscrire</button>
                        <div class="text-center">
                            <a href="/" class="btn btn-link btn-lg">Retour à l'accueil</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <hr class="featurette-divider">
</div>

<?php $main = ob_get_clean(); ?>

<?php $header = ''; ?>
<?php $footer = ''; ?>

<?php require 'templates/base.php'; ?>