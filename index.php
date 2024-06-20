<?php

switch(strtolower($_SERVER['REQUEST_URI'])) {
    case '/mvcexemple':
        require_once 'controleurs/MVCExemple.php';
        MVCExemple();
}

?>