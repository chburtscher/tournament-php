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


@stop