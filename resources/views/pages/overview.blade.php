@extends('layouts.default')

@section('title')
    Überblick
@stop

@section('content')
    <h1 class="center">Übersicht</h1>
    <div class="container entries">
        <div class="row">
            <div class="input-field col m12 s6">
                <input disabled value="{{$tournament->formOfSport}}" id="sportart" type="text" class="validate">
                <label for="sportart">Sportart</label>
                </input>
            </div>
            <div class="input-field col m12 s6">
                <input disabled value="{{$tournament->name}}" id="turniername" type="text" class="validate">
                <label for="turniername">Turniername</label>
                </input>
            </div>
            <div class="input-field col m4 s6">
                <input disabled value="{{$tournament->numberOfTeams}}" id="mannschaften" type="text" class="validate">
                <label for="mannschaften">Mannschaften</label>
                </input>
            </div>
            <div class="input-field col m4 s6">
                <input disabled value="{{$tournament->numberOfFields}}" id="plaetze" type="text" class="validate">
                <label for="plaetze">Anzahl Plätze</label>
                </input>
            </div>
            <div class="input-field col m4 s6">
                <input disabled value="{{$tournament->numberOfGroups}}" id="gruppen" type="text" class="validate">
                <label for="gruppen">Anzahl Gruppen</label>
                </input>
            </div>
            <div class="input-field col m4 s6">
                <input disabled value="{{$tournament->mode}}" id="mode" type="text" class="validate">
                <label for="mode">Turniermodus</label>
                </input>
            </div>
            <div class="input-field col m4 s6">
                <input disabled value="{{$tournament->playMode}}" id="playmode" type="text" class="validate">
                <label for="playmode">Spielmodus</label>
                </input>
            </div>
        </div>
    </div>
    <div class="container time">
        <div class="row">
            <div class="input-field col m4 s6">
                <input disabled value="{{$tournament->startTime}}" id="starttime" type="text" class="validate">
                <label for="starttime">Startzeit</label>
                </input>
            </div>
            <div class="input-field col m4 s6">
                <input disabled value="{{$tournament->timePerGame}}" id="timepergame" type="text" class="validate">
                <label for="timepergame">Spielzeit</label>
                </input>
            </div>
        </div>
    </div>
    <div class="container team">
        <div class="row">
            <div class="input-field col m12 s6">
                <textarea disabled="@foreach ($tournament->teams as $team)
                        {{$team->name}}
                    @endforeach" id="textarea1" class="materialze-textarea"></textarea>
                <label for="textarea1">@foreach ($tournament->teams as $team)
                        <li>{{$team->name}}</li>
                    @endforeach</label>
            </div>
        </div>
    </div>


@stop