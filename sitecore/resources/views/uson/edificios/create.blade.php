@extends('uson')
@section('title','Registrar edificio')
@section('main')
    <div class="row">

        <div class="col-lg-12">
            {!! Form::open(['url'=>'edificios', 'method'=>'POST', 'class'=>'tab-pane active', 'id'=>'home' ]) !!}

            <div class="form-group">
                <label for="nombreActividadRegistro">Nombre del edificio</label>
                <input name="nombre" type="text" id="nombreActividadRegistro" class="form-control"
                        value="{{old("nombre")}}">
            </div>

            {!! Form::submit('Guardar!',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection