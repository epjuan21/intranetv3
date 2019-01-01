<template>

    <div class="container">
        <div class="j-graphic-card">
            <div class="j-graphic-head">
                
                <div class="j-select-container">
                    <select-year></select-year>
                </div>
                
            </div>

            <div class="j-graphic-body">
                <div id="sellantes-graphic" style="width:100%; height:100%;"></div>
            </div>

        </div>
    </div>

</template>
    
<script>

import selectYear from "../SelectYear.vue"
import BaseComponent from '../BaseComponent.vue'

export default {
    extends: BaseComponent,
    components: {
        selectYear
    },
    data() {
        return {
            currentYear: ''
        }
    },
    computed: {
        getYears(){
            const listOfAllYears = this.list.map(item => item.YEAR_ATENTION)
            const listOfYears = _.uniq(listOfAllYears)
            return listOfYears 
        }
    },

    watch: {
        list() {
            this.dataSource()
        },
        filter(){
            this.dataSource()
        }
    },
    mounted() {
        axios.get('/IndicadoresProduccion/HOral/SellantesYear')
        .then(response => {
            this.$store.commit('SET_LIST',response.data.datos)
            this.$store.commit('SET_LIST_OF_YEARS', this.getYears)
        })
    },
    methods: {

        dataSource() {

            let list = this.list
            
            if (this.filter !== '') {
                list = list.filter(item => item.YEAR_ATENTION === parseInt(this.filter))
            } else if (this.filter == '') {
                list = list.filter(item => item.YEAR_ATENTION === this.currentYear)
            }

            const values = list.map(item => item.CANTIDAD)
            
            let seriesName

            if (this.currentYear !== '' && this.filter == '') {
                seriesName = this.currentYear
            } else if (this.currentYear == '' || this.filter !== '') {
                seriesName = this.filter
            }

            this.setup(values, seriesName)
        },

        setup(values, seriesName) {
    
            Highcharts.chart('sellantes-graphic', {
                chart: {
                    type: 'column'
                },
                credits: {
                    enabled: false
                },
                title: {
                    text: 'Número de Sellantes'
                },
                subtitle: {
                    text: null
                },
                xAxis: {
                    categories: [ 'ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC']
                },
                yAxis: {
                    title: {
                        text: null
                    },
                    labels: {
                        enabled: false
                    },
                    gridLineWidth: 1,
                    gridLineColor: '#FCFCFC'
                },
                plotOptions: {
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
                },
                series: [{
                    name: seriesName,
                    data: values

                },]
            })
        }
    },
}
</script>

