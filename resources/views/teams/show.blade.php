@extends('adminlte::page')

@section('title', 'MBV Volley | Teambeheer')

@section('content_header')
 <h1>Teambeheer</h1>
@stop

@section('content')
    
    
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detils over {{ $team->naam }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p>klassement: {{$team ->competitie_id}}</p>
            <hr>
            <a href="/teams/{{$team ->id}}/edit" class="btn btn default">Edit</a>
            
            <p>nog te vullen</p>
            <!-- /.box-body -->
          </div>
@stop