<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GenOacaUCV</title>

    {!! Html::style('assets') !!}
    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}

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
                        <li><a href="#">Proyecto OACA</a></li>
                        <li><a href="#">Instituciones Piloto</a></li>
                        <li><a href="#">OACA</a></li>
                        <li><a href="#">Equipo Desarrollo</a></li>

                    </ul>
                </li>
                <li><a href="#">Generador</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login
                <span class="glyphicon glyphicon-log-in">
                </span>
                    </a>
                    <div class="dropdown-menu">

                        <form action="" id="formlogin" class="form container-fluid">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <label for="usr">Name:</label>
                                <input type="text" class="form-control" id="usr">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="password" class="form-control" id="pwd">
                            </div>
                            <button class="btn btn-block" id="btnLogin" type="button">Login</button>


                        </form>
                        <div class="container-fluid">
                            <!--                    <br>-->
                            <a href="#" class="small">Forgot password?</a>
                        </div>


                    </div>




                </li>


            </ul>

        </div>


    </div>


</nav>

<hr>


<div class="container">

@yield('content')

</div>

{{--Script--}}

{!! Html::script('assets/js/bootstrap.min.js') !!}
{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') !!}
{!! Html::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}

</body>


</html>