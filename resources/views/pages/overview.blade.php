@extends('layouts.default')

@section('title')
    Überblick
@stop

@section('content')
    <h1 class="center">Übersicht</h1>

    <div class="row">
        <p>
            Sportart: {{$tournament->formOfSport}}
        </p>
    </div>
    <div>
        <p>
            Teams: @foreach ($tournament->teams as $team) {{$team->name}}
                       @endforeach
        </p>
    </div>


@stop