@extends('layouts.app')

@section('title','Indicadores Producción')

@section('content')

    <div class="container-fluid mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Indicadores de Producción</h1>
            <p class="lead">Indicadores de Higiene Oral. Flúor Tópico</p>
            <hr>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div id="container" style="width:100%; height:400px;"></div>
            </div>
        </div>
    </div>

@endsection

@section('scripts_graficos')


<script>
 
$(function () { 
    var options = {
        chart: {
            renderTo: 'container',
            type: 'bar'
        },
        title: {
            text: 'Fruit Consumption'
        },
        xAxis: {
            categories: []
        },
        yAxis: {
            title: {
                text: 'Fruit eaten'
            }
        },
        series: [{
                 name: 'Consultas',
                 data: []
             }]
    };

    var url = '{{url("IndicadoresProduccion/HOral/FluorTopicoData")}}';
    $.getJSON(url,  function(data) {
        var datos = data.datos;

        for (i = 0; i < datos.length; i++){
            //processed_json.push([datos[i].CANTIDAD]);
            options.series[0].data.push(datos[i].CANTIDAD);
            options.xAxis.categories.push(datos[i].MES_ATENCION);
        }
        var chart = new Highcharts.Chart(options);
    });

});

 </script>

@endsection