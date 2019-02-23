<template>

    <div>

        <base-graph></base-graph>

    </div>

</template>

<script>

import { mapState } from 'vuex'
import BaseGraph from "../../BaseGraph.vue"

export default {

    name: 'triaje-2',

    extends: BaseGraph,

    components: { BaseGraph },

    beforeMount(){
        this.$store.commit('SET_TITLE','Pacientes Clasificados como Triage 2')
    },

    created() {
        axios.get('/IndicadoresProduccion/Triaje2Data')
        .then(response => {
            this.$store.commit('SET_LIST',response.data)
            this.$store.commit('SET_LIST_OF_YEARS', this.getYears)
        })          
    }

}
</script>