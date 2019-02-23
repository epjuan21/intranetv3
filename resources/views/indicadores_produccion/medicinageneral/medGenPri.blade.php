@extends('layouts.app')

@section('title','Indicadores Producción')

@section('breadcrumb')
    <nav>
        <ol class="j-bread">
            <li class="j-bread-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="j-bread-item"><a href="{{ route('IndicadoresProduccion') }}">Indicadores Producción</a></li>
            <li class="j-bread-item"><a href="{{ route('MedicinaGeneralHome') }}">Medicina General</a></li>
            <li class="j-bread-item active">Medicina General de Primera Vez</li>
        </ol>
    </nav>
@endsection

@section('content')

   <div class="container">
      <div class="j-h1">
         <div class="j-h1-w">
            <div class="j-h1-n">02</div>
            <h1>Número de Consultas de Medicina General de Primera Vez</h1>
         </div>
      </div>
   </div>

   <medicina-general-primera-vez></medicina-general-primera-vez>

@endsection