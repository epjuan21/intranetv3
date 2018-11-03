@extends('layouts.app')

@section('title','Inicio')

@section('content')

    <div class="container py-4 d-flex justify-content-center">

        <div class="j-container">

            <div class="j-c-header">
                <h2>Indicadores</h2>
            </div>

            <div class="j-c-body d-flex justify-content-between">

                <div class="j-card">

                    <div class="j-card-i">
                        <div class="j-card-i-w">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                    <div class="j-card-t">
                        <h2>Indicadores de Producción</h2>  
                    </div>
                    <div class="j-card-f">
                        <a href="{{ route('IndicadoresProduccion') }}">ver indicadores</a>
                    </div>
        
                </div>

            </div>
            
        </div>

    </div>

    <div class="container">

    </div>

@endsection