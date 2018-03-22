@extends('adminlte::page')

@section('title', 'MBV Volley | Competitiebeheer')

@section('content_header')
 <h1>Competitiebeheer</h1>
@stop

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Striped Full Width Table</h3>
            <a href="{{ route('competities.create') }}" type="button" class="btn btn-primary pull-right">Toevoegen</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Task</th>
                    <th>Progress</th>
                    <th>Label</th>
                </tr>
                @foreach($competities as $competitie)
                    <tr>
                        <td>{{ $competitie->id }}</td>
                        <td>{{ $competitie->klasse_afkorting }}</td>
                        <td>{{ $competitie->klasse }}</td>
                        <td>hier komen de knopjes voor edit en show</td>
                    </tr>
                @endforeach
                </tbody></table>
        </div>
        <!-- /.box-body -->
    </div>
@stop