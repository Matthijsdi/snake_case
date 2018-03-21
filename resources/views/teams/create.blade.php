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
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">teamnaam</label>
                  <input type="text" class="form-control" id="" placeholder=" voeg een teamnaam toe">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">competitie</label>
                  <input type="password" class="form-control" id="competitieInput" placeholder="voeg competitie nummer toe">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>    
@stop
