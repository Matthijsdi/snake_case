@extends('adminlte::page')

@section('title', 'MBV Volley | Competitiebeheer')

@section('content_header')
 <h1>Competitiebeheer</h1>
@stop

@section('content')
    <div id="form">
        <form role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="klasse">Klasse Afkorting</label>
                    <input type="name" class="form-control" id="klasseAfkortingInput" placeholder="Voer de klasse afkorting in...">
                    <label for="klasse">Klasse</label>
                    <input type="name" class="form-control" id="klasseInput" placeholder="Voer de klasse in...">
                    <a href="{{ route('competities.store') }}" type="button" class="btn btn-primary">Voeg toe</a>
                </div>
            </div>
        </form>
    </div>
@stop