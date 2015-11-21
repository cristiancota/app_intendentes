@extends('uson')
@section('title','Registrar tarea')
@section('main')
    <div class="row">
        <div class="col-lg-12">
            {!! Form::open(['url'=>'tareas', 'method'=>'POST', 'class'=>'tab-pane active', 'id'=>'home' ]) !!}
            <legend>Registro de actividades</legend>
            <div class="form-group">
                <label for="nombreActividadRegistro">Nombre de actividad</label>
                <input name="nom_tarea" type="text" id="nombreActividadRegistro" class="form-control" value="{{old("nom_tarea")}}">
            </div>
            {!! Form::submit('Guardar!',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection