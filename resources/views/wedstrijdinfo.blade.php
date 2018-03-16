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
                        <label for="wedstrijd_id">Wedstrijd ID</label>
                        <input type="id" class="form-control" id="wedstrijd_id" placeholder="voer de wedstrijdnummer in">
                    </div>

                    <div class="form-group">
                        <label for="datum">Datum wedstrijd</label>
                        <input type="date" class="form-control" id="datum" placeholder="voer de datum van de wedstrijd in">
                    </div>

                    <div class="form-group">
                        <label for="team_thuis">Naam thuis team</label>
                        <input type="name" class="form-control" id="team_thuis" placeholder="voer de teamnaam van het thuis team in">
                    </div>

                    <div class="form-group">
                    <label for="team_uit">Naam uit team</label>
                    <input type="name" class="form-control" id="team_uit" placeholder="voer de teamnaam van het uit team in">
                    </div>
                    
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
@stop