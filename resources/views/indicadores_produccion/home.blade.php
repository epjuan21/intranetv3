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
              <i class="fas fa-plus-square fa-2x color-pyp"></i>
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
                <i class="fas fa-stethoscope"></i>
            </div>
            
            <div class="j-c2-b-c">
              <div class="j-c2-b-title">
                Consulta Externa
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

        {{-- Urgencias --}}
        <div class="j-c2">
    
                <div class="j-c2-i-c">
                  <i class="fas fa-plus-square fa-2x"></i>
                </div>
                
                <div class="j-c2-b-c">
                  <div class="j-c2-b-title">
                    Urgencias
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