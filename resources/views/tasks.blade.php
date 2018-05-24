@extends('layouts.app')

@section('content')
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
@endsection
