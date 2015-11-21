@extends('uson')
@section('title','Ver movimiento')
@section('main')

<h1 class="page-header">Movimiento</h1>
<div class="row">

    <div class="col-md-4">
        <h1>Datos del Intendente:</h1>
        <dl>
            <dt>Nombre:</dt>
            <dd>{{$data->intendente->nombre}}</dd>
            <dt>Apellidos:</dt>
            <dd>{{$data->intendente->apellido}}</dd>
            <dt>Numero Intendente :</dt>
            <dd>{{$data->intendente->num_inten}}</dd>
            <dt>Celular :</dt>
            <dd>{{$data->intendente->cel}}</dd>
        </dl>
    </div>
    <div class="col-md-4">
        <h1 class="text-center">Area:</h1>
        <dl>
            <dt>Edificio:</dt>
            <dd>{{$data->edificio->nombre}}</dd>
            <dt>Planata:</dt>
            <dd>{{$data->planta->nombre}}</dd>
        </dl>
    </div>
    <div class="col-md-4">
        <div class="list-group">
            <a href="#" class="list-group-item active text-center">
                Tareas
            </a>
            @forelse($data->tareas as $t)
            <a href="#" class="list-group-item">{{$t->nom_tarea}}</a>
            @empty
            @endforelse
        </div>
    </div>
</div>
@if(Auth::check())
            <!--- revision --->
    <div class="row">
        <div class="col-md-6 col-md-push-3">
            {!! Form::open(['url'=>'movimientos/revision', 'method'=>'POST', 'class'=>'tab-pane active' ]) !!}
            <legend>Revision</legend>
            <input type="hidden" name="movimiento_id" value="{{$data->id}}">

            <div class="form-group">
                <label for="nombreActividadInput">Nombre:</label>
                <select name="rev" id="" class="form-control">
                    <option value="sucio">Sucio</option>
                    <option selected="selected" value="limpio">Limpio</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Comentario:</label>
                <textarea rows="6" class="form-control" name="com"></textarea>

            </div>

            {!! Form::submit('registrar',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    <!-- revisiones echas -->
    <br>
    <div class="row">
        <div class="col-md-6 col-md-push-3">
            <dl>
                @forelse($rev as $r)

                <dt>{{$r->created_at}}</dt>
                <dd>{{$r->rev}}</dd>
                <dd>{{$r->com}}</dd>


                @empty
                <dt>No hay revisiones registradas</dt>
                @endforelse
            </dl>
        </div>
    </div>

    @endif

    @section('css')
    <style>
        body{
            padding-bottom: 100px;
        }
    </style>
    @stop

    @stop