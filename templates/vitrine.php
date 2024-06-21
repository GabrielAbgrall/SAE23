<!DOCTYPE html>
<html lang ="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title><?=$title?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/src/img/37.ico" />
</head>

<body>
    
    <nav class="navbar navbar-expand-lg  bg-body-tertiary p-0 m-0 d-flex flex-row justify-content-between" >
        <div class="d-flex flex-row align-items-center justify-content-center m-0 p-0">
            <a class="navbar-brand m-0 p-0" href="#">
                <img src="/src/img/37.ico" height="75px" alt="Logo" loading="lazy"/>
            </a>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link" href="activité.php">Nos activitées</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="personne.php">Qui sommes-nous?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="a_propos.php">A propos</a>
                </li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/src/img/avatar.ico" class="rounded-circle" height="30" alt="Avatar" loading="lazy"/>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                <li>
                    <a class="dropdown-item" href="#">Se connecter</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">S'inscrire</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <?=$content?>
    </main> 


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
                    <h6 class="text-uppercase mb-4 font-weight-bold">Services porposés : </h6>
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
                    <p><i class="fas fa-home mr-3"></i> Tours, ADRESSE, FR</p>
                    <p><i class="fas fa-envelope mr-3"></i> com37@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 05 18 09 17 37</p>
                    <p><i class="fas fa-home mr-3"></i> Instagram : @37</p>
                </div>
            </div>
        </div>
    </footer>

</body> 
</html>