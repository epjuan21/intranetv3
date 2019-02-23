<template>

    <div>

        <base-graph></base-graph>

    </div>

</template>

<script>

import { mapState } from 'vuex'
import BaseGraph from "../../BaseGraph.vue"

export default {

    name: 'procedimientos-menores',

    extends: BaseGraph,

    components: { BaseGraph },

    beforeMount(){
        this.$store.commit('SET_TITLE','Número total de procedimientos menores por médico')
    },

    created() {
        axios.get('/IndicadoresProduccion/ProcedimientosMenoresData')
        .then(response => {
            this.$store.commit('SET_LIST',response.data)
            this.$store.commit('SET_LIST_OF_YEARS', this.getYears)
        })          
    }

}
</script>