@extends('layouts.app')

@section('title','Indicadores Promoción y Prevención')

@section('breadcrumb')
    <nav>
        <ol class="j-bread">
            <li class="j-bread-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="j-bread-item"><a href="{{ route('IndicadoresProduccion') }}">Indicadores Producción</a></li>
            <li class="j-bread-item active">Rayos X</li>
        </ol>
    </nav>
@endsection

@section('content')

<div class="container">
    <div class="j-h1">
        <div class="j-h1-w">
            <i class="fas fa-file-prescription fa-3x tc-rx"></i>
            <h1>Rayos X</h1>
        </div>
    </div>
</div>

<div class="container">

    {{-- Número de imágenes diagnósticas tomadas --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-rx">
            <div class="j-c3-number">01</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Número de imágenes diagnósticas tomadas
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('ImagenesDiagnosticas') }}">gráficos</a>
            </div>
        </div>

    </div>

</div>

@endsection