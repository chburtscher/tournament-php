<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    @include('includes.head')
</head>
<body>
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="/" class="brand-logo left">Logo</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/info">Informationen</a></li>
                <li><a href="/preismodell">Preismodell</a></li>
                <li><a href="/registrierung">Sign-Up</a></li>
                <li><a href="/login" class="waves-effect waves-light btn-large">Log-In</a></li>
                <li>
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</div>