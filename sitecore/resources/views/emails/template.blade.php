<!doctype html>
<html lang="en">
<head>

<style>
    body{
        background-color: #1d9b6c;
        color: #f0f0f0;
        padding-top: 30px;
        padding-bottom: 30px;
    }
    .container{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 800px;

    }
    .container > h1{
        text-align: center;
    }
    .container p {
        text-align: justify;
    }

    .Dimg {
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: auto;
        width: 360px;
    }
    .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        color: black;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    }
</style>


</head>
<body>
<div>
<img class="Dimg" src="<?php echo $message->embed("public_html/img/interfaz/lic.jpg");?>">
</div>
<!-- Contenido principal -->
<div class="container">
<h1 class="page-header"> hello world </h1>
<p class="well">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci debitis delectus,
    ducimus minima rerum similique velit vitae! Aperiam asperiores atque commodi cumque,
    delectus ea inventore possimus repellat repudiandae sint sit!
</p>
</div>

</body>
</html>