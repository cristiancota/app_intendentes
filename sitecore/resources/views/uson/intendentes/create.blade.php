@extends('uson')
@section('title','Registrar intendente')
@section('main')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open(array('url'=>'intendentes','method'=>'POST')) !!}


            <legend>Registro de intendentes</legend>
            <div class="form-group">
                <label for="nombreActividadInput">Número del intendente</label>
                <input name="num_inten" type="number" min="1" id="nombreActividadInput" class="form-control"
                       value="{{old('num_inten')}}">
            </div>
            <div class="form-group">
                <label for="nombreIntendenteRegistri">Nombre del intendente</label>
                <input name="nombre" type="text" id="nombreIntendenteRegistri" class="form-control"
                       value="{{old('nombre')}}">
            </div>
            <div class="form-group">
                <label for="nombreActividadInput">Apellidos del intendente</label>
                <input name="apellido" type="text" id="nombreActividadInput" class="form-control"
                       value="{{old("apellido")}}">
            </div>
            <div class="form-group">
                <label for="nombreActividadInput">Número Celular del intendente</label>
                <input name="cel" type="tel"  id="nombreActividadInput" class="form-control" value="{{old("cel")}}">
            </div>
            {!! Form::submit('Agregar',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection