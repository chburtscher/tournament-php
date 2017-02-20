<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    @include('includes.head')
</head>
<body>
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <a href="/" class="brand-logo left">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/entries">Eingaben</a></li>
                <li><a href="/teams">Mannschaften</a></li>
                <li class="active"><a href="/time">Zeiten</a></li>
                <li><a href="/results">Ergebnisse</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="/entries">Eingaben</a></li>
                <li><a href="/teams">Mannschaften</a></li>
                <li><a href="/time">Zeiten</a></li>
                <li><a href="/result">Ergebnisse</a></li>
            </ul>
        </div>
    </nav>
</div>
