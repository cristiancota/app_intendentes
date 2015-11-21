@extends('uson')
@section('title','')
@section('main')
    <div class="row">
        <div class="col-lg-12">

            {!! Form::model($data , array('method'=>'PATCH','action'=>['Tareas@update',$data->id])) !!}

            <div class="form-group">
                <label for="nombreActividadRegistro">Nombre de actividad</label>
                <input name="nom_tarea" type="text" id="nombreActividadRegistro" class="form-control" value="{{$data->nom_tarea or old()}}">
            </div>
            {!! Form::submit('Agregar !',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@endsection