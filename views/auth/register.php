<?php $title = "S'inscrire"; ?>

<?php ob_start(); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">S'inscrire</h1>
                    <form action="/auth/register" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg mb-3" name="name" id="name" placeholder="Nom" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg mb-3" name="firstname" id="firstname" placeholder="Prénom" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg mb-3" name="mail" id="mail" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control form-control-lg mb-3" name="phone" id="phone" placeholder="Téléphone" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg mb-3" name="password" id="password" placeholder="Mot de passe" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg mb-3" name="confirm_password" id="confirm_password" placeholder="Confirmer le mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">S'inscrire</button>
                        <div class="text-center">
                            <a href="/auth/login" class="btn btn-link btn-lg">Se connecter</a>
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