@extends('layouts.default')

@section('title')
    Mannschaften
@stop

@section('content')

    <h1 class="center">Mannschaften</h1>

    <div class="row">
        <form class="col s12" method="POST">
            {{ csrf_field() }}
            @for ($count = 0; $count < $tournament->numberOfTeams; $count++)
                <div class="row">
                    <div class="input-field col m6 s12">
                        <input id="team{{$count}}" class="validate" type="text"
                               @if (isset($tournament->teams[$count]))
                                    name="existingTeams[{{$tournament->teams[$count]->id}}]"
                               @else
                                   name="newTeams[]"
                               @endif
                               value="{{isset($tournament->teams[$count]) ? $tournament->teams[$count]->name : ""}}">
                        <label for="team{{$count}}">Mannschaft {{$count+1}}</label>
                    </div>
                </div>
            @endfor
            <button class="btn-large right" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
@stop
