@extends('layouts.app')



@section('content')


    {{--Jumbotron--}}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 jumbotron">
            <div class="text-center">
                <p id="p-titulo">Sistema de Gestion de Objetos de Aprendizaje <br> de <br> Contenidos Abiertos Accesibles</p>
            </div>
        </div>

    </div>

</div>

    {{--flechita de transicion--}}
    <div class="down" style="margin-bottom:-20px;"></div>

{{--Inicio de Introduccion--}}


    <div class="container-fluid experience-section" id="experience" style="height: 500px; background-attachment: fixed; background-position: 50% 1px;">

        <div class="row">
            <div class="col-md-9 col-xs-9 col-md-offset-3 col-xs-offset-3"  id="Intro" >
                <p>
                    Herramientas tecnológicas integradas, para enriquecer los procesos de enseñanza y aprendizaje.
                </p>
            </div>
        </div>

    </div>

    {{--FIN INTRODUCCION--}}

        {{--INICIO OACA--}}

    <div class="container-fluid">
        <container class="row">
            <div class="col-md-8">
                <h2>OACA</h2>
                <p></p>
            </div>
        </container>
    </div>


{{--FIN OACA--}}




@endsection