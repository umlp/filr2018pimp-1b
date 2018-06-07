<?php

function connexion(){
    $db = new PDO("sqlite:./data/login.sqlite");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = "SELECT pwd, log_in FROM connexion" ;

    $result = $db->query($requete);

    unset ($db) ;

    foreach($result as $row)
    {

        if($row['pwd'] == $_POST['mdp'] && $row['log_in'] == $_POST['log_in'] ){
            
            $_SESSION['login'] = $_POST['log_in'] ;
            header("Location: accueil.php");
            exit ;
        }
    }
    
}

function erreur () {
    if( isset($_POST['log_in']) || isset($_POST['mdp']) ){

        echo '<div class="invalid-feedback" style="display:inline">Vous n\'avez pas rentré le bon login/mot de passe</div>' ;

    }
}


?>