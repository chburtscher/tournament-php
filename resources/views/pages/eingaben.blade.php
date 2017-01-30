@extends('layouts.default')

@section('title')
    Eingaben
@stop

@section('content')
    <h1 class="center">Turnierparameter</h1>
    <div class="row">
        <form class="cols12">
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
                <div class="input-field col s6">
                    <input placeholder="Anzahl Mannschaften" id="mannschaften" type="number" class="validate">
                    <label for="mannschaften">Mannschaften</label>
                </div>
                <div class="input-field col s6">
                    <input id="plaetze" type="number" class="validate">
                    <label for="plaetze">Anzahl Plätze</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
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
            </div>
            <div class="row">
                <form class="cols12">
                    <div class="input-field col s7">
                        <input placeholder="Spielbeginn" id="spielbeginn" type="time" class="validate">
                        <label for="spielbeginn">Spielbeginn</label>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    This is an inline input field:
                    <div class="input-field inline">
                        <input id="email" type="email" class="validate">
                        <label for="email" data-error="wrong" data-success="right">Email</label>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
