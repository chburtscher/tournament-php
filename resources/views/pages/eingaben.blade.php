@extends('layouts.default')

@section('title')
    Eingaben
@stop

@section('content')
    <h1 class="center">Turnierparameter</h1>
    <div class="row">
        <form class="col s12">
            <div class="input-field col s7">
                <input placeholder="Eingabe Sportart" id="sportart" type="text" class="validate">
                <label for="sportart">Sportart</label>
            </div>
        </form>
        <form class="cols12">
            <div class="input-field col s7">
                <input placeholder="Turniername" id="turniername" type="text" class="validate">
                <label for="turniername">Turniername</label>
            </div>
        </form>
        <form class="col s12">
            <div class="row">
                <div class="input-field col m4 s6">
                    <input placeholder="Anzahl Mannschaften" id="mannschaften" type="number" class="validate">
                    <label for="mannschaften">Mannschaften</label>
                </div>
                <div class="input-field col m4 s6">
                    <input placeholder="Anzahl Plätze" id="plaetze" type="number" class="validate">
                    <label for="plaetze">Anzahl Plätze</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col m4 s12">
                    <select>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Alle gegen alle</option>
                        <option value="2">2 Gruppen mit Zwischenrunde</option>
                        <option value="3">2 Gruppen ohne Zwischenrunde</option>
                        <option value="4">3 Gruppen mit Zwischenrunde</option>
                        <option value="5">3 Gruppen ohne Zwischenrunde</option>
                    </select>
                    <label>Turniermodus</label>
                </div>
                <div class="input-field col m4 s12">
                    <select>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Spiel auf Zeit</option>
                        <option value="2">2 Sätze</option>
                        <option value="3">2 Gewinnsätze</option>
                        <option value="4">3 Gewinnsätze</option>
                    </select>
                    <label>Spielmodus</label>
                </div>
            </div>
        </form>
    <button class="btn-large disabled right" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
    </button>
    </div>

@stop