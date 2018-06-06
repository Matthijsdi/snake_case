@extends('adminlte::page')

@section('title', 'MBV Volley | Competitiebeheer')

@section('content_header')
    <h1>Competitiebeheer</h1>
@stop

@section('content')
    <div>
    <input type="text" name="name" value="{{ $competitie->klasse }}" >
    </div>
@stop