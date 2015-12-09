<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GenOacaUCV</title>



    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/genoaca.css') !!}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">--}}




    {{--Fonts--}}

    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<!--NAVBAR CON LOGIN-->

<header>

    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-gen">
                            <span class="sr-only">Desplegar/Ocultar Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">SisGeOACAA</a>
                </div>
                {{--Inicia Menu--}}

                <div class="collapse navbar-collapse" id="navegacion-gen">

                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    Proyecto OACAA <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">

                                <li><a href="#">Proyecto OACA</a></li>
                                <li><a href="#">Instituciones Piloto</a></li>
                                <li><a href="#">OACA</a></li>
                                <li><a href="#">Equipo Desarrollo</a></li>

                            </ul>
                        </li>
                        <li class="active"><a href="#">Generador</a></li>
                        <li class="active"><a href="#">Contacto</a></li>
                    </ul>

                </div>

            </div>

    </div>

</header>



@yield('content')


{{--@yield('menu1')--}}

{{--<div class="container">--}}

{{--@yield('content')--}}

{{--</div>--}}

{{--Script--}}

{{--{!! Html::script('assets/js/bootstrap.min.js') !!}--}}
{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') !!}
{!! Html::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}

</body>


</html>