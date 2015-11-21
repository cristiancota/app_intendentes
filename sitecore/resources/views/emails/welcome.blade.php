@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Gracias por tu preferencia',
        'level' => 'h1',
    ])
    <div>
    <img src="<?php echo $message->embed("public_html/img/interfaz/30.jpg");?>"
         style="height:auto;width:750px; display: block;
         margin-left: auto;
         margin-right: auto ";
            >
    </div>
    @include('beautymail::templates.sunny.contentStart')

    <p style="text-align: center;">Tu mensaje se a enviado con exito en brebe nos comunicaremos !</p>

    <h1>{{ $name }}</h1>


    <p style="text-align: center;">
    <small>{{ $email }}</small>
    </p>

    <p style="text-align: justify;">
        {{ $user_message }}
    </p>
    @include('beautymail::templates.sunny.contentEnd')

    @include('beautymail::templates.sunny.button', [
            'title' => 'Ir al sitio',
            'link' => 'http://pulsoe.mx'
    ])

@stop