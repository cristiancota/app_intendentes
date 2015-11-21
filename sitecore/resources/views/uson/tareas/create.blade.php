@extends('uson')
@section('title','Registrar tarea')
@section('main')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open(['url'=>'tareas', 'method'=>'POST', 'class'=>'tab-pane active', 'id'=>'home' ]) !!}
            <legend>Registro de tareas</legend>

            <div class="form-group">
                <label for="nombreActividadRegistro">Nombre de tarea</label>
                <input name="nom_tarea" type="text" id="nombreActividadRegistro" class="form-control" value="{{old("nom_tarea")}}">
            </div>
            {!! Form::submit('Gurdar',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection