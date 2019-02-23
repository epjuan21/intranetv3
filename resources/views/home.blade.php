@extends('layouts.app')

@section('title','Inicio')

@section('breadcrumb')
    <nav>
        <ol class="j-bread">
            <li class="j-bread-item active">Inicio</li>
        </ol>
    </nav>
@endsection

@section('content')

    <div class="container">

        <div class="j-h1">
            <div class="j-h1-w">
                <h1>Indicadores</h1>
            </div>
        </div>

        <div class="j-c1">
            <div class="j-c1-i-c">
                <i class="far fa-chart-bar"></i>
            </div>
            
            <div class="j-c1-b-c">
                <div class="j-c1-body">
                <div class="j-c1-b-title">Indicadores</div>
                <div class="j-c1-b-subtitle">Producción</div>
                </div>
            </div>
            
            <div class="j-c1-l-c">
                <div class="j-c1-link">
                <a href="{{ route('IndicadoresProduccion') }}">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-circle"></i>
                </a>
                </div>
            </div>    
        </div>

    </div>

@endsection