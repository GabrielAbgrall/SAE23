<?php

switch(strtolower($_SERVER['REQUEST_URI'])) {
    case '/mvc-example':
        require_once 'controllers/mvc_example.php';
        mvc_example();
        break ;
    case '/accueil':
        require_once 'controllers/accueil.php';
        vitrine();
        break;
    case '/intranet':
        require_once 'controllers/intranet.php';
        intranet();
        break;
    case '/intranet/directory_client':
        require_once 'controllers/intranet.php';
        directoryc();
        break;
    case '/intranet/directory_partner':
        require_once 'controllers/intranet.php';
        directoryp();
        break;  
    case '/intranet/directory_internal':
        require_once 'controllers/intranet.php';
        directoryi();
        break; 
    case '/intranet/wiki':
        require_once 'controllers/intranet.php';
        wiki();
        break; 
}

?>