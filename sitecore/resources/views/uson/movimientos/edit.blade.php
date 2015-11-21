@extends('uson')
@section('title','')
@section('main')
    <div class="row">
        <div class="col-lg-12">

            {!! Form::model($data , array('method'=>'PATCH','action'=>['Movimientos@update',$data->id])) !!}
            <input type="hidden" value="{{$data->id}}">
            <legend>Registro de actividades</legend>
            <!--            <div class="form-group">
                <label for="">Fecha De Actividad:</label>
                <input name="dia" type="text" id="datepicker" class="form-control" value="{!! date('j/m/Y', strtotime($data->dia)) !!}">

            </div> -->

            <!--Area-->
            <div class="form-group">
                <label for="">Selecion de Area</label>

                <div class="row">
                    <div class="col-md-6">
                        <select name="edificio_id" class="form-control" id="sel1"
                                value="">
                            <option selected="selected" value="{{$data->edificio->id  }}">{{$data->edificio->nombre  }}</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <select name="planta_id" class="form-control" id="sel1"
                                value="">
                            <option selected="selected" value="{{$data->planta->id  }}">{{$data->planta->nombre  }}</option>
                        </select>
                    </div>
                </div>
            </div>

            <!--Tareas-->
            <div class="form-group">
                <label>Seleciona Las Tareas:</label>
                <!--TareasNoseleccionadas-->
                <div class="row">
                    <div class="col-xs-5">
                        <select name="from[]" id="multiselect" class="form-control" size="8" multiple="multiple"
                                value="{{old("fom[]")}}">
                            @forelse($tareasNoSeleccionadas as $t)
                                <option value="{{$t->id  }}">{{$t->nom_tarea  }}</option>
                            @empty
                                <option>N/A</option>
                            @endforelse

                        </select>
                    </div>
                    <!---Botones Tareas -->
                    <div class="col-xs-2">
                        <button type="button" id="multiselect_rightAll" class="btn btn-block"><i
                                    class="glyphicon glyphicon-forward"></i></button>
                        <button type="button" id="multiselect_rightSelected" class="btn btn-block"><i
                                    class="glyphicon glyphicon-chevron-right"></i></button>
                        <button type="button" id="multiselect_leftSelected" class="btn btn-block"><i
                                    class="glyphicon glyphicon-chevron-left"></i></button>
                        <button type="button" id="multiselect_leftAll" class="btn btn-block"><i
                                    class="glyphicon glyphicon-backward"></i></button>
                    </div>
                    <!--TareasSeleccionadas-->
                    <div class="col-xs-5">
                        <select name="tarea_id" id="multiselect_to" class="form-control" size="8"
                                multiple="multiple">

                            @foreach($data->tareas as $t)
                                <option value="{{$t->id  }}">{{$t->nom_tarea  }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>

            <!--Intendentes-->
            <div class="form-group">
                <label>Asigna Un Intendente:</label>
                <!--IntendentesNoseleccionados-->
                <div class="row">
                    <div class="col-xs-5">
                        <label>Disponinles</label>
                        <select name="from1[]" id="multiselect1" class="form-control" size="8" multiple="multiple"
                                value="{{old("from1[]")}}">

                        </select>
                    </div>
                    <!--IntendentesBotones-->
                    <div class="col-xs-2">
                        <br/>

                        <button type="button" id="multiselect1_rightAll" class="btn btn-block"><i
                                    class="glyphicon glyphicon-forward"></i></button>
                        <button type="button" id="multiselect1_rightSelected" class="btn btn-block"><i
                                    class="glyphicon glyphicon-chevron-right"></i></button>
                        <button type="button" id="multiselect1_leftSelected" class="btn btn-block"><i
                                    class="glyphicon glyphicon-chevron-left"></i></button>
                        <button type="button" id="multiselect1_leftAll" class="btn btn-block"><i
                                    class="glyphicon glyphicon-backward"></i></button>
                    </div>
                    <!--IntendentesSeleccionados-->
                    <div class="col-xs-5">
                        <label>Selecionados:</label>
                        <select name="intendente_id" id="multiselect1_to" class="form-control" size="8"
                                multiple="multiple" value="">

                        </select>
                    </div>
                </div>
            </div>


            {!! Form::submit('Actualizar !',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@endsection