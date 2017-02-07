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
                        <label for="timepicker">Turnierbeginn</label>
                        <input id="timepicker" data-default="09:00:00" type="time" class="timepicker" name="startTime">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Spielzeit pro Match" id="spielzeit" type="datetime" class="validate" name="timePerGame">
                        <label for="spielzeit">Spielzeit pro Match</label>
                    </div>
                </div>
                <button class="btn-large right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>

@stop
