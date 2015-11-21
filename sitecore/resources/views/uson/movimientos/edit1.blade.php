@extends('uson')
@section('title','Editar movimiento')
@section('main')
    <div class="row">
        <div class="col-lg-12">

            {!! Form::model($data , array('method'=>'PATCH','action'=>['Movimientos@update',$data->id])) !!}
            <input type="hidden" value="{{$data->id}}">
            <legend>Registro de actividades</legend>

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
                        <select name="tarea_id[]" id="multiselect_to" class="form-control" size="8"
                                multiple="multiple">

                            @foreach($data->tareas as $t)
                                <option value="{{$t->id  }}">{{$t->nom_tarea  }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>




            {!! Form::submit('Actualizar !',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@endsection