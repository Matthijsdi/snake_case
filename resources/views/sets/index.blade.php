@extends('adminlte::page')

@section('title', 'MBV Volley')

@section('content_header')
<div class="btn-group">
   <button type="button" class="btn btn-danger">Add</button>
   <button type="button" class="btn btn-danger">Delete</button>
   <button type="button" class="btn btn-danger">Update</button>
</div>
@stop

@section('content')
<label> set 1 </label>
<div class="col-xs-1">
   <input type="text" class="form-control" placeholder="set 1">
</div>
<div class="col-xs-1">
   <input type="text" class="form-control" placeholder="set 1">
</div>
<label>
<input type="checkbox">
</label>
<br></br>
<br></br>
<label> set 2 </label>
<div class="col-xs-1">
   <input type="text" class="form-control" placeholder="set 2">
</div>
<div class="col-xs-1">
   <input type="text" class="form-control" placeholder="set 2">
</div>
<label>
<input type="checkbox">
</label>
<br></br>
<br></br>
<label> set 3 </label>
<div class="col-xs-1">
   <input type="text" class="form-control" placeholder="set 3">
</div>
<div class="col-xs-1">
   <input type="text" class="form-control" placeholder="set 3">
</div>
<label>
<input type="checkbox">
</label>
<br></br>
<br></br>
<label> set 4 </label>
<div class="col-xs-1">
   <input type="text" class="form-control" placeholder="set 4">
</div>
<div class="col-xs-1">
   <input type="text" class="form-control" placeholder="set 4">
</div>
<label>
<input type="checkbox">
</label>
<br></br>
<br></br>
<label> score </label>
<div class="col-xs-1">
   <input type="text" class="form-control" placeholder="score 1">
</div>
<div class="col-xs-1">
   <input type="text" class="form-control" placeholder="score 2">
</div>
<label>
<input type="checkbox">
</label>
<br></br>
<br></br>
<button type="button" class="btn btn-danger">Delete</button>
@stop