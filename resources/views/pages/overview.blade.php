@extends('layouts.default')

@section('title')
    Überblick
@stop

@section('content')
    <h1 class="center">Übersicht</h1>
    <div class="container entries">
    <div class="row">
        <div class="col m12 s6">
        <p>
            Sportart: {{$tournament->formOfSport}}
        </p>
        </div>
    <div class="col m12 s6">
        <p>
            Turniername: {{$tournament->name}}
        </p>
    </div>
    <div class="col m4 s6">
        <p>
            Anzahl Mannschaften: {{$tournament->numberOfTeams}}
        </p>
    </div>
    <div class="col m4 s6">
        <p>
            Anzahl Plätze: {{$tournament->numberOfFields}}
        </p>
    </div>
        <div class="col m4 s6">
            <p>
                Anzahl Gruppen: {{$tournament->numberOfGroups}}
            </p>
        </div>
    <div class="col m4 s6">
        <p>
           <!-- deutsche Bezeichnung einfügen -->
            Turniermodus: {{$tournament->mode}}
        </p>
    </div>
    <div class="col m4 s6">
        <p>
            <!-- deutsche Bezeichnung einfügen? -->
            Spielmodus: {{$tournament->playMode}}
        </p>
    </div>
    </div>
    </div>
    <div class="container time">
    <div class="row">
        <div class="col m4 s6">
        <p>
            Startzeit: {{$tournament->startTime}}
        </p>
        </div>
    <div class="col m4 s6">
        <p>
            Spizelzeit: {{$tournament->timePerGame}}
        </p>
    </div>
    </div>
    </div>
    <div class="container team">
    <div class="row">
        <div class="col m12 s6">
        <p>
            Teams:
            @foreach ($tournament->teams as $team) <li>{{$team->name}}</li>
                       @endforeach
            </p>
        </div>
    </div>
    </div>


@stop