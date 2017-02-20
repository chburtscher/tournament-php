@extends('layouts.default')

@section('title')
    Eingaben
@stop

@section('content')
    <h1 class="center">Turnierparameter</h1>
    <div class="row">
        <form method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s7">
                        <input placeholder="Eingabe Sportart" id="sportart" type="text" class="validate"
                               name="formOfSport" value="{{$tournament->formOfSport}}">
                        <label for="sportart">Sportart</label>
                    </div>
                </div>
            </div>
            <div class="cols12">
                <div class="input-field col s7">
                    <input placeholder="Turniername" id="turniername" type="text" class="validate"
                           name="name" value="{{$tournament->name}}">
                    <label for="turniername">Turniername</label>
                </div>
            </div>

            <div class="col s12">
                <div class="row">
                    <div class="input-field col m4 s6">
                        <input placeholder="Anzahl Mannschaften" id="mannschaften" type="number" class="validate"
                               name="numberOfTeams" value="{{$tournament->numberOfTeams}}">
                        <label for="mannschaften">Mannschaften</label>
                    </div>
                    <div class="input-field col m4 s6">
                        <input placeholder="Anzahl Plätze" id="plaetze" type="number" class="validate"
                               name="numberOfFields" value="{{$tourmament->numberOfFields}}">
                        <label for="plaetze">Anzahl Plätze</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m4 s6">
                        <select name="mode">
                            <option value="{{$tournament->mode}}" disabled selected>Choose your option</option>
                            <option value="round-robin">Alle gegen alle</option>
                            <option value="groups">2 Gruppen mit Zwischenrunde</option>
                            <option value="3">2 Gruppen ohne Zwischenrunde</option>
                            <option value="4">3 Gruppen mit Zwischenrunde</option>
                            <option value="5">3 Gruppen ohne Zwischenrunde</option>
                        </select>
                        <label>Turniermodus</label>
                    </div>
                    <div class="input-field col m4 s12">
                        <select name="playMode">
                            <option value="{{$tournament->playMode}}" disabled selected>Choose your option</option>
                            <option value="time">Spiel auf Zeit</option>
                            <option value="twoSets">2 Sätze</option>
                            <option value="threeSets">2 Gewinnsätze</option>
                            <option value="4">3 Gewinnsätze</option>
                        </select>
                        <label>Spielmodus</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m4 s6">
                        <input placeholder="Anzahl Gruppen" id="gruppen" type="number" class="validate"
                               name="numberOfGroups" value="{{$tournament->numberOfGroups}}">
                        <label for="gruppen">Anzahl Gruppen</label>
                    </div>
                </div>
            </div>
            <button class="btn-large right" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>

@stop
