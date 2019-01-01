<template>

    <div>

        <base-graph></base-graph>

    </div>

</template>

<script>

import { mapState } from 'vuex'
import BaseGraph from "../../BaseGraph.vue"

export default {

    name: 'control-placa',

    extends: BaseGraph,

    components: {
        BaseGraph
    },

    data() {
        return {
            name: 'Control Placa',
        }
    },

    beforeMount(){
        this.$store.commit('SET_TITLE','Número de Controles de Placa')
    },

    created() {
        axios.get('/IndicadoresProduccion/HOral/ControlPlacaData')
        .then(response => {
            this.$store.commit('SET_LIST',response.data)
            this.$store.commit('SET_LIST_OF_YEARS', this.getYears)
        })          
    }

}
</script>