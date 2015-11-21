@extends('uson')
@section('title','Registrar edificio')
@section('main')
    <div class="row">

        <div class="col-md-6 col-md-offset-3">
            {!! Form::open(['url'=>'edificios', 'method'=>'POST', 'class'=>'tab-pane active', 'id'=>'home' ]) !!}

            <legend>Registro de edificios</legend>
            <div class="form-group">
                <label for="nombreActividadRegistro">Nombre del edificio</label>
                <input name="nombre" type="text" id="nombreActividadRegistro" class="form-control"
                        value="{{old("nombre")}}">
            </div>

            {!! Form::submit('Gurdar',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection