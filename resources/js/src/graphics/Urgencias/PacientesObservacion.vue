<template>

    <div>

        <base-graph></base-graph>

    </div>

</template>

<script>

import { mapState } from 'vuex'
import BaseGraph from "../../BaseGraph.vue"

export default {

    name: 'pacientes-observacion',

    extends: BaseGraph,

    components: { BaseGraph },

    beforeMount(){
        this.$store.commit('SET_TITLE','Pacientes en Observación')
    },

    created() {
        axios.get('/IndicadoresProduccion/PacientesObservacionData')
        .then(response => {
            this.$store.commit('SET_LIST',response.data)
            this.$store.commit('SET_LIST_OF_YEARS', this.getYears)
        })          
    }

}
</script>