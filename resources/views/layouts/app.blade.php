<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GenOacaUCV</title>

    {!! Html::style('assets/css/bootstrap.css') !!}

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

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigarion">
    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">GenOacaUCV</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Inicio</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Nosotros <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Menu</a></li>
                    </ul>
                </li>
                <li><a href="#">Generador</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>

        </div>


    </div>


</nav>

@yield('content')

{{--Script--}}

{!! Html::script('assets/js/bootstrap.min.js') !!}

</body>


</html>