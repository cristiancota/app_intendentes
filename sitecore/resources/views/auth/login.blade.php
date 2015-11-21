@extends('uson')
@section('main')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {!! Form::open(array('action' => 'Auth\AuthController@postLogin','method'=>'POST', 'class'=>'form')) !!}
                <h2 class="text-center">Iniciar sesión</h2><br>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div>
                    <input type="email" class="form-control" placeholder='Correo electrónico' name="email" value="{{ old('email') }}"><br>
                </div>

                <div>
                    <input type="password" class="form-control" placeholder='Contraseña' name="password" id="password">
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success">Iniciar sesión</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>    
@stop