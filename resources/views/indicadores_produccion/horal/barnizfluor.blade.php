@extends('layouts.app')

@section('title','Indicadores Producción')

@section('content')

    <div class="container-fluid mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Indicadores de Producción</h1>
            <p class="lead">Indicadores de Higiene Oral. Barniz de Fluor</p>
            <hr>
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

var url = '{{url("IndicadoresProduccion/HOral/FluorTopicoData")}}';
let dataArray = [];
fetch(url)
    .then(response => response.json())
    .then(data => {
        let datos = data.datos;
        return datos.map(function(dat){
            dataArray.push(dat.CANTIDAD)
            $('#container').highcharts(json)
        });
        
    });
    
//$(document).ready(function() {
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
   }
   var legend = {
      layout: 'vertical',
      align: 'right',
      verticalAlign: 'middle',
      borderWidth: 0
   };
   console.log(dataArray);
   var series =  [
      {
        name: 'Tokyo',
        data: dataArray
        //  [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2,
        //     26.5, 23.3, 18.3, 13.9, 9.6]
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
//   $('#container').highcharts(json);
//});
 </script>

@endsection