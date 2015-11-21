@extends('uson')
@section('title','Editar planta')
@section('main')
    <div class="row">
        <div class="col-lg-12">

            {!! Form::model($data , array('method'=>'PATCH','action'=>['Plantas@update',$data->id])) !!}
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="form-group">
                <label for="nombreActividadRegistro">Nombre del edificio</label>
                <input name="nombre" type="text" id="nombreActividadRegistro" class="form-control"
                       value="{{$data->nombre or old("nombre")}}">
            </div>

            {!! Form::submit('Agregar',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@endsection