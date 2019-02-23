@extends('layouts.app')

@section('title','Indicadores Promoción y Prevención')

@section('breadcrumb')
    <nav>
        <ol class="j-bread">
            <li class="j-bread-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="j-bread-item"><a href="{{ route('IndicadoresProduccion') }}">Indicadores Producción</a></li>
            <li class="j-bread-item active">Urgencias</li>
        </ol>
    </nav>
@endsection


@section('content')

<div class="container">
    <div class="j-h1">
        <div class="j-h1-w">
            <i class="fas fa-heartbeat fa-3x tc-urg"></i>
            <h1>Urgencias</h1>
        </div>
    </div>
</div>

<div class="container">

    {{-- Número de Consulta de Medicina General en Urgencias --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-urg">
            <div class="j-c3-number">01</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Número de Consulta de Medicina General en Urgencias
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('ConsultasUrgencias') }}">gráficos</a>
            </div>
        </div>

    </div>

    {{-- Número total de pacientes clasificados como Triage 2 --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-urg">
            <div class="j-c3-number">02</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Número de Consultas de Número total de pacientes clasificados como Triage 2
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('Triaje2') }}">gráficos</a>
            </div>
        </div>

    </div>

    {{-- Número total de procedimientos menores por médico --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-urg">
            <div class="j-c3-number">03</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Número total de procedimientos menores por médico
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('ProcedimientosMenores') }}">gráficos</a>
            </div>
        </div>

    </div>

    {{-- Pacientes en Observación --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-urg">
            <div class="j-c3-number">04</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Pacientes en Observación
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('PacientesObservacion') }}">gráficos</a>
            </div>
        </div>

    </div>

</div>

@endsection