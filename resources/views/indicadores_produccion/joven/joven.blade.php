@extends('layouts.app')

@section('title','Indicadores Producción')

@section('breadcrumb')
    <nav>
        <ol class="j-bread">
            <li class="j-bread-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="j-bread-item"><a href="{{ route('IndicadoresProduccion') }}">Indicadores Producción</a></li>
            <li class="j-bread-item"><a href="{{ route('HomePYP') }}">Promoción y Prevención</a></li>
            <li class="j-bread-item active">Consulta de Primera Vez por Medico del Joven</li>
        </ol>
    </nav>
@endsection


@section('content')

   <div class="container">
      <div class="j-h1">
         <div class="j-h1-w">
            <div class="j-h1-n">13</div>
            <h1>Consulta de Primera Vez por Medico del Joven</h1>
         </div>
      </div>
   </div>

   <joven></joven>

@endsection