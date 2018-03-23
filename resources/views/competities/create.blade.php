@extends('adminlte::page')

@section('title', 'MBV Volley | Competitiebeheer')

@section('content_header')
 <h1>Competitiebeheer</h1>
@stop

@section('content')
    <div id="form">
            <div class="box-body">
                <form method="POST" action="/competities">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="klasse">Klasse Afkorting</label>
                        <textarea name="klasse_afkorting" type="name" class="form-control" id="klasse_afkorting" placeholder="Voer de klasse afkorting in..."></textarea>
                        <label for="klasse">Klasse</label>
                        <textarea name="klasse" type="name" class="form-control" id="klasse" placeholder="Voer de klasse in..."></textarea>
                        <button type="submit" class="btn btn-primary">Voeg toe</button>
                    </div>
                </form>
            </div>
    </div>
@stop