<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel Quickstart - Basic</title>
  <!-- Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

  <!-- Styles -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Lato';
    }

    .fa-btn {
      margin-right: 6px;
    }

    #logo {
      width: 50px;
    }

    #nomSite {
      display: inline;
    }

    body {
      background-color: #f8f9fa;
    }

    nav {
      margin-bottom: 10px;
      box-shadow: 1px 1px 1px 1px rgb(126, 125, 125);
    }

    #bouton_co {
      display: block;
      margin: auto;
    }

    .inline_centre {
      display: block;
      margin: auto;
    }

    #connexion {
      border-width: 3px;
      border-radius: 5px;
      box-shadow: 2px 2px 100px 5px rgb(126, 125, 125);
      padding: 10px;
      background-color: white;
    }
  </style>
</head>

<body id="app-layout">


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


  @yield('content')

  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  {{--
  <script src="{{ elixir('js/app.js') }}"></script> --}}


  <script type="text/javascript">
    // <!--
    function activConnexion() {
      if (($('#login').hasClass("is-valid") && $('#password').hasClass("is-valid"))) {
        $('#bouton_co').removeAttr("disabled");
      } else {
        $('#bouton_co').attr('disabled', 'disabled');
      }
    };

    function verifForm(element, regex, nomErr, messageErr) {
      $(element).focusin(function () {
        $(this).keyup(function () {
          var pattern = regex; // /^[a-z0-9]+$/ 
          if (pattern.test($(this).val())) {
            $(this).removeClass("is-invalid");
            $(this).addClass("is-valid");
            $("#err_login").remove();
            activConnexion();
          } else {
            $(this).removeClass("is-valid");
            $(this).addClass("is-invalid");
            $("#" + nomErr).remove();
            $(this).parent().append("<div id=\"" + nomErr + "\" class=\"invalid-feedback\">" + messageErr +
              "</div>");
            activConnexion();
          }
        });
      });
    };


    $(document).ready(function () {

      var regex = /^[a-z0-9]+$/;
      var message = "Le login est composé de la première lettre de votre prénom puis votre nom complet";
      verifForm('#login', regex, "err_login", message);

      regex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,40})$/;
      message =
        "Le mot de passe doit comporter au moins une majuscule, une minuscule et un caractère spécial et doit faire entre 8 et 40 caractères";
      verifForm('#password', regex, "err_pass", message);

    });

    // -->
  </script>

  <script type="text/javascript">
    // <!--
    $(document).ready(function () {

      $(".navbar-toggler").click(function (event) {
        $(".navbar-collapse").toggle(200);
      });

      $("#contenu").click(function () {
        $(".navbar-collapse").hide(200);
        $(".dropdown-menu").hide(200);
      });

      $(".dropdown-toggle").click(function () {
        if ($(this).attr('aria-expanded') === 'true') {
          $(this).attr('aria-expanded', 'false');
        } else {
          $(this).attr('aria-expanded', 'true');
        }
        $(".dropdown-menu").toggle(200);
      });

    });
    // -->
  </script>


</body>

</html>