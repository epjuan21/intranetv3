<template>

    <div class="container">
        <div class="j-graphic-card">
            <div class="j-graphic-head">
                
                <div class="j-select-container">
                    <select-year></select-year>
                </div>
                
            </div>

            <div class="j-graphic-body">
                <spinner v-show="loading"></spinner>
                <div id="graphic" style="width:100%; height:100%;"></div>
            </div>

        </div>
    </div>

</template>

<script>

import Highcharts from 'highcharts'
import { mapState } from 'vuex'
import selectYear from './SelectYear.vue'
import Spinner from './Spinner.vue'

export default {

    name: 'base-graph',
    
    components: {
        selectYear,
        Spinner
    },

    data() {
        return {
            currentYear: '',
            seriesName: '',
            loading: true
        }
    },

    computed: {
        
        ...mapState(['filter','list','title']),

        getCurrentYear(){
            const currentDate = new Date();
            return this.currentYear = currentDate.getFullYear();
        },
        getYears(){
            const listOfAllYears = this.list.map(item => parseInt(item.YEAR_ATENTION))
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
    created() {
        this.getCurrentYear
    },

    methods: {

        dataSource() {
            const self = this
            this.loading = true
            let list = this.list
            
            if (this.filter !== '') {
                list = list.filter(item => parseInt(item.YEAR_ATENTION) === parseInt(this.filter))
            } else if (this.filter == '') {
                list = list.filter(item => parseInt(item.YEAR_ATENTION) === this.currentYear)
            }

            const values = list.map(item => parseInt(item.CANTIDAD))
            const categories = list.map(item => item.MES_ATENCION.substr(3,3))

            if (this.currentYear !== '' && this.filter == '') {
                this.seriesName = this.currentYear
            } else if (this.currentYear == '' || this.filter !== '') {
                this.seriesName = this.filter
            }

            this.buildGraphic(values, categories)
            this.loading = false
        },  
        
        buildGraphic(values, categories) {
            Highcharts.chart('graphic', {
                chart: {
                    type: 'column'
                },
                credits: {
                    enabled: false
                },
                title: {
                    text: this.title
                },
                subtitle: {
                    text: null
                },
                xAxis: {
                    categories: categories
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
                    name: this.seriesName,
                    data: values
                },]
            })
        }
    
    },
}
</script>
