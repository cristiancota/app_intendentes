<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Cristian Cota"/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Open Graph -->
    <meta property="og:type" content="" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <title>Uson - @yield('title')</title>

    <!--coreBoootsrap-->
    {!! Html::style('assets/Bootstrap/css/bootstrap.min.css') !!}
            <!--coreFontawesme-->
    {!! Html::style('assets/Librerias/font-awesome/css/font-awesome.css') !!}
            <!--jQueryUi-->
    {!! Html::style('assets/Librerias/jqueryUi/jquery-ui.css') !!}
    {!! Html::style('assets/Librerias/jqueryUi/jquery-ui.theme.min.css') !!}

            <!--custom-->
    {!! Html::style('assets/css/uson.css') !!}
    {!! Html::style('assets/Librerias/multi/multiselect-master/css/style.css') !!}

    @yield('css')
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href=""/>
</head>
<body>
@include('uson/includes/nav')

<div class="container">
    <!-- Messages -->
    @include('flash::message')
            <!-- Errors -->
    @include('errors.listErrors')
    @yield('main')

</div>

<!-- JS -->
{!! Html::script('assets/Bootstrap/js/jquery.js') !!}
{!! Html::script('assets/Bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('assets/Bootstrap/js/bootstrap_effects.min.js') !!}
{!! Html::script('assets/Librerias/multi/multiselect-master/js/multiselect.min.js') !!}
{!! Html::script('assets/Librerias/jqueryUi/jquery-ui.min.js') !!}
<script src="js/script.js"></script>
<script type="text/javascript">
    /*
        constructor
     */
    function alert()
    {
        this.alertModal();
        this.alertSideup();
    }

    alert.prototype.alertModal = function()
    {
        $('#flash-overlay-modal').modal();
    }
    alert.prototype.alertSideup = function()
    {
        $("div.alert").not(".alert-important").delay(3000).slideUp();
    }



    /* this function makes dropdown when its above the mouse */
    function HooverDroopDown() {
        $('ul.nav li.dropdown').hover(
                function () {
                    $('.dropdown-menu', this).fadeIn();
                },
                function () {
                    $('.dropdown-menu', this).fadeOut('fast');
                }
        );//hover
    }


    new alert();

    HooverDroopDown();

    //multiSelect
    jQuery(document).ready(function($) {
        $('#multiselect').multiselect({
            search: {
                left: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
                right: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
            }
        });

        $('#multiselect1').multiselect({
            search: {
                left: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
                right: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
            }
        });
    });


    //jqueryUi datePicker
    $(function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });

    });

</script>
</body>
</html>