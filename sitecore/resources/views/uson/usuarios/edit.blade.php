@extends('uson')
@section('title','Editar usuario')
@section('main')
    <div class="row">
        <div class="col-lg-12">
            {!! Form::model($data , array('method'=>'PATCH','action'=>['Users@update',$data->id])) !!}
            <legend>Editar de Usuarios</legend>
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="form-group">
                <label for="nombreActividadInput">Nombre:</label>
                <input name="name" type="text" min="1" id="nombreActividadInput"
                       class="form-control"
                       value="{{$data->name or old('name')}}">
            </div>
            <div class="form-group">
                <label for="nombreIntendenteRegistri">Email:</label>
                <input name="email" type="text" id="nombreIntendenteRegistri" class="form-control"
                       value="{{$data->email or old('email')}}">
            </div>
            <div class="form-group">
                <label for="nombreActividadInput">Password</label>
                <input name="password" type="password" id="nombreActividadInput" class="form-control"
                       value="{{old("password")}}">
            </div>
            <div class="form-group">
                <label for="nombreActividadInput">Confirmar Contrase&ntilde;a</label>
                <input name="password_confirmation" type="password"  id="nombreActividadInput" class="form-control" >
            </div>
            {!! Form::submit('Agregar',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@endsection