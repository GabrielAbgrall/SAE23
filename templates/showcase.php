<?php ob_start();

// HEADER
?>

<header>
    <nav class="navbar navbar-expand-lg  p-0 m-0 d-flex flex-row justify-content-between" style="background:#455A64">
        <div class="d-flex flex-row align-items-center justify-content-center m-0 p-0">
            <a class="navbar-brand m-0 p-0" href="home">
                <img src="/src/img/37.ico" height="75px" alt="Logo" loading="lazy"/>
            </a>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link text-light" href="activities">Nos activitées</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="employees">Qui sommes-nous?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="about">A propos</a>
                </li>
                <?php
                require_once 'models/users.php';
                if(is_connected() && has_permission(10)) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/intranet">Intranet</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="dropdown">
            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/src/img/avatar.ico" class="rounded-circle" height="30" alt="Avatar" loading="lazy"/>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
            <?php if(empty($_SESSION)) { ?>
                <li>
                    <a class="dropdown-item" href="auth/login">Se connecter</a>
                </li>
                <li>
                    <a class="dropdown-item" href="auth/register">S'inscrire</a>
                </li>
            <?php } else { ?>
                <li>
                    <a class="dropdown-item" href="auth/me">Mon compte</a>
                </li>
                <li>
                    <a class="dropdown-item" href="auth/logout">Se déconnecter</a>
                </li>
            <?php } ?>
            </ul>
        </div>
    </nav>
</header>

<?php $header = ob_get_clean(); ?>



<?php ob_start();

// MAIN
?>

<main>
    <?=$content?>
</main> 

<?php $main = ob_get_clean(); ?>



<?php ob_start();

// FOOTER
?>

<footer class="text-center text-lg-start text-secondary bg-body-tertiary rounded" >
    <div class="container p-4 pb-0">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                37
                </h6>
                <p>
                Le chiffre 37 n'est jamais choisi au hasard tout comme votre réussite ne sera jamais un hasard si vous choisissez de travailler avec nous !
                
                </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Services poprosés : </h6>
                <p>
                <a class="text-secondary">Community manager</a>
                </p>
                <p>
                <a class="text-secondary">Marketing</a>
                </p>
                <p>
                <a class="text-secondary">Conseiller commerciaux</a>
                </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact : </h6>
                <p><i class="fas fa-home mr-3"></i> Nantes, 3 Boulevard de la République, FR</p>
                <p><i class="fas fa-envelope mr-3"></i> com37@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> + 05 18 09 17 37</p>
                <p><i class="fas fa-home mr-3"></i> Instagram : @37</p>
            </div>
        </div>
    </div>
</footer>

<?php $footer = ob_get_clean(); ?>

<?php require 'templates/base.php'; ?>