@extends('adminlte::page')

@section('title', 'MBV Volley | Teambeheer')

@section('content_header')
 <h1>Team aanmaken</h1>
@stop

@section('content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Team aanmaken</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="/teams" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputnaaml1">teamnaam</label>
                  <input type="text" class="form-control" name="naam" placeholder=" voeg een teamnaam toe">
                </div>
                <div class="form-group">
                  <label for="exampleInputcompetitieword1">competitie</label>
                  <input type="text" class="form-control" name="competitie_id" placeholder="voeg competitie nummer toe">
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
