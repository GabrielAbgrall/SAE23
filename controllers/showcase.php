<?php

function home() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/showcase/home.php';
    }
}

?>


<?php

function about() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/showcase/about.php';
    }
}

?>
<?php

function activities() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/showcase/activities.php';
    }
}

?>
<?php

function employees() {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/showcase/employees.php';
    }
}

?>