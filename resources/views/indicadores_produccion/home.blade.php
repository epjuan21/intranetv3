@extends('layouts.app')

@section('title','Indicadores Producción')


@section('content')

<div class="container py-4">
    <div class="row">
        <h1 class="j-h1">Indicadores de Producción</h1>
    </div>
</div>


<div class="container">

    <div class="d-flex justify-content-between flex-wrap">

        <div class="c1">
            <a class="c1-a" href="{{ route('HomePYP') }}">
                <div class="c1-circle c1-circle-pyp"></div>
                <div class="c1-a-content">
                Promocion y Prevencion
                </div>
            </a>
        </div>
        <div class="c1">
            <a class="c1-a" href="">
                <div class="c1-circle c1-circle-ce"></div>
                <div class="c1-a-content">
                Consulta Externa
                </div>
            </a>
        </div>

        <div class="c1">
            <a class="c1-a" href="">
                <div class="c1-circle c1-circle-urg"></div>
                <div class="c1-a-content">
                Urgencias
                </div>
            </a>
        </div>
        <div class="c1">
            <a class="c1-a" href="">
                <div class="c1-circle c1-circle-odo"></div>
                <div class="c1-a-content">
                Odontología
                </div>
            </a>
        </div>
        <div class="c1">
            <a class="c1-a" href="">
                <div class="c1-circle c1-circle-hosp"></div>
                <div class="c1-a-content">
                Hospitalización
                </div>
            </a>
        </div>
        <div class="c1">
            <a class="c1-a" href="">
                <div class="c1-circle c1-circle-rx"></div>
                <div class="c1-a-content">
                Rayos X
                </div>
            </a>
        </div>
        <div class="c1">
            <a class="c1-a" href="">
                <div class="c1-circle c1-circle-lab"></div>
                <div class="c1-a-content">
                Laboratorio
                </div>
            </a>
        </div>
        <div class="c1">
            <a class="c1-a" href="">
                <div class="c1-circle c1-circle-rem"></div>
                <div class="c1-a-content">
                Remisiones
                </div>
            </a>
        </div>

    </div>

</div>

@endsection