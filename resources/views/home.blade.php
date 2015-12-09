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

    <div class="container-fluid" id="Intro" >
        <div class="experience-section" id="experience" style="height: 800px; background-attachment: fixed; background-position: 50% 1px;">

                <div class="wrapper">
                    <div>
                        <h2>SISGEOACA</h2>
                        <p>El Sistema de Gestión de Objetos de Aprendizaje de Contenidos Abiertos Accesibles, SisGeOACAA es la integración
                            de un conjunto de componentes denominados herramientas tecnológicas que permiten la creación, gestión, evaluación,
                            almacenamiento y uso de estos recursos para enriquecer los procesos de enseñanza y aprendizaje, a nivel de educación
                            media general, diversificada y universitaria.
                            </p>
                    </div>
                </div>
                <div class="wrapper2">
                    <div id="div_w2">
                        <h2>CARACTERISTICAS</h2>

                        <p>Producción y distribución de contenidos abiertos.</p>

                        <p>Recursos tecnológicos pensados para garantizar la accesibilidad y fomentar la inclusión de las personas con discapacidad.</p>

                        <p>Implementa un método de construcción de OACAA sin requerir grandes conocimientos técnicos.</p>

                        <p>Poseer un mecanismo de evaluación integral y determinación de la calidad de los OACAA.</p>

                        <p>Composición de aspectos pedagógicos, tecnológicos, de interacción humano computador, usabilidad, accesibilidad y experiencia de usuarios para la producción de OACAA integrales.</p>

                        <p>Creación y uso de Patrones Tecnopedagógicos que guían al docente y facilitador en la construcción de los OACAA.</p>

                        <p>Especificación de la información descriptiva de los OACAA, metadatos del recurso, con el objetivo de caracterizarlo.</p>

                    </div>
                </div>

        </div>

    </div>

  {{--Fin Introduccion--}}


    <!--OACAA-->

    <div class="container-fluid" id="oacaa_home">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Objetos de Aprendizaje de Contenidos Abiertos Accesibles</h2>
                        <h3>OACAA</h3>

                        <p>Recursos didácticos e interactivos en formato digital con una intecionalidad de aprendizaje definida, publicados
                        bajo una licencia abierta de propiedad intelectual, desarrollados con programas y formatos técnitcos interoperables, con el propósito de ser reutilizados,
                        adaptados, editados, combinados y distribuidos para los diversos ambientes de aprendizaje, considerando los aspectos de accesibilidad que permiten ser usados por todos;
                        se caracterizan por la introducción de información auto descriptiva expresada en los metadatos.</p>

                    </div>
                </div>
            </div>

    </div>
    <!--FIN OACA-->

    {{--DESAROLLADORES--}}

    <div class="container">
        <div class="row">
            <h2>Ucv</h2>
            <div class="col-md-3">
                <img src="images/desarrollador1.jpg" alt="Yosly" class="img-circle tam-img-circle">
                <h3>Desarrollador1</h3>
            </div>
            <div class="col-md-3"> <img src="images/desarrollador2.jpg" alt="Yosly" class="img-circle tam-img-circle">
                <h3>Desarrollador2</h3>
            </div>
            <div class="col-md-3"> <img src="images/desarrollador1.jpg" alt="Yosly" class="img-circle tam-img-circle">
                <h3>Desarrollador3</h3>
            </div>
            <div class="col-md-3"> <img src="images/desarrollador2.jpg" alt="Yosly" class="img-circle tam-img-circle">
                <h3>Desarrollador4</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h2>Universidad Deportiva del Sur</h2>
                <div class="col-md-3">
                    <img src="images/desarrollador1.jpg" alt="Yosly" class="img-circle tam-img-circle">
                    <h3>Desarrollador1</h3>
                </div>
                <div class="col-md-3"> <img src="images/desarrollador2.jpg" alt="Yosly" class="img-circle tam-img-circle">
                    <h3>Desarrollador2</h3>
                </div>
            </div>
            <div class="col-md-6">
                <h2>UBV</h2>
                <div class="col-md-3">
                    <img src="images/desarrollador1.jpg" alt="Yosly" class="img-circle tam-img-circle">
                    <h3>Desarrollador1</h3>
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-md-3">
                <img src="images/desarrollador1.jpg" alt="Yosly" class="img-circle tam-img-circle">
            </div>
            <div class="col-md-3">
                <img src="images/desarrollador1.jpg" alt="Yosly" class="img-circle tam-img-circle">
            </div>
            <div class="col-md-3">
                <img src="images/desarrollador1.jpg" alt="Yosly" class="img-circle tam-img-circle">
            </div>

            <div class="col-md-3">
                <img src="images/desarrollador1.jpg" alt="Yosly" class="img-circle tam-img-circle">
            </div>
            <div class="col-md-3">
                <img src="images/desarrollador1.jpg" alt="Yosly" class="img-circle tam-img-circle">
            </div>

        </div>

    </div>

    {{--FIN DESARROLLADORES--}}


@endsection