@extends('layouts.app')

@section('title','Indicadores Promoción y Prevención')

@section('breadcrumb')
    <nav>
        <ol class="j-bread">
            <li class="j-bread-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="j-bread-item"><a href="{{ route('IndicadoresProduccion') }}">Indicadores Producción</a></li>
            <li class="j-bread-item active">Medicina General</li>
        </ol>
    </nav>
@endsection

@section('content')

<div class="container">
    <div class="j-h1">
        <div class="j-h1-w">
            <i class="fas fa-stethoscope fa-3x tc-cex"></i>
            <h1>Medicina General</h1>
        </div>
    </div>
</div>

<div class="container">

    {{-- Medicina General Electiva --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-cex">
            <div class="j-c3-number">01</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Número de Consultas de Medicina General Electivas
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('MedicinaGeneralElectiva') }}">gráficos</a>
            </div>
        </div>

    </div>

    {{-- Medicina General De Primera Vez --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-cex">
            <div class="j-c3-number">02</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Número de Consultas de Medicina General de Primera Vez
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('MedicinaGeneralPrimeraVez') }}">gráficos</a>
            </div>
        </div>

    </div>


</div>


@endsection