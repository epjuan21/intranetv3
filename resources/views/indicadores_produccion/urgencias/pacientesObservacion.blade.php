@extends('layouts.app')

@section('title','Indicadores Producción')

@section('breadcrumb')
    <nav>
        <ol class="j-bread">
            <li class="j-bread-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="j-bread-item"><a href="{{ route('IndicadoresProduccion') }}">Indicadores Producción</a></li>
            <li class="j-bread-item"><a href="{{ route('UrgenciasHome') }}">Urgencias</a></li>
            <li class="j-bread-item active">Pacientes en Observación</li>
        </ol>
    </nav>
@endsection

@section('content')

   <div class="container">
      <div class="j-h1">
         <div class="j-h1-w">
            <div class="j-h1-n">04</div>
            <h1>Pacientes en Observación</h1>
         </div>
      </div>
   </div>

    <pacientes-observacion></pacientes-observacion>   

@endsection