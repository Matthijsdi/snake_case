@extends('adminlte::page')

@section('title', 'MBV Volley | Teambeheer')

@section('content_header')
 <h1>Teambeheer</h1>
@stop

@section('content')
    
    
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
              <a href="{{ route('teams.create') }}" type="button" class="btn btn-primary">+</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Naam</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>
                @foreach($teams as $team)
                <tr>
                  <td>{{ $team->id }}</td>
                  <td><a href="{{ route('teams.show', ['teams' => $team]) }}">{{$team->naam}}</a></td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
@stop