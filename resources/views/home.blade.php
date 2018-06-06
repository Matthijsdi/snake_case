@extends('adminlte::page')

@section('title', 'MBV Volley')

@section('content_header')
    
@stop

@section('content')

<style>
.float-left{
    float: left;
}
.float-right{
    float: right;
}
</style>

<div class="col-md-4">
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Laatste uitslagen</h3>
        <p>hello there</p>

        <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <ul class="products-list product-list-in-box">
        <li class="item">
            <div>
            <a href="javascript:void(0)" class="product-title float-left">Team 1</a>
            <p class="float-left">-</p>
            <a href="javascript:void(0)" class="product-title float-right">Team 2</a>
            </div>
        </li>
        <!-- /.item -->
        <li class="item">
            <div>
            <a href="javascript:void(0)" class="product-title float-left">Team 3</a>
            <p class="float-left">-</p>
            <a href="javascript:void(0)" class="product-title float-right">Team 4</a>
            </div>
        </li>
        <!-- /.item -->
        <li class="item">
            <div>
            <a href="javascript:void(0)" class="product-title float-left">Team 1</a>
            <p class="float-left">-<p>
            <a href="javascript:void(0)" class="product-title float-right">Team 2</a>
            </div>
        </li>
        <!-- /.item -->
        <li class="item">
            <div>
            <a href="javascript:void(0)" class="product-title float-left">Team 3</a>
            <p class="float-left">-</p>
            <a href="javascript:void(0)" class="product-title float-right">Team 4</a>
            </div>
        </li>
        <!-- /.item -->
        </ul>
    </div>

        <div class="box-body">
            <ul class="products-list product-list-in-box">
                <li class="item">
                    <div>
                        <a href="javascript:void(0)" class="product-title float-left">Team 1</a>
                        <p class="float-left">-</p>
                        <a href="javascript:void(0)" class="product-title float-right">Team 2</a>
                    </div>
                </li>
                <!-- /.item -->
                <li class="item">
                    <div>
                        <a href="javascript:void(0)" class="product-title float-left">Team 3</a>
                        <p class="float-left">-</p>
                        <a href="javascript:void(0)" class="product-title float-right">Team 4</a>
                    </div>
                </li>
                <!-- /.item -->
                <li class="item">
                    <div>
                        <a href="javascript:void(0)" class="product-title float-left">Team 5</a>
                        <p class="float-left">-<p>
                            <a href="javascript:void(0)" class="product-title float-right">Team 6</a>
                    </div>
                </li>
                <!-- /.item -->
                <li class="item">
                    <div>
                        <a href="javascript:void(0)" class="product-title float-left">Team 7</a>
                        <p class="float-left">-</p>
                        <a href="javascript:void(0)" class="product-title float-right">Team 8</a>
                    </div>
                </li>
                <!-- /.item -->
            </ul>
        </div>
    <!-- /.box-body -->
    <div class="box-footer text-center">
        <a href="javascript:void(0)" class="uppercase">Alle uitslagen</a>
    </div>
    <!-- /.box-footer -->
</div>
</div>
@stop