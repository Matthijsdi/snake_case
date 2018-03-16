@extends('adminlte::page')

@section('content_header')
    <h1>Competitiestand</h1>
@stop

@section('content')
    <div class="btn-group">
        <button type="button" class="btn btn-default">Team Selector</button>
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Team 1</a></li>
            <li><a href="#">Team 2</a></li>
            <li><a href="#">Team 3</a></li>
            <li><a href="#">Team 4</a></li>
        </ul>
    </div>
        
    <div id="form">    
        <form role="form">
                <div class="box-body">
                    <div class="form-group">
                    <label for="matchDate">Datum wedstrijd</label>
                    <input type="date" class="form-control" id="matchDate" placeholder="voer de wedstrijddatum in">
                    </div>

                    <div class="form-group">
                    <label for="teamNameA">Naam team A</label>
                    <input type="name" class="form-control" id="teamNameA" placeholder="voer de teamnaam van team A in">
                    </div>

                    <div class="form-group">
                    <label for="teamNameB">Naam team B</label>
                    <input type="name" class="form-control" id="teamNameB" placeholder="voer de teamnaam van team B in">
                    </div>
                    
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
@stop