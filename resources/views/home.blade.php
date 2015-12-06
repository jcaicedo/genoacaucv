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
                            media general, diversificada y universitaria.
                            </p>
                    </div>
                </div>
                <div class="wrapper2">
                    <div style="width: 100%">
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


    <!--INSTITUCIONES PILOTO-->

    <div class="container-fluid">
            <div class="container">
                <div class="col-md-4"><img src="/images/icono_generador.png" alt=""></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>

    </div>
    <!--FIN INSTITUCIONES PILOTO-->

@endsection