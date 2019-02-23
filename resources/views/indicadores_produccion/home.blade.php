@extends('layouts.app')

@section('title','Indicadores Producción')

@section('breadcrumb')
    <nav>
        <ol class="j-bread">
            <li class="j-bread-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="j-bread-item active">Indicadores Producción</li>
        </ol>
    </nav>
@endsection

@section('content')

<div class="container">
    <div class="j-h1">
        <div class="j-h1-w">
            <h1>Indicadores Producción</h1>
        </div>
    </div>
</div>

<div class="container">

    <div class="d-flex justify-content-between flex-wrap">

        {{-- Promoción y Prevención --}}
        <div class="j-c2">

            <div class="j-c2-i-c">
                <i class="fas fa-plus-square fa-3x tc-pyp"></i>
            </div>

            <div class="j-c2-b-c">
                <div class="j-c2-b-title">
                Promoción y Prevención
                </div>  
            </div>

            <div class="j-c2-l-c">
                <div class="j-c2-link">
                <a href="{{ route('HomePYP') }}">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-circle"></i>
                </a>
                </div>
            </div>

        </div>

        {{-- Consulta Externa --}}
        <div class="j-c2">
    
            <div class="j-c2-i-c">
                <i class="fas fa-stethoscope fa-3x tc-cex"></i>
            </div>
            
            <div class="j-c2-b-c">
              <div class="j-c2-b-title">
                Medicina General
              </div>  
            </div>
            
            <div class="j-c2-l-c">
              <div class="j-c2-link">
                <a href="{{ route('MedicinaGeneralHome') }}">
                  <i class="fas fa-ellipsis-v"></i>
                  <i class="fas fa-circle"></i>
                </a>
              </div>
            </div>
            
        </div>

        {{-- Urgencias --}}
        <div class="j-c2">

            <div class="j-c2-i-c">
                <i class="fas fa-heartbeat fa-3x tc-urg"></i>
            </div>
            
            <div class="j-c2-b-c">
                <div class="j-c2-b-title">
                Urgencias
                </div>  
            </div>
            
            <div class="j-c2-l-c">
                <div class="j-c2-link">
                <a href="{{ route('UrgenciasHome') }}">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-circle"></i>
                </a>
                </div>
            </div>
            
        </div>

        {{-- Odontologia --}}
        <div class="j-c2">

            <div class="j-c2-i-c">
            <i class="fas fa-tooth fa-3x tc-odo"></i>
            </div>
            
            <div class="j-c2-b-c">
            <div class="j-c2-b-title">
                Odontología
            </div>  
            </div>
            
            <div class="j-c2-l-c">
            <div class="j-c2-link">
                <a href="">
                <i class="fas fa-ellipsis-v"></i>
                <i class="fas fa-circle"></i>
                </a>
            </div>
            </div>
            
        </div>

        {{-- Hospitalización --}}
        <div class="j-c2">

            <div class="j-c2-i-c">
            <i class="fas fa-procedures fa-3x tc-hos"></i>
            </div>
            
            <div class="j-c2-b-c">
            <div class="j-c2-b-title">
                Hospitalización
            </div>  
            </div>
            
            <div class="j-c2-l-c">
            <div class="j-c2-link">
                <a href="">
                <i class="fas fa-ellipsis-v"></i>
                <i class="fas fa-circle"></i>
                </a>
            </div>
            </div>
            
        </div>

        {{-- Rayos X --}}
        <div class="j-c2">

            <div class="j-c2-i-c">
                <i class="fas fa-file-prescription fa-3x tc-rx"></i>
            </div>
            
            <div class="j-c2-b-c">
                <div class="j-c2-b-title">
                Rayos X
                </div>  
            </div>
            
            <div class="j-c2-l-c">
                <div class="j-c2-link">
                <a href="{{ route('RayosXHome') }}">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-circle"></i>
                </a>
                </div>
            </div>
            
        </div>

        {{-- Laboratorio --}}
        <div class="j-c2">
        
            <div class="j-c2-i-c">
                <i class="fas fa-microscope fa-3x tc-lab"></i>
            </div>
            
            <div class="j-c2-b-c">
            <div class="j-c2-b-title">
                Laboratorio
            </div>  
            </div>
            
            <div class="j-c2-l-c">
            <div class="j-c2-link">
                <a href="">
                <i class="fas fa-ellipsis-v"></i>
                <i class="fas fa-circle"></i>
                </a>
            </div>
            </div>
            
        </div>

        {{-- Remisiones --}}
        <div class="j-c2">

            <div class="j-c2-i-c">
                <i class="fas fa-ambulance fa-3x tc-rem"></i>
            </div>

            <div class="j-c2-b-c">
                <div class="j-c2-b-title">
                Remisiones
                </div>  
            </div>

            <div class="j-c2-l-c">
                <div class="j-c2-link">
                <a href="">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-circle"></i>
                </a>
                </div>
            </div>

        </div>


    </div>

</div>

@endsection