@extends('layouts.public')

@section('title')
    Turnierverwaltung
@stop

@section('content')
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="/img/sport1.JPG">
                <div class="caption center-align">
                    <h3>Verschiedene Sportarten</h3>
                    <h5 class="light grey-text text-lighten-3">Einfach verwaltet!</h5>
                </div>
            </li>
            <li>
                <img src="/img/sport2.JPG">
                <div class="caption left-align">
                    <h3>Verschiedene Spielmodi</h3>
                    <h5 class="light grey-text text-lighten-3">Für alle Bedürfnisse!</h5>
                </div>
            </li>
            <li>
                <img src="/img/sport3.JPG">
                <div class="caption left-align">
                    <h3>Verschiedene Felder</h3>
                    <h5 class="light grey-text text-lighten-3">So viele Mannschaften wie ihr wollt!</h5>
                </div>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="container">
            <div class="col s12 m6">
                <div class="card-panel teal lighten-3">
                    <div class="card-content black-text center">
                        <span class="card-title">Bereits einen Benutzer?</span>
                        <p>Dann direkt zum Benutzerbereich und alle Features nutzen.</p>
                    </div>
                    <div class="card-action center">
                        <a href="/login" class="waves-effect waves-light btn-large">Log-In</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card-panel teal lighten-3">
                    <div class="card-content black-text center">
                        <span class="card-title">Noch keinen Benutzer?</span>
                        <p>Jetzt registrieren um die Features zu nutzen.</p>
                    </div>
                    <div class="card-action center">
                        <a href="/signup" class="waves-effect waves-light btn-large">Sign-Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <img class="responsive-img" src="http://lorempixel.com/1920/920/sports/">
        <h2 class="center">Informationen</h2>
        <p class="center">Willst du mehr Informationen zur Turnierverwaltung?
            <br>
            <a href="/informationen" class="waves-effect waves-light btn-large">hier klicken</a>
        </p>
    </div>
    <div>
        <img class="responsive-img" src="http://lorempixel.com/1920/920/sports/2">
        <h2 class="center">Preismodell</h2>
        <p class="center">Möchtest du erfahren, was dich die Turnierverwaltung <kostet></kostet>?
            <br>
            <a href="/informationen" class="waves-effect waves-light btn-large">hier klicken</a>
        </p>
    </div>

@stop



<!--
<!DOCTYPE html>
<html lang="en">
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
    <div class="top-right links">
        @if (Auth::check())
        <a href="{{ url('/home') }}">Home</a>
                    @else
        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
            </div>
        @endif
        </div>
    </body>
</html>
-->
