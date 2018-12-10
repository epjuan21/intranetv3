@extends('layouts.app')

@section('title','Indicadores Producción')

@section('breadcrumb')
    <nav>
        <ol class="j-bread">
            <li class="j-bread-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="j-bread-item"><a href="{{ route('IndicadoresProduccion') }}">Indicadores Producción</a></li>
            <li class="j-bread-item"><a href="{{ route('HomePYP') }}">Promoción y Prevención</a></li>
            <li class="j-bread-item active">Sellantes</li>
        </ol>
    </nav>
@endsection

@section('content')

<div class="container">
    <div class="j-h1">
        <div class="j-h1-w">
            <div class="j-h1-n">01</div>
            <h1>Higiene Oral - Sellantes</h1>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row">
            <div id="chart1" style="width:100%; height:400px;"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div id="chart2" style="width:100%; height:400px;"></div>
            </div>
        </div>
    </div>

@endsection

@section('scripts_graficos')

<script>

var url = '{{url("IndicadoresProduccion/HOral/SellantesData")}}';
const meses = ['ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC'];

//===============================================================//
//
//  Chart 1
//
//===============================================================//

let dataArray1 = [];
    fetch(url)
        .then(response => response.json())
        .then(data => {
            let datos = data.datos;
            datos.map( dat => {
                dataArray1.push(dat.data);
            })
            $('#chart1').highcharts(chart1);
        })
    var chart = {
        type: 'column'
    };
    var title = {
        text: 'Número de sellantes aplicados'
    };
    var xAxis = {
        categories: meses
    };
    var plotOptions = {
        series: {
            color: '#228BE6',
            dataLabels: {
                enabled: true,
                color: '#495057',
                borderRadius: 3,
                backgroundColor: '#FCFCFC',
                borderWidth: 1,
                borderColor: '#E9ECEF',
                y: -6
            }
        }
    };
    var yAxis = {
        title: {
            text: null
        },
        gridLineWidth: 1,
        gridLineColor: '#FCFCFC'
    };
    var credits = {
        enabled: false
    };
    var legend = {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
        borderWidth: 0
    };
    var series = [
        {
            name: '2017',
            data: dataArray1
        }
    ];

    var chart1 = {};
    chart1.chart = chart;
    chart1.title = title;
    chart1.xAxis = xAxis;
    chart1.plotOptions = plotOptions;
    chart1.yAxis = yAxis;
    chart1.legend = legend;
    chart1.series = series;
    chart1.credits = credits;

//===============================================================//
//
//  Chart 2
//
//===============================================================//

    let dataArray = [];
    fetch(url)
        .then(response => response.json())
        .then(data => {
            let datos = data.datos;
            datos.map( dat => {
                dataArray.push(dat.data);
            })
            $('#chart2').highcharts(json);
        })
    var title = {
        text: 'Número de sellantes aplicados'
    };
    var xAxis = {
        categories: meses
    };
    var yAxis = {
        title: {
            text: null
        },
    };
    var credits = {
        enabled: false
    };
    var plotOptions = {
        series: {
            color: '#228BE6'
        }
    };
    var legend = {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
        borderWidth: 0
    };
    var series = [
        {
            name: '2018',
            data: [1,2,3,2,3,2,2,2,1,23,11]
        },
        {
            name: '2017',
            data: dataArray
        }
    ];

    var json = {};
    json.title = title;
    json.xAxis = xAxis;
    json.yAxis = yAxis;
    json.plotOptions = plotOptions;
    json.legend = legend;
    json.series = series;
    json.credits = credits;


 </script>

@endsection