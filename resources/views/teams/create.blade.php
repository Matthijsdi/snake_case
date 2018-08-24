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
                  <p style="color: red"><input type="text" class="form-control" name="naam" placeholder=" voeg een teamnaam toe">*</p>
                </div>
                <div class="form-group">
                  <label for="exampleInputcompetitieword1">competitie</label>
                  <p style="color: red"><input type="text" class="form-control" name="competitie_id" placeholder="voeg competitie nummer toe">*</p>
                </div>
               </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <p style="color: red">velden gemarkeert met * moeten worden ingevuld voordat het team kan worden aangemaakt</p>
              </div>
            </form>
          </div>
@stop
