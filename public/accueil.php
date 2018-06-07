<?php
    session_start() ;
    if(!isset($_SESSION['login'])){
        header("Location: ./accueil.php") ;
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=0">
    <!--ne passe pas la validation-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="bootstrap-4.1.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <title>INSA Toolkit</title>
    <link rel="icon" href="ressources/gobelet.ico">
</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="ressources/gobelet_bleu.png" width="30" class="d-inline-block align-top" alt=""> INSA Toolkit
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100">
                <li class="nav-item">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Commander</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Statistiques</a>
                </li> -->
                <li class="nav-item dropdown ml-lg-auto">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <?php
                        echo $_SESSION['login'] ;
                        ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profil</a>
                        <a class="dropdown-item" href="#">Statistiques</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="deco.php">Déconnexion</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container side-collapse-container" id="contenu">

        <div class="row justify-content-center">
            <p class="nom_utilisateur">
                Bonjour, 
                <?php
                    echo $_SESSION['login'] ;
                ?>
            </p>
        </div>

        <div class="row justify-content-center">
            <a href="">
                <button type="button" class="btn btn-primary">J'ai soif, je veux commander</button>
            </a>
        </div>

        <div class="row justify-content-center">
            <img src="ressources/gobelet_bleu.png" alt="">
        </div>

        <div class="row justify-content-center">
            <a href="">
                <button type="button" class="btn btn-primary">Mon scores</button>
            </a>
        </div>

    </div>

    <footer>
        <script src="bootstrap-4.1.0-dist/js/bootstrap.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <script src="navbars.js"></script>
    </footer>

</body>

</html>