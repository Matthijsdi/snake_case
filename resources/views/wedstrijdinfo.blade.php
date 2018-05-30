@extends('adminlte::page')

@section('content_header')
    <h1>Competitiestand</h1>
@stop

@section('content')
<div class="box-tools">
              <a href="{{ route('teams.index') }}" type="button" class="btn btn-primary">+</a>
              </div>
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
    <!-- WORDT VERPLAATST -->
    <div id="form">
        <form role="form">
                <div class="box-body">
                    <!-- balk om het ID van de wedstrijd in te vullen -->
                    <div class="form-group">
                        <label for="wedstrijd_id">Wedstrijd ID</label>
                        <input type="id" class="form-control" id="wedstrijd_id" placeholder="voer het wedstrijdnummer in">
                    </div>

                    <!-- balk om de datum van de wedstrijd in te vullen -->
                    <div class="form-group">
                        <label for="datum">Datum wedstrijd</label>
                        <input type="date" class="form-control" id="datum" placeholder="voer de datum van de wedstrijd in">
                    </div>

                    <!-- balk om de naam van het thuis team in te vullen -->
                    <div class="form-group">
                        <label for="team_thuis">Naam thuis team</label>
                        <input type="name" class="form-control" id="team_thuis" placeholder="voer de teamnaam van het thuis team in">
                    </div>

                    <!-- balk om de naam van het uit team in te vullen -->
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