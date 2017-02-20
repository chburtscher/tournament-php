@extends('layouts.default')

@section('title')
    Mannschaften
@stop

@section('content')

    <h1 class="center">Mannschaften</h1>

    <div class="row">
        <form class="col s12" method="POST">
            {{ csrf_field() }}
            @for ($count = 1; $count <= $numberOfTeams; $count++)
                <div class="row">
                    <div class="input-field col m6 s12">
                        <input id="team{{$count}}" class="validate" type="text" name="teams[]" value="{{$tournament->team}}">
                        <label for="team{{$count}}">Mannschaft {{$count}}</label>
                    </div>
                </div>
            @endfor
            <button class="btn-large right" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
@stop
