@extends('uson')
@section('title','Registrar usuario')
@section('main')
    <div class="row">
        <div class="col-lg-12">
            {!! Form::open(array('url'=>'usuarios','method'=>'POST')) !!}
            <legend>Registro de Usuarios</legend>
            <div class="form-group">
                <label for="nombreActividadInput">Nombre:</label>
                <input name="name" type="text" min="1" id="nombreActividadInput"
                       class="form-control"
                       value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="nombreIntendenteRegistri">Email:</label>
                <input name="email" type="email" id="nombreIntendenteRegistri" class="form-control"
                       value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="nombreActividadInput">Password</label>
                <input name="password" type="text" id="nombreActividadInput" class="form-control"
                       value="{{old("password")}}">
            </div>
            <div class="form-group">
                <label for="nombreActividadInput">Confirmar Contrase&ntilde;a</label>
                <input name="password_confirmation" type="text"  id="nombreActividadInput" class="form-control" >
            </div>
            {!! Form::submit('Agregar',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection