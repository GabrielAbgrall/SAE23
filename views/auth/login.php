<?php $title = "Connexion"; ?>

<?php ob_start(); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Connexion</h1>
                    <form action="/auth/login?next=<?=$next?>" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg mb-3" name="mail" id="mail" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg mb-3" name="password" id="password" placeholder="Mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Se connecter</button>
                        <div class="text-center">
                            <a href="/auth/register" class="btn btn-link btn-lg">Créer un compte</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $main = ob_get_clean(); ?>

<?php $header = ''; ?>
<?php $footer = ''; ?>

<?php require 'templates/base.php'; ?>
