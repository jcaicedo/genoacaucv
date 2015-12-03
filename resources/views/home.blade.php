@extends('layouts.app')



@section('content')


    {{--Jumbotron--}}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 jumbotron">
            <div class="text-center">
                <p id="p-titulo">Sistema de Gestion de Objetos de Aprendizaje de Contenidos Abietos Accesibles</p>
            </div>
        </div>

    </div>

</div>

    {{--flechita de transicion--}}
    <div class="down" style="margin-bottom:-20px;"></div>

{{--Inicio de Introduccion--}}

    <div class="container-fluid" id="Intro" >
        <div class="experience-section" id="experience" style="height: 800px; background-attachment: fixed; background-position: 50% 1px;">
                <div class="wrapper">
                    <div>
                        <h2>SISGEOACA</h2>
                        <p>El Sistema de Gestión de Objetos de Aprendizaje de Contenidos Abiertos Accesibles, SisGeOACAA es la integración
                            de un conjunto de componentes denominados herramientas tecnológicas que permiten la creación, gestión, evaluación,
                            almacenamiento y uso de estos recursos para enriquecer los procesos de enseñanza y aprendizaje, a nivel de educación
                            media general, diversificada y universitaria.</p>
                    </div>
                </div>
        </div>

    </div>

  {{--  <div class="experience-section flexible"  style="height: 700px; background-attachment: fixed; background-position: 50% -2px;">

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-5 col-sm-5 col-xs-6 col-md-offset-1" style="background-color: #0f0f0f">
                        <h2>SISGEOACA</h2>
                    <br>
                    <p>El Sistema de Gestión de Objetos de Aprendizaje de Contenidos Abiertos Accesibles, SisGeOACAA es la integración
                        de un conjunto de componentes denominados herramientas tecnológicas que permiten la creación, gestión, evaluación,
                        almacenamiento y uso de estos recursos para enriquecer los procesos de enseñanza y aprendizaje, a nivel de educación
                        media general, diversificada y universitaria.</p>


                </div>


                <div class="col-md-2 col-md-offset-4" style="background-color: #0000C2;height: 100%;position: relative;right: 10%">
                    <img src="" alt="">

                </div>
            </div>
        </div>



    </div>--}}

{{--fin de Introduccion--}}


@endsection