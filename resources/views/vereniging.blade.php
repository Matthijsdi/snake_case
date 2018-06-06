@extends('adminlte::page')

@section('title', 'MBV Volley')

@section('content_header')

@stop

@section('content')
    <div class="box-body">
        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                        <div class="bd-example">
                        <button type="button" class="btn btn-default">Update</button>
                        <button type="button" class="btn btn-default">Delete</button>
                        <button type="button" class="btn btn-default">Add</button>
                        </div>
                        <tr role="row"><th>Tijd</th><th>Veld</th><th>Team 1</th><th>Team 2</th><th>Scheidsrechter</th><th>Klasse</th></tr>
                        </thead>
                        <tbody>
                        <tr role="row" class="odd">
                            <td class="sorting_1">19:15</td>
                            <td>1</td>
                            <td>Team 1</td>
                            <td>Team 2</td>
                            <td>VNLS</td>
                            <td>1H</td>
                        </tr><tr role="row" class="even">
                            <td class="sorting_1">20:15</td>
                            <td>2</td>
                            <td>Team 1</td>
                            <td>Team 2</td>
                            <td>Fysio For You</td>
                            <td>2H</td>
                        </tr><tr role="row" class="odd">
                            <td class="sorting_1">21:15</td>
                            <td>3</td>
                            <td>Team 1</td>
                            <td>Team 2</td>
                            <td>VV Jong Ambon</td>
                            <td>1V</td>
                        </tr><tr role="row" class="even">
                            <td class="sorting_1">19:15</td>
                            <td>4</td>
                            <td>Team 1</td>
                            <td>Team 2</td>
                            <td>CZ</td>
                            <td>2V</td>
                        </tr><tr role="row" class="odd">
                            <td class="sorting_1">20:15</td>
                            <td>5</td>
                            <td>Team 1</td>
                            <td>Team 2</td>
                            <td>'T Ken Net 2</td>
                            <td>3H</td>
                        </tr>
                        </tbody>

                    </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite"></div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
    </div>
@stop