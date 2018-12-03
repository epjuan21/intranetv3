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
            <div class="col-6">
                <div id="container" style="width:100%; height:400px;"></div>
            </div>
        </div>
    </div>

@endsection

@section('scripts_graficos')

<script>

    var url = '{{url("IndicadoresProduccion/HOral/SellantesData")}}';
    let dataArray = [];
    fetch(url)
        .then(response => response.json())
        .then(data => {
            let datos = data.datos;
            datos.map( dat => {
                dataArray.push(dat.data);
            })
            $('#container').highcharts(json);
        })
    var title = {
        text: 'Monthly Average Temperature'
    };
    var subtitle = {
        text: 'Source: WorldClimate.com'
    };
    var xAxis = {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    };
    var yAxis = {
        title: {
            text: 'Temperature (\xB0C)'
        },
        plotLines: [{
            value: 0,
            width: 1,
            color: '#808080'
        }]
    };   
    var tooltip = {
        valueSuffix: '\xB0C'
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
    json.subtitle = subtitle;
    json.xAxis = xAxis;
    json.yAxis = yAxis;
    json.tooltip = tooltip;
    json.legend = legend;
    json.series = series;
    //$('#container').highcharts(json);

 </script>

@endsection