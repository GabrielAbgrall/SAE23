<?php $title = "Mon compte"; ?>

<?php ob_start(); ?>
<div class="container">
    <hr class="featurette-divider">
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Mon compte</h1>
                    <form action="/auth/me" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg mb-3" name="name" id="name" placeholder="Nom" required value="<?=$_SESSION['name']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg mb-3" name="firstname" id="firstname" placeholder="Prénom" required value="<?=$_SESSION['firstname']?>">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg mb-3" name="mail" id="mail" placeholder="Email" required value="<?=$_SESSION['mail']?>">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control form-control-lg mb-3" name="phone" id="phone" required value="<?=$_SESSION['phone']?>">
                        </div>
                        <div class="form-group">
                            <p class="form-control-lg">Groupe : <?=$_SESSION['group']?></p>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg mb-3" name="new_password" id="new_password" placeholder="Nouveau mot de passe">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg mb-3" name="confirm_new_password" id="confirm_new_password" placeholder="Confirmer le nouveau mot de passe">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg mb-3" name="password" id="password" placeholder="Mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Appliquer les modifications</button>
                        <div class="text-center">
                            <a href="/" class="btn btn-link btn-lg">Retour à l'accueil</a>
                            <a href="/auth/unregister" class="btn btn-link btn-lg">Se désinscrire</a>
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