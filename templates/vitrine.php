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
        <nav class="navbar navbar-expand-sm navbar-light" style="background-color:#BDBDBD">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/src/img/37.ico" alt="Logo" style="width:40px;" class="rounded-pill">
                </a>
                
                <div class="text-center">
              <ul class="navbar-nav" >
                
                <li class="nav-item">
                  <a class="nav-link active" href="index.php">Accueil</a>
                </li>
               <li class="nav-item">
                  <a class="nav-link" href="/vues/activité.php">Nos activités</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/vues/personne.php">Qui sommes-nous ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/vues/a_propos.php">A propos</a>
                  </li>
                </div>
          
                <li class="nav-item">
                    <button type="button" class="btn ml-auto" style="background-color:#455A64 ; color: #FFFFFF">Se connecter</button>
                
                </ul>
                    
            </div>
          </nav>

        <?=$content?> 


        <footer class="text-center text-lg-start text-secondary " style="background-color:#BDBDBD">
            <div class="container p-4 pb-0">
                <section class="">
                  <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold">
                        37
                      </h6>
                      <p>
                        Le chiffre 37 n'est jamais choisi au hasard tout comme votre réussite ne sera jamais un hasard si vous choisiez de travailler avec nous !
                        
                      </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
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
                 
                </section>
            
        </footer>
    
    </body>

    
</html>