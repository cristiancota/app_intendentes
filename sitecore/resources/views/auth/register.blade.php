@extends('stickyFooter')
@section('title','Regístrate')
@section('description','Bolsa de trabajo y recursos humanos en Hermosillo, Sonora, con 30 años de experiencia a su servicio nos ponemos en sus manos para brindarle la mejor opción de búsqueda de personal en la región noroeste de la república')
@section('author','Sonnencode')
@section('keywords','recursos humanos,Hermosillo,Sonora,pulso,empresarial,sonnencode,outsourcing')
@section('robots','index,nofollow')
@section('googlebot','noarchive')

@section('css')
    <style>
        /* Credit to bootsnipp.com for the css for the color graph */
        .colorgraph {
            height: 5px;
            border-top: 0;
            background: #c4e17f;
            border-radius: 5px;
            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        }
    </style>
@stop
@section('content')
        <!-- resources/views/auth/register.blade.php -->
<div class="row">
        <div id="pro" class="text-center">

        </div>

        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            {!! Form::open(array('action' => 'Auth\AuthController@postRegister','method'=>'POST')) !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h2>Regístrate  <small>Es gratis y sólo toma un minuto.</small></h2>
            <hr class="">

            <input type="hidden" name="img" value="{{old('img')}}">
            <div class="form-group">
                <input type="text" name="name" value="{{ old('name') }}" id="display_name" class="form-control input-lg" placeholder="Nombre de Usuario" tabindex="3">
            </div>
            <div class="form-group">
                <input type="email"name="email" value="{{ old('email') }}" id="email" class="form-control input-lg" placeholder="Correo electrónico" tabindex="4">
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña" tabindex="5">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirmar contraseña" tabindex="6">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    Al darle click en <strong class="label label-primary">Registrarse</strong> aceptas nuestros <a href="#" data-toggle="modal" data-target="#t_and_c_m">Términos y Condiciones</a> de uso, tanto de nuestro sitio como de nuestras Cookies.
                </div>
            </div>

            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-md-6"><input type="submit" value="Registrarse" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                <div class="col-xs-12 col-md-6">
                    <a href="#" class="btn btn-success btn-block btn-lg">Iniciar sesión</a>
                    <p class="text-center"> <small>¿Ya tienes cuenta? Inicia sesión</small></p>
                </div>
            </div>

            {!! Form::close() !!}
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-4 col-md-offset-4">
                    <br>
                        <ul class="list-inline">
                            <li><p style="color:blue"><small>Inicia sesión en</small></p></li>
                            <li>
                                <a class="btn btn-primary" onclick="login()"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="btn btn-info" onclick=""><i class="fa fa-twitter"></i></a>
                            </li>

                        </ul>
                    </div>
            </div>

            <br/>
            <br/>
            <br/>


            <div
                    class="fb-like"
                    data-share="true"
                    data-width="450"
                    data-show-faces="true">
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="modal-title" id="myModalLabel">Términos y Condiciones</h3>
                </div>
                <div class="modal-body">
                    <p>Al iniciar sesión en nuestro portal usted nos brinda el derecho de utilizar su nombre para fines 
                    estadísticos dentro del portal, sin embargo todos sus datos personales, incluyendo imagen de perfil, 
                    permanecerán ocultos y sólo podrán ser vistos por el administrador y por el usuario (es decir, usted).</p>
                    <p>Al utilizar nuestro portal con fines de conseguir emleo debe garantizar que su información es verídica
                    y libre de cuaquier tipo de falsificación, todo esto con el fin de evitar problemas con el sistema 
                    y con la empresa solicitante.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">De acuerdo</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop
@section('js')
    <script type="text/javascript">
        $(function () {
            $('.button-checkbox').each(function () {

                // Settings
                var $widget = $(this),
                        $button = $widget.find('button'),
                        $checkbox = $widget.find('input:checkbox'),
                        color = $button.data('color'),
                        settings = {
                            on: {
                                icon: 'glyphicon glyphicon-check'
                            },
                            off: {
                                icon: 'glyphicon glyphicon-unchecked'
                            }
                        };

                // Event Handlers
                $button.on('click', function () {
                    $checkbox.prop('checked', !$checkbox.is(':checked'));
                    $checkbox.triggerHandler('change');
                    updateDisplay();
                });
                $checkbox.on('change', function () {
                    updateDisplay();
                });

                // Actions
                function updateDisplay() {
                    var isChecked = $checkbox.is(':checked');

                    // Set the button's state
                    $button.data('state', (isChecked) ? "on" : "off");

                    // Set the button's icon
                    $button.find('.state-icon')
                            .removeClass()
                            .addClass('state-icon ' + settings[$button.data('state')].icon);

                    // Update the button's color
                    if (isChecked) {
                        $button
                                .removeClass('btn-default')
                                .addClass('btn-' + color + ' active');
                    }
                    else {
                        $button
                                .removeClass('btn-' + color + ' active')
                                .addClass('btn-default');
                    }
                }

                // Initialization
                function init() {

                    updateDisplay();

                    // Inject the icon if applicable
                    if ($button.find('.state-icon').length == 0) {
                        $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
                    }
                }
                init();
            });
    </script>
    {!! Html::script('public_html/assets/js/facebook.js') !!}

@stop