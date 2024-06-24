<?php

function accueil() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/accueil.php';
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $service = $_POST['service'] ?? '';
        $message = $_POST['message'] ?? '';

        $pdfFileName = generatePDF($name, $email, $service, $message);
        echo json_encode(['success' => true, 'pdf' => $pdfFileName]);
    }
}

function generatePDF($name, $email, $service, $message) {
    $content = "
        Nom: $name\n
        Email: $email\n
        Service: $service\n
        Message: $message\n
    ";

    $pdfFileName = 'devis_' . uniqid() . '.pdf';

    file_put_contents("../pdf/$pdfFileName", $content);

    return $pdfFileName;
}

?>


<?php

function a_propos() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/a_propos.php';
    }
}

?>
<?php

function activities() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/activities.php';
    }
}

?>
<?php

function personnes() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/personne.php';
    }
}

?>