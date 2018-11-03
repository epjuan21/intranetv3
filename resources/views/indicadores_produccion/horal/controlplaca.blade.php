@extends('layouts.app')

@section('title','Indicadores Producción')

@section('content')

    <div class="container-fluid mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Indicadores de Producción</h1>
            <p class="lead">Indicadores de Higiene Oral. Control de Placa</p>
            <hr>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Pruebas</h1>
            
            </div>
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
const url = '{{url("IndicadoresProduccion/HOral/ControlPlacaData")}}';
let dataArray = [];
fetch(url)
    .then(response => response.json())
    .then(data =>  {
        data.map(dat => {
            dataArray.push(parseInt(dat.CANTIDAD));
        })
        var chart = new Highcharts.Chart(options);
    });

    var options = {
    chart: {
        renderTo: 'container',
        type: 'bar'
    },
    xAxis:  {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    series: [{
        name: '2018',
        data: dataArray
    }]
};
   
 </script>

@endsection