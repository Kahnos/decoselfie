<!--
    Author: kahnos
-->
<html lang="en">

<head id="header">
    <!---------- Header ---------->
    <!-- MetaTags SEO Posicionamiento web -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="es-VE" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="decoSelfie, DecoSelfie, Deco Selfie, jQuery Steps, HTML5, JavaScript, Accessibility">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="kahnos -> josed1305@gmail.com" />
    <meta name="owner" content="DecoSelfie" />

    <!-- Facebook Open Graph -->
    <meta property="og:url" content="http://www.127.0.0.1.com.ve/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="DecoSelfie" />
    <meta property="og:site_name" content="DecoSelfie">
    <meta property="og:locale" content="es-VE">
    <meta property="og:description" content="Página web de DecoSelfie." />

    <!-- Hojas de estilo CSS -->
    <?php
        echo '<link type="text/css" rel="stylesheet" media="screen" href="' . CSS_PATH . 'bootstrap.min.css" >';
        echo '<link type="text/css" rel="stylesheet" media="screen" href="' . CSS_PATH . 'jquery.steps.css" >';
        echo '<link type="text/css" rel="stylesheet" media="screen" href="' . CSS_PATH . 'main.css" >';
    ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<!-- Nav Bar -->
<br>
<nav class="navbar navbar-default container" id="header-nav">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false">
                <span class="sr-only">Ver secciones</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">decoSelfie</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Creación y compra <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login placeholder</a></li>
            </ul>
        </div>
    </div>
</nav>
<body>
