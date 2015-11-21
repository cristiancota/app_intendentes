@extends('uson')
@section('title','Historial')
@section('main')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Registro</h1>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                          data-toggle="tab">Actividades !</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Intendentes</a>
                </li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                           data-toggle="tab">Áreas</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Usuarios</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <!--Tareas-->
                    {!! Form::open(['url'=>'tareas', 'method'=>'POST', 'class'=>'tab-pane active', 'id'=>'home' ]) !!}
                    <legend>Registro de actividades</legend>
                    <div class="form-group">
                        <label for="nombreActividadRegistro">Nombre de actividad</label>
                        <input name="nom_tarea" type="text" id="nombreActividadRegistro" class="form-control">
                    </div>
                    {!! Form::submit('Guardar!',['class' => 'btn btn-info']) !!}

                    {!! Form::close() !!}
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">


                    {!! Form::open(array('url'=>'intendentes','method'=>'POST')) !!}


                    <legend>Registro de intendentes</legend>
                    <div class="form-group">
                        <label for="nombreActividadInput">Numero del intendente</label>
                        <input name="num_inten" type="number" min="1" id="nombreActividadInput" class="form-control" value="{{old('num_inten')}}">
                    </div>
                    <div class="form-group">
                        <label for="nombreIntendenteRegistri">Nombre del intendente</label>
                        <input name="nombre" type="text" id="nombreIntendenteRegistri" class="form-control" value="{{old('nombre')}}">
                    </div>
                    <div class="form-group">
                        <label for="nombreActividadInput">Apellidos del intendente</label>
                        <input name="apellido" type="text" id="nombreActividadInput" class="form-control" value="{{old("apellido")}}">
                    </div>
                    <div class="form-group">
                        <label for="nombreActividadInput">Numero Celular del intendente</label>
                        <input name="cel" type="number" id="nombreActividadInput" class="form-control" value="{{old("cel")}}">
                    </div>
                    {!! Form::submit('Agregar',['class' => 'btn btn-info']) !!}

                    {!! Form::close() !!}

                    <br/>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-hover">
                                <thead class="text-center">

                                <tr>
                                    <th>
                                        Numero Intendente
                                    </th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Apellidos
                                    </th>
                                    <th>
                                        Cel
                                    </th>

                                </tr>
                                </thead>
                                <tbody class="text-center">
                                @if(isset($data))
                                    @forelse($data as $d)
                                        <tr>
                                            <td>
                                                {{$d->num_inten}}
                                            </td>
                                            <td>
                                                {{$d->nombre}}
                                            </td>
                                            <td>
                                                {{$d->apellido}}
                                            </td>
                                            <td>
                                                {{$d->cell}}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>
                                                no data
                                            </td>
                                            <td>no data
                                            </td>
                                            <td>no data
                                            </td>
                                            <td>no data
                                            </td>
                                        </tr>
                                    @endforelse
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                    <form class="form-registro">
                        <legend>Registro del Área</legend>
                        <div class="form-group">
                            <label for="nombreEdificioRegistro">Nombre del edificio</label>
                            <input type="text" id="nombreEdificioRegistro" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pisoEdificioRegistro">Piso Edificio</label>
                            <input type="text" id="pisoEdificioRegistro" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lugarAreaRegistro">Lugar Area</label>
                            <input type="text" id="lugarAreaRegistro" class="form-control">
                        </div>
                    </form>
                    <button class="btn btn-success">Guardar</button>
                </div>
                <div role="tabpanel" class="tab-pane" id="settings">
                    <form class="form-registro">
                        <legend>Registro de Usuarios</legend>
                        <div class="form-group">
                            <label for="tipoUsuarioRegistro">Tipo de Usuario</label>
                            <select name="tipoUsuarioRegistro" id="">
                                <option value="">Seleccione</option>
                                <option value="">Tipo de usuario</option>
                                <option value="">Tipo de usuario</option>
                                <option value="">Tipo de usuario</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nombreUsuarioRegistro">Nombre de usuario</label>
                            <input type="text" id="nombreUsuarioRegistro" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="passwordRegistro">Password</label>
                            <input type="text" id="passwordRegistro" class="form-control">
                        </div>
                    </form>
                    <button class="btn btn-success">Guardar</button>
                </div>
            </div>

        </div>

    </div>
@endsection