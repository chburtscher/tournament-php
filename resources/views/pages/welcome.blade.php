@extends('layouts.full-width')

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
                <div class="card grey lighten-2">
                    <div class="card-content black-text center">
                        <span class="card-title">Ohne Anmeldung</span>
                        <p>Hier kann die Turnierverwaltung ohne Anmeldung gestartet werden.</p>
                    </div>
                    <div class="card-action center">
                        <a href="/eingaben">Start</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card grey lighten-2">
                    <div class="card-content black-text center">
                        <span class="card-title">Mit Anmeldung</span>
                        <p>Hier kann die Turnierverwaltung mit Anmeldung gestartet werden</p>
                    </div>
                    <div class="card-action center">
                        <a href="registrierung.html">Anmeldung</a>
                    </div>
                </div>
            </div>
        </div>
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
