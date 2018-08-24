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
            <a href="/teams/{{$team ->id}}/edit" class="btn btn-primary">Edit</a>
            <!-- link naar de team aanpassen pagina van desbetreffende team -->
            <p>nog te vullen</p>
            <!-- /.box-body -->
          </div>
          <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Team verwijderen</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('teams.destroy', [$team->id]) }}" >
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
              <div class="box-footer">
                <button type="submit" class="btn btn-danger">DELETE</button>
                <!-- delete functie voor dit team -->
              </div>
            </form>
          </div>
@stop
