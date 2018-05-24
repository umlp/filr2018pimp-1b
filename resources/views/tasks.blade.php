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
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Commander</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container side-collapse-container" id="contenu">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="index.html" method="post">

                    <fieldset id="connexion">

                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="login" id="login" placeholder="Votre login" required>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Votre mot de passe" required>
                        </div>

                        <div class="justify-content-center">
                            <button type="submit" class="btn btn-primary" id="bouton_co" disabled>Connexion</button>
                        </div>

                    </fieldset>

                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <img src="ressources/gobelet_bleu.png" alt="">
        </div>

    </div>

    <footer>

        <script src="bootstrap-4.1.0-dist/js/bootstrap.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


        <script src="navbars.js"></script>
        <script src="form_connect.js"></script>

    </footer>

</body>

</html>