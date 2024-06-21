<?php $title = "Accueil"; ?>

<?php ob_start(); ?>



<div class="jumbotron jumbotron-fluid text-white mb-4 py-4" style="background-color:#455A64">
    <div class="container text-center">
        <h1 class="display-4">Bienvenue au 37 !</h1>
        <p class="lead">Votre partenaire en communication et marketing digital.</p>
    </div>
</div>


<div class="container d-flex flex-row mt-4 justify-content-between">
    <div class="col-md-6">
        <h2>Notre objectif !</h2>
        <p>Nous sommes une agence de communication et de marketing passionnée par l'accompagnement des entreprises dans leur quête de visibilité accrue et d'atteinte de leurs objectifs commerciaux. 
        Grâce à des stratégies innovantes et efficaces, nous aidons nos clients à se démarquer sur le marché et à maximiser leur impact.
        Que ce soit par le biais de campagnes publicitaires, de gestion de réseaux sociaux, de création de contenu ou de développement de marque, notre équipe d'experts est dédiée à fournir des solutions sur mesure adaptées aux besoins spécifiques de chaque entreprise.
</p>
    </div>
    <div class="mx-5">
        <img src="/src/img/batiement.png" style="width:200px; height:auto" class="rounded-circle">
    </div>
</div>
<div class="container">
    <hr class="featurette-divider">
</div>


    <div id="demo" class="carousel slide" data-bs-ride="carousel">

    
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="/src/img/Carousel1.png" alt="ExPub1" class="d-block w-100">
        </div>
        <div class="carousel-item">
        <img src="/src/img/Carousel2.png" alt="ExPub2" class="d-block w-100">
        </div>
        <div class="carousel-item">
        <img src="/src/img/Carousel3.png" alt="ExPub3" class="d-block w-100">
        </div>
    </div>

    
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
    </div>



<div class="container my-5">
    <h2 class="text-center">Nos Services</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <i class="fas fa-bullhorn fa-3x mb-3"></i>
            <h3>Marketing Digital</h3>
            <img src="/src/img/Marketing.png" style="width:200px; height:auto" class="rounded">
            <p>Des stratégies de marketing digital sur mesure pour atteindre vos objectifs.</p>
        </div>
        <div class="col-md-4">
            <i class="fas fa-chart-line fa-3x mb-3"></i>
            <h3>SEO</h3>
            <img src="/src/img/SEO.png" style="width:200px; height:auto" class="rounded">
            <p>Optimisation de votre présence en ligne pour un meilleur référencement.</p>
        </div>
        <div class="col-md-4">
            <i class="fas fa-users fa-3x mb-3"></i>
            <h3>Community Management</h3>
            <img src="/src/img/Community.png" style="width:200px; height:auto" class="rounded">
            <p>Gestion de vos réseaux sociaux pour une interaction optimale avec votre audience.</p>
        </div>
    </div>
</div>


<div class="container">
    <hr class="featurette-divider">
</div>


<div class="container text-center my-5">
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#quoteModal">
        Demander un devis
    </button>
</div>


<div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quoteModalLabel">Demande de Devis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="quoteForm">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" placeholder="Votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Votre email" required>
                    </div>
                    <div class="form-group">
                        <label for="service">Service</label>
                        <select class="form-control" id="service" required>
                            <option>Marketing Digital</option>
                            <option>SEO</option>
                            <option>Community Management</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Votre message" required></textarea>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="generatePDF()">Générer le Devis</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script>
    function generatePDF() {
        const { jsPDF } = window.jspdf;

        const doc = new jsPDF();
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const service = document.getElementById('service').value;
        const message = document.getElementById('message').value;

        doc.text(`Nom: ${name}`, 10, 10);
        doc.text(`Email: ${email}`, 10, 20);
        doc.text(`Service: ${service}`, 10, 30);
        doc.text(`Message: ${message}`, 10, 40);

        doc.save('devis.pdf');
    }
</script>


<?php $content = ob_get_clean(); ?>

<?php require 'templates/vitrine.php'; ?>