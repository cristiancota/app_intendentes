@extends('uson')
@section('title','Registro')
@section('main')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Registro</h1>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                          data-toggle="tab">Actividades</a></li>
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
                    <form class="form-registro" id="registro-actividades-form">
                        <legend>Registro de actividades</legend>
                        <div class="form-group">
                            <label for="nombreActividadRegistro">Nombre de actividad</label>
                            <input type="text" id="nombreActividadRegistro" class="form-control">
                        </div>
                        <button class="btn btn-success">Guardar</button>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <form class="form-registro">
                        <legend>Registro de intendentes</legend>
                        <div class="form-group">
                            <label for="nombreIntendenteRegistri">Nombre del intendente</label>
                            <input type="text" id="nombreIntendenteRegistri" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nombreActividadInput">Nombre del area</label>
                            <input type="text" id="nombreActividadInput" class="form-control">
                        </div>
                    </form>
                    <button class="btn btn-success">Guardar</button>
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
