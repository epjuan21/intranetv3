@extends('layouts.app')

@section('title','Indicadores Promoción y Prevención')

@section('breadcrumb')
    <nav>
        <ol class="j-bread">
            <li class="j-bread-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="j-bread-item"><a href="{{ route('IndicadoresProduccion') }}">Indicadores Producción</a></li>
            <li class="j-bread-item active">Promoción y Prevención</li>
        </ol>
    </nav>
@endsection

@section('content')

<div class="container">
    <div class="j-h1">
        <div class="j-h1-w">
            <i class="fas fa-plus-square fa-3x tc-pyp"></i>
            <h1>Indicadores Promoción y Prevención</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="j-h2">
        <h2>Higiene Oral</h2>
    </div>
</div>

<div class="container">
    
    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number color-pyp">01</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
            Sellantes
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('Sellantes') }}">gráficos</a>
            </div>
        </div>

    </div>

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number color-pyp">02</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
            Control de Placa
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('ControlPlaca') }}">gráficos</a>
            </div>
        </div>

    </div>

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number color-pyp">03</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
            Topicación de Flúor
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('FluorTopico') }}">gráficos</a>
            </div>
        </div>

    </div>

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number color-pyp">04</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
            Barniz de Flúor
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('BarnizFluor') }}">gráficos</a>
            </div>
        </div>

    </div>

</div>

@endsection