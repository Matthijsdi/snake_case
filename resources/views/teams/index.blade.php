<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
@extends('adminlte::page')

@section('title', 'MBV Volley | Teambeheer')

@section('content_header')
 <h1>Teambeheer</h1>
@stop

@section('content')


    <div class="box">
            <div class="box-header">
              <h2 class="box-title">
              TeamTabel</h2>

              <div class="box-tools">
              <a href="{{ route('teams.create') }}" type="button" title="Maak een nieuw team aan" class="btn btn-primary">+</a>
              </div>
              <!-- route naar team aanmaken -->
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <tbody><tr>
                  <th class="th-sm">ID <i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th class="th-sm">Naam <i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                  <th class="th-sm">Aanmaakdatum <i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                </tr>
                @foreach($teams as $team)
                <tr>
                  <td>{{ $team->id }}</td>
                  <td><a href="{{ route('teams.show', ['teams' => $team]) }}" title="{{$team->naam}}s info" class="product-title">{{$team->naam}}</a></td>
                  <!-- route naar team views -->
                  <td>11-7-2014</td>
                  <!-- placeholder aanmaakdatum -->
                </tr>
                @endforeach
                <!-- einde loop teams-->
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
@stop
