@extends('uson')
@section('title','Registrar movimiento')
@section('main')
    <div class="row">
        <div class="col-lg-12">
            {!! Form::open(['url'=>'movimientos', 'method'=>'POST', 'class'=>'tab-pane active', 'id'=>'home' ]) !!}
            <legend>Registro de actividades</legend>
            <!-- <div class="form-group">
                <label for="">Fecha De Actividad:</label>
                <input name="fecha" type="text" id="datepicker" class="form-control" value="{{old("nom_tarea")}}">

            </div>-->


            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Selecion de Dia</label>
                        <select name="dia" id="" class="form-control">
                            <option selected="selected" value="lunes">Lunes</option>
                            <option value="martes">Martes</option>
                            <option value="miercoles">Miercoles</option>
                            <option value="jueves">Jueves</option>
                            <option value="viernes">Viernes</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="">Selecion de edificio:</label>
                        <select name="edificio_id" class="form-control" id="sel1">
                            @inject('result','App\Http\Controllers\Edificios')
                            @foreach($result->all() as $r)
                                <option value="{{$r['id']}}">{{$r['nombre']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="">Selecion de planta:</label>
                        <select name="planta_id" class="form-control" id="sel1">
                            @inject('result','App\Http\Controllers\Plantas')
                            @foreach($result->all() as $r)
                                <option value="{{$r['id']}}">{{$r['nombre']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <!--Tareas-->
            <div class="form-group">
                <label>Seleciona Las Tareas:</label>

                <div class="row">
                    <div class="col-xs-5">
                        <select name="from[]" id="multiselect" class="form-control" size="8" multiple="multiple">
                            @inject('result','App\Http\Controllers\Tareas')
                            @foreach($result->all() as $r)
                                <option value="{{$r['id']}}">{{$r['nom_tarea']}}</option>
                            @endforeach
                        </select>
                    </div>

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

                    <div class="col-xs-5">
                        <select name="tarea_id[]" id="multiselect_to" class="form-control" size="8"
                                multiple="multiple" value="">

                        </select>
                    </div>
                </div>
            </div>

            <!--Tareas-->
            <div class="form-group">
                <label>Asigna Un Intendente:</label>

                <div class="row">
                    <div class="col-xs-5">
                        <label>Disponinles</label>
                        <select name="from[]" id="multiselect1" class="form-control" size="8" multiple="multiple">
                            @inject('result','App\Http\Controllers\Intendentes')
                            @foreach($result->all() as $r)
                                <option value="{{$r['id']}}">{{$r['nombre']." ".$r['apellido']}}</option>
                            @endforeach
                        </select>
                    </div>

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

                    <div class="col-xs-5">
                        <label>Selecionados:</label>
                        <select name="intendente_id" id="multiselect1_to" class="form-control" size="8"
                                multiple="multiple"></select>
                    </div>
                </div>
            </div>


            {!! Form::submit('Guardar!',['class' => 'btn btn-info']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection