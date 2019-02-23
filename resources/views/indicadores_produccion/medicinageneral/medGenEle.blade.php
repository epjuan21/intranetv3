@extends('layouts.app')

@section('title','Indicadores Producción')

@section('breadcrumb')
    <nav>
        <ol class="j-bread">
            <li class="j-bread-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="j-bread-item"><a href="{{ route('IndicadoresProduccion') }}">Indicadores Producción</a></li>
            <li class="j-bread-item"><a href="{{ route('MedicinaGeneralHome') }}">Medicina General</a></li>
            <li class="j-bread-item active">Medicina General Electiva</li>
        </ol>
    </nav>
@endsection

@section('content')

   <div class="container">
      <div class="j-h1">
         <div class="j-h1-w">
            <div class="j-h1-n">01</div>
            <h1>Número de Consultas de Medicina General Electivas</h1>
         </div>
      </div>
   </div>

   <medicina-general-electiva></medicina-general-electiva>

@endsection