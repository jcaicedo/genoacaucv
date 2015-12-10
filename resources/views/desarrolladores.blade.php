@extends('layouts.app')

@section('content')

    {{--DESAROLLADORES--}}

    <div class="container-fluid">
        <div class="row">  {{-- DESARROLLADORES UCV--}}
            <h2>Ucv</h2>
            <div class="col-md-2">
                <img src="images/desarrollador1.jpg" alt="Yosly" class="img-circle tam-img-circle">
                <h3>Desarrollador1</h3>
            </div>
            <div class="col-md-2"> <img src="images/desarrollador2.jpg" alt="Yosly" class="img-circle tam-img-circle">
                <h3>Desarrollador2</h3>
            </div>
            <div class="col-md-2"> <img src="images/desarrollador1.jpg" alt="Yosly" class="img-circle tam-img-circle">
                <h3>Desarrollador3</h3>
            </div>
            <div class="col-md-2"> <img src="images/desarrollador2.jpg" alt="Yosly" class="img-circle tam-img-circle">
                <h3>Desarrollador4</h3>
            </div>
        </div>

        <div class="row">  {{-- DESARROLLADORES U DEL SUL / UBV--}}
            <div class="col-md-6">
                <h2>Universidad Deportiva del Sur</h2>
                <div class="col-md-6">
                    <img src="images/desarrollador1.jpg" alt="Yosly" class="img-circle tam-img-circle">
                    <h3>Desarrollador1</h3>
                </div>
                <div class="col-md-6"> <img src="images/desarrollador2.jpg" alt="Yosly" class="img-circle tam-img-circle">
                    <h3>Desarrollador2</h3>
                </div>
            </div>
            <div class="col-md-6">
                <h2>UBV</h2>
                <div class="col-md-6">
                    <img src="images/desarrollador1.jpg" alt="Yosly" class="img-circle tam-img-circle">
                    <h3>Desarrollador1</h3>
                </div>

            </div>

        </div>

        <div class="row">    {{-- OTROS--}}
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