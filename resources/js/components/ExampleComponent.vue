<template>

<div class="row">
    <p>
        {{ data2018 }}
    </p>

    <div id="graphic" style="width:100%; height:400px;"></div>

  <ol>
    <li v-for="datos in data">
      {{ datos.CANTIDAD }}
    </li>
  </ol>

</div>



</template>

<script>

    var Highcharts = require('highcharts');

    export default {
        data () {
            return {
                data: [],
                cantidad: [],
                target: undefined,
                dataArray: [],
                data2018: [],
                res_2018: []
            }
        },
        methods: {
            getUrl: function () {
                var Url = '/IndicadoresProduccion/HOral/SellantesYear';
                axios.get(Url).then(response => {
                    this.data = response.data.datos;
                    //console.log(this.data);
                    this.res_2018 = this.data.filter((data) => data.YEAR_ATENTION === 2018);
                    //console.log(this.res_2018);
                    this.res_2018.map( dat => { this.data2018.push(dat.CANTIDAD) });
                    //console.log(this.data2018);
                    this.getGraphic();
                });
            },
            getGraphic: function () {
                //console.log(this.data2018);

                console.log(this.data2018);

                var options = {
                    chart: {
                        renderTo: 'graphic',
                        type: 'line'
                    },
                    xAxis:  {
                        categories: ['Ene','Feb','Mar']
                    },
                    series: [{
                        name: '2018',
                        data: this.data2018
                        
                    }]
                };
                this.target = new Highcharts.Chart(options);
            }
        },
        mounted: function () {
            this.getUrl();
            //this.getGraphic();
        },
        beforeDestroy: function() {
            this.target.destroy();
        },
    }
</script>