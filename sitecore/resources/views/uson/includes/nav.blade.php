<nav class="navbar navbar-inverse main-navbar" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="{{url('img/logo-uni.png')}}" alt="Universidad de sonora">
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{url()}}">Inicio</a></li>

<!--            <li><a href="{{url('historial')}}">Historial</a></li>
            <li><a href="{{url('revision')}}">Revisi&oacute;n</a></li>
            <li><a href="{{url('registro')}}">Registro</a></li>
--->
            @if(Auth::check())
                <!-- intendentes --->
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Intendentes
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url("/intendentes")}}">Mostrar</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url("/intendentes/create")}}">Crear</a></li>
                </ul>
            </li>
            <!--tareas-->
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Tareas
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{url("/tareas")}}">Mostrar</a></li>
                        <li class="divider"></li>
                        <li><a href="{{url("/tareas/create")}}">Crear</a></li>
                    </ul>
                </li>

            <!---edificios--->
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Edificios
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url("/edificios")}}">Mostrar</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url("/edificios/create")}}">Crear</a></li>
                </ul>
            </li>

            <!---planta--->
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Plantas
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url("/plantas")}}">Mostrar</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url("/plantas/create")}}">Crear</a></li>
                </ul>
            </li>

            <!---movimientos--->
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    movimientos
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url("/movimientos")}}">Mostrar</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url("/movimientos/create")}}">Crear</a></li>
                </ul>
            </li>

            <!---usuarios--->
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Usuarios
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url("/usuarios")}}">Mostrar</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url("/usuarios/create")}}">Crear</a></li>
                </ul>
            </li>
            @endif
        </ul>

        <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li>
                    <a href="{{url("/auth/logout")}}">
                    <button class="btn btn-default">
                        <span class="glyphicon glyphicon-log-out"></span> Cerrar sesi&oacute;n
                    </button>
                    </a>
                </li>
            @else
                {!! Form::open(array('action' => 'Auth\AuthController@postLogin','method'=>'POST', 'class'=>'navbar-form navbar-left')) !!}

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <div class="form-group">
                    <input type="email" class="form-control" placeholder='Correo electr&oacute;nico' name="email"
                           value="{{ old('email') }}"><br>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder='Contrase&ntilde;a' name="password" id="password">
                </div>

                <div class="form-group text-right">
                    <button title="Iniciar sesión" type="submit" class="btn btn-default"><span
                                class="glyphicon glyphicon-log-in"></span></button>
                </div>
                {!! Form::close() !!}
            @endif
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

