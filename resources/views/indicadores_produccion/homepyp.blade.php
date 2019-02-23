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

{{-- Higiene Oral --}}

<div class="container">
    <div class="j-h2">
        <h2>Higiene Oral</h2>
    </div>
</div>

<div class="container">
    
    {{-- Sellantes --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">01</div>
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

    {{-- Control de Placa --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">02</div>
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

    {{-- Topicación de Flúor --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">03</div>
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

    {{-- Barniz de Flúor --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">04</div>
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

{{-- Vacunación --}}

<div class="container">
    <div class="j-h2">
        <h2>Vacunación</h2>
    </div>
</div>

<div class="container">

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">05</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Dosis de biológico aplicacas
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('Vacunacion') }}">gráficos</a>
            </div>
        </div>

    </div>    

</div>

{{-- Atención Post Parto --}}

<div class="container">
    <div class="j-h2">
        <h2>Atención Post Parto</h2>
    </div>
</div>

<div class="container">

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">06</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Consulta de Control por Médico Post Parto
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('PostParto') }}">gráficos</a>
            </div>
        </div>

    </div>    

</div>

{{-- Atención Recién Nacido --}}

<div class="container">
    <div class="j-h2">
        <h2>Atención Recién Nacido</h2>
    </div>
</div>

<div class="container">

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">07</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Consulta de Control por Medico Recien Nacido
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('RecienNacido') }}">gráficos</a>
            </div>
        </div>

    </div>    

</div>

{{-- Planificación Familiar --}}

<div class="container">
    <div class="j-h2">
        <h2>Planificación Familiar</h2>
    </div>
</div>

<div class="container">

    {{-- Consultas de Planificación Familiar de Primera Vez --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">08</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Consultas de Planificación Familiar de Primera Vez
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('PlanificacionFamiliarPrimeraVez') }}">gráficos</a>
            </div>
        </div>

    </div>

    {{-- Consultas de Planificación Familiar de Control --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">09</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Consultas de Planificación Familiar de Control
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('PlanificacionFamiliarControl') }}">gráficos</a>
            </div>
        </div>

    </div>

</div>

{{-- Dispositivo Intrauterino --}}

<div class="container">
    <div class="j-h2">
        <h2>Dispositivo Intrauterino</h2>
    </div>
</div>

<div class="container">

    {{-- Inserción y Retiro de Dispositivo Intrauterino --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">10</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Inserción y Retiro de Dispositivo Intrauterino
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('Diu') }}">gráficos</a>
            </div>
        </div>

    </div>

</div>

{{-- Crecimiento y Desarrollo --}}

<div class="container">
    <div class="j-h2">
        <h2>Crecimiento y Desarrollo</h2>
    </div>
</div>

<div class="container">

    {{-- Ingresos Crecimiento y Desarrollo --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">11</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Ingresos Crecimiento y Desarrollo
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('CYDIngresos') }}">gráficos</a>
            </div>
        </div>

    </div>

    {{-- Controles Crecimiento y Desarrollo --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">12</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Controles Crecimiento y Desarrollo
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('CYDControles') }}">gráficos</a>
            </div>
        </div>

    </div>

</div>

{{-- Consulta Joven --}}

<div class="container">
    <div class="j-h2">
        <h2>Consulta Joven</h2>
    </div>
</div>

<div class="container">

    {{-- Consulta de Primera Vez por Medico del Joven --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">13</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Consulta de Primera Vez por Medico del Joven
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('ConsultaJoven') }}">gráficos</a>
            </div>
        </div>

    </div>

</div>

{{-- Control Prenatal --}}

<div class="container">
    <div class="j-h2">
        <h2>Control Prenatal</h2>
    </div>
</div>

<div class="container">

    {{-- Ingreso a Control Prenatal Por Médico --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">14</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Ingreso a Control Prenatal Por Médico
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('IngresoControlPrenatal') }}">gráficos</a>
            </div>
        </div>

    </div>

    {{-- Consulta de Control Prenatal Por Medico --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">15</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Consulta de Control Prenatal Por Medico
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('ConsultaControlPrenatal') }}">gráficos</a>
            </div>
        </div>

    </div>

</div>

{{-- Consulta Adulto --}}

<div class="container">
    <div class="j-h2">
        <h2>Consulta Adulto</h2>
    </div>
</div>

<div class="container">

    {{-- Consulta de Primera Vez por Medico del Adulto --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">16</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Consulta de Primera Vez por Medico del Adulto
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('ConsultaAdulto') }}">gráficos</a>
            </div>
        </div>

    </div>

</div>

{{-- Citologías --}}

<div class="container">
    <div class="j-h2">
        <h2>Citologías</h2>
    </div>
</div>

<div class="container">

    {{-- Citologías Cervico Uterinas Tomadas --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">17</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Citologías Cervico Uterinas Tomadas
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('Citologia') }}">gráficos</a>
            </div>
        </div>

    </div>

</div>

{{-- Agudeza Visual --}}

<div class="container">
    <div class="j-h2">
        <h2>Agudeza Visual</h2>
    </div>
</div>

<div class="container">

    {{-- Medición o Valoración de la Agudeza Visual --}}

    <div class="j-c3">

        <div class="j-c3-i-c bc-pyp">
            <div class="j-c3-number">18</div>
        </div>

        <div class="j-c3-b-c">
            <div class="j-c3-b-title">
                Medición o Valoración de la Agudeza Visual
            </div>  
        </div>

        <div class="j-c3-l-c">
            <div class="j-c3-link">
                <a href="{{ route('AgudezaVisual') }}">gráficos</a>
            </div>
        </div>

    </div>

</div>


@endsection