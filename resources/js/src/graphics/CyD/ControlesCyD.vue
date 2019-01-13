<template>

    <div>

        <base-graph></base-graph>

    </div>
    
</template>

<script>

import { mapState } from 'vuex'
import BaseGraph from "../../BaseGraph.vue"

export default {
    
    name: 'controles-cyd',

    extends: BaseGraph,

    components: { BaseGraph },

    beforeMount(){
        this.$store.commit('SET_TITLE','Controles de Crecimiento y Desarrollo')
    },

    created() {
        axios.get('/IndicadoresProduccion/CyDControlesData')
        .then(response => {
            this.$store.commit('SET_LIST',response.data)
            this.$store.commit('SET_LIST_OF_YEARS', this.getYears)
        })   
    }
}
</script>