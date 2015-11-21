@extends('uson')
@section('css')
    <style>
        .full {
            background: url("{{url("img/404error.png")}}") no-repeat center center ;
            -webkit-background-size: contain;
            -moz-background-size: contain;
            -o-background-size: contain;
            background-size: contain;

            height: 450px;
            width: auto;
        }



    </style>

@stop


@section('main')
    <div class="full">

    </div>
@stop