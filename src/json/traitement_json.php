<?php
# début de session
session_start();
# affichage données reçues

echo '<pre>';
print_r($_POST);

# ouverture et lecture du fichier json
# chemin d'accès à votre fichier JSON
$file = 'utilisateurs.json'; 
# mettre le contenu du fichier dans une variable
$data = file_get_contents($file); 
# décoder le flux JSON
$obj = json_decode($data, true); 

#print_r($obj);
# authentification (comparaison)
echo '<hr>';
foreach ($obj as $user) {
    //echo '<br>-->'.$user['utilisateur'];
    echo '<pre>';
    #print_r($utilisateur['utilisateur']);
    if ($user['utilisateur'] == $_POST['utilisateur']) 
    {
        echo 'utilisateur reconnue : '.$user['utilisateur'];
        $_SESSION['utilisateur'] = $_POST['utilisateur'];
     
        //echo $user['motdepasse'];
        # Hashage du mot de passe avant insertion
        $hash = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT); 
        echo '<pre>';
        #si mdp fait partie du hash de la base de donnée
        if (password_verify($user['motdepasse'], $hash)) 
        { 
            echo 'Mot de passe valide : '.$user['motdepasse'];
            $_SESSION['motdepasse'] = $_POST['motdepasse'];
            header('Location: Home.php');
            die();
        }
        else 
        { #sinon 
            $erreurConnexion = true;
            echo 'Mot de passe invalide : '.$_POST['motdepasse'];
            //$_SESSION['motdepasse'] = $_POST['motdepasse'];
            
        }
    }
}

?>