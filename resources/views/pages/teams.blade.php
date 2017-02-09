@extends('layouts.default')

@section('title')
    Mannschaften
@stop

@section('content')

    <h1 class="center">Mannschaften</h1>

    <div class="row">
        <form class="col s12" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col m6 s12">
                    @for($count=1; $count<='numberOfTeams'; $count++)
                        <textarea id="textarea1" class="materialize-textarea" name="name[{{$count}}]"></textarea>
                        <label for="textarea1">Mannschaft</label>
                    @endfor
                </div>
            </div>
        </form>
    </div>
@stop