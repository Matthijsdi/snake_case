@extends('adminlte::page')

@section('title', 'MBV Volley | Teambeheer')

@section('content_header')
 <h1>Team aanmaken</h1>
@stop

@section('content')
@include('vendor.adminlte.partials.errors')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Team aanpassen</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('teams.update', [$team->id]) }}" >
            {{ method_field('PUT') }}
            {{ csrf_field() }}

               <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputnaaml1">teamnaam</label>
                  <input type="text" class="form-control" name="naam" value="{{$team->naam}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputcompetitieword1">competitie</label>
                  <input type="text" class="form-control" name="competitie_id" value="{{$team->competitie_id}}">
                </div>
              <!--
                <div class="form-group">
                  <label for="exampleInputBeschrijving1">beschrijving</label>
                  <input type="text" class="form-control" name="beschrijving" placeholder="voeg beschrijving toe">
                </div>
                -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
@stop
