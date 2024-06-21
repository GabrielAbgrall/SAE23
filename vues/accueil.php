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
        <h2>Qui sommes-nous ?</h2>
        <p>Nous sommes une agence de communication et de marketing dédiée à aider les entreprises à augmenter leur visibilité et à atteindre leurs objectifs commerciaux grâce à des stratégies innovantes et efficaces.</p>
    </div>
    <div class="mx-4">
        <img src="/src/img/batiement.png" style="width:200px; height:auto" class="rounded-circle">
    </div>
</div>


<div class="container my-5">
    <h2 class="text-center">Nos Services</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <i class="fas fa-bullhorn fa-3x mb-3"></i>
            <h3>Marketing Digital</h3>
            <p>Des stratégies de marketing digital sur mesure pour atteindre vos objectifs.</p>
        </div>
        <div class="col-md-4">
            <i class="fas fa-chart-line fa-3x mb-3"></i>
            <h3>SEO</h3>
            <p>Optimisation de votre présence en ligne pour un meilleur référencement.</p>
        </div>
        <div class="col-md-4">
            <i class="fas fa-users fa-3x mb-3"></i>
            <h3>Community Management</h3>
            <p>Gestion de vos réseaux sociaux pour une interaction optimale avec votre audience.</p>
        </div>
    </div>
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