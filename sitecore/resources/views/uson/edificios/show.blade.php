@extends('uson')
@section('title','')
@section('main')
    <div class="row">
        <div class="col-lg-12">

            {!! Form::model($data , array('method'=>'PATCH','action'=>['Edificios@update',$data->id])) !!}
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="form-group">
                <label for="nombreActividadRegistro">Nombre del edificio</label>
                <input name="nombre" type="text" id="nombreActividadRegistro" class="form-control"
                       value="{{$data->nombre or old("nombre")}}">
            </div>

            <div class="row form-group">
                <div class="col-xs-5">
                    <select name="from[]" id="multiselect" class="form-control" size="8" multiple="multiple">
                        @foreach($noes as $no)
                            <option value="{{$no->id}}">{{$no->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xs-2">
                    <button type="button" id="multiselect_rightAll" class="btn btn-block"><i class="glyphicon glyphicon-forward"></i></button>
                    <button type="button" id="multiselect_rightSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
                    <button type="button" id="multiselect_leftSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
                    <button type="button" id="multiselect_leftAll" class="btn btn-block"><i class="glyphicon glyphicon-backward"></i></button>
                </div>

                <div class="col-xs-5">
                    <select name="areas[]" id="multiselect_to" class="form-control" size="8" multiple="multiple">
                        @foreach($data->areas as $si)
                            <option value="{{$si->id}}">{{$si->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {!! Form::submit('Agregar',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@endsection