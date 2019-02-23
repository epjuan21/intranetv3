<template>

    <div>

        <base-graph></base-graph>

    </div>

</template>

<script>

import { mapState } from 'vuex'
import BaseGraph from "../../BaseGraph.vue"

export default {

    name: 'consulta-urgencias',

    extends: BaseGraph,

    components: { BaseGraph },

    beforeMount(){
        this.$store.commit('SET_TITLE','Consulta de Medicina General en Urgencias')
    },

    created() {
        axios.get('/IndicadoresProduccion/ConsultasUrgenciasData')
        .then(response => {
            this.$store.commit('SET_LIST',response.data)
            this.$store.commit('SET_LIST_OF_YEARS', this.getYears)
        })          
    }

}
</script>