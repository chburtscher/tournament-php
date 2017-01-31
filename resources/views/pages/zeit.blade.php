@extends('layouts.default')

@section('title')
    Zeit
@stop

@section('content')
    <h1 class="center">Zeit</h1>
    <div class="container">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Turnierbeginn" id="turnierbeginn" type="time" class="validate">
                        <label for="turnierbeginn">Turnierbeginn</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Spielzeit pro Match" id="spielzeit" type="time" class="validate">
                        <label for="spielzeit">Spielzeit pro Match</label>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
