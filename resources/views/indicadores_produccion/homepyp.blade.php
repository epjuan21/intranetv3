@extends('layouts.app')

@section('title','Indicadores Promoción y Prevención')

@section('content')

<div class="container-fluid mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Indicadores Promoción y Prevención</h1>
        <hr>
    </div>
</div>

<div class="container">

    <div class="row">

        <table class="table table-bordered">
            <thead  class="thead-dark">
                <tr>
                    <th>Higiene Oral</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="{{ route('Sellantes') }}">Sellantes</a></td>
                </tr>
                <tr>
                    <td><a href="{{ route('ControlPlaca') }}">Control de Placa</a></td>
                </tr>
                <tr>
                    <td><a href="{{ route('FluorTopico') }}">Topicación de Flúor Tópico</a></td>
                </tr>
                <tr>
                <td><a href="{{ route('BarnizFluor') }}">Barniz de Flúor</a></td>
                </tr>                
            </tbody>

        </table>

        <table class="table table-bordered">
            <thead  class="thead-dark">
                <tr>
                    <th>Crecimiento y Desarrollo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Consultas de Crecimiento y Desarrollo de Primera Vez por Médico</td>
                </tr>
                <tr>
                    <td>Consultas de Crecimiento y Desarrollo de Control por Enfermería y Médico</td>
                </tr>
            </tbody>
        </table>

    </div>



</div>



@endsection