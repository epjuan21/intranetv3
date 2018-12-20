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

        <hr>

    </div>

    <div class="container">
        <div class="row">
            <div id="chart2" style="width:100%; height:400px;"></div>
        </div>
    </div>

@endsection

@section('scripts_graficos')

<script>

var y2018 = 2018;
var url = '{{url("IndicadoresProduccion/HOral/SellantesData/")}}';

var url2018 = `${url}/${y2018}`;

const meses = ['ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC'];

//===============================================================//
//
//  Chart 1
//
//===============================================================//

let dataArray1 = [];
    fetch(url2018)
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
        labels: {
            enabled: false
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
            name: '2018',
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

    var urlYear = '{{url("IndicadoresProduccion/HOral/SellantesYear")}}';
    let data2018 = [];
    let data2017 = [];
    fetch(urlYear)
        .then(response => response.json())
        .then(data => {
            let datos = data.datos;
            let res_2018 = datos.filter((data) => data.YEAR_ATENTION === 2018);
            let res_2017 = datos.filter((data) =>  data.YEAR_ATENTION === 2017);
            res_2018.map( dat => { data2018.push(dat.CANTIDAD) })
            res_2017.map( dat => { data2017.push(dat.CANTIDAD) })
            console.log(data2018);

            $('#chart2').highcharts(json);
        })
    
    var chart = {
        type: 'column'
    };
    var title = {
        text: 'Histórico de Número de sellantes aplicados'
    };
    var xAxis = {
        categories: meses
    };
    var yAxis = {
        title: {
            text: null
        },
        labels: {
            enabled: false
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
            name: '2017',
            data: data2017
        },
        {
            name: '2018',
            data: data2018,
            color: '#1864AB'
        }
    ];

    var json = {};
    json.chart = chart;
    json.title = title;
    json.xAxis = xAxis;
    json.yAxis = yAxis;
    //json.plotOptions = plotOptions;
    json.legend = legend;
    json.series = series;
    json.credits = credits;


 </script>

@endsection