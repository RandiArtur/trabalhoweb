<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properities -->
    <title>CBK - RA</title>

    <link href="/assets/packaged/css/fonts.css" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/assets/packaged/css/semantic.css">
    <link rel="stylesheet" type="text/css" href="/assets/examples/homepage.css">


    <script src="/assets/packaged/javascript/jquery2.0.js"></script>
    <script src="/assets/packaged/javascript/semantic2.min.js"></script>


</head>


<body>

<div class="ui vertical" style=" margin-top:30px; margin-left:15px;">
    <img src="/assets/examples/images/CBKlogo.png" style="width:6%; margin-bottom: -16px; margin-top: -22px;">

    <h1 class="ui header" style="margin-left: 78px; margin-top: -33px; margin-bottom: -28px;"> -RA</h1>

</div>

<div class="ui inverted fluid seven item menu">

    <a href="/" class="item">
        <i class="large home basic icon"></i> Home
    </a>

    <a href="/requisitos" class="item">
        <i class=" large open basic icon"></i> Requisito Funcional
    </a>

    <a href="/sobre" class=" item">
        <i class="large search basic icon"></i> Sobre
    </a>

    <a href="/logout" class=" item">
        <i class=" large off icon"></i> Logout
    </a>
</div>

<div class="container" style="pagi">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12">
            @yield('corpo')
        </div>
    </div>
    <div class="row">

    </div>
</div>

<div class="ui inverted teal page grid segment" style="height:250px; margin-top:135px;">
    <div class="ten wide column">
        <div class="six wide center floated aligned column" style="margin-left:409px;">
            <i class=" large map marker icon"></i>
            <addr>
                <h3>CBK Agência Digital</h3>
                Rua Dom Augusto, 1379 - Centro<br>
                Ji-Paraná | Rondônia<br>
                (69)3422-5219 | 8479-5468<br>
                contato@cbkdigital.com.br<br>
                <br>
            </addr>

        </div>
    </div>
</body>
</html>

