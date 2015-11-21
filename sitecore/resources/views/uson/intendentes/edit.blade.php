@extends('uson')
@section('title','Editar intendente')
@section('main')
    <div class="row">
        <div class="col-lg-12">

            {!! Form::model($data , array('method'=>'PATCH','action'=>['Intendentes@update',$data->id])) !!}


            <legend>Registro de intendentes</legend>
            <div class="form-group">
                <label for="nombreActividadInput">Numero del intendente</label>
                <input name="num_inten" type="number" min="1" id="nombreActividadInput" class="form-control"
                       value="{{$data->num_inten or old('num_inten')}}">
            </div>
            <div class="form-group">
                <label for="nombreIntendenteRegistri">Nombre del intendente</label>
                <input name="nombre" type="text" id="nombreIntendenteRegistri" class="form-control"
                       value="{{$data->nombre or old('nombre')}}">
            </div>
            <div class="form-group">
                <label for="nombreActividadInput">Apellidos del intendente</label>
                <input name="apellido" type="text" id="nombreActividadInput" class="form-control"
                       value="{{$data->apellido or old("apellido")}}">
            </div>
            <div class="form-group">
                <label for="nombreActividadInput">Numero Celular del intendente</label>
                <input name="cel" type="number" id="nombreActividadInput" class="form-control" value="{{$data->cel or old("cel")}}">
            </div>
            {!! Form::submit('Agregar',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@endsection