<template>

    <div>

        <base-graph></base-graph>

    </div>

</template>

<script>

import { mapState } from 'vuex'
import BaseGraph from "../../BaseGraph.vue"

export default {

    name: 'medicina-general-electiva',

    extends: BaseGraph,

    components: { BaseGraph },

    beforeMount(){
        this.$store.commit('SET_TITLE','Consultas de Medicina General Electiva')
    },

    created() {
        axios.get('/IndicadoresProduccion/MedicinaGeneralElectivaData')
        .then(response => {
            this.$store.commit('SET_LIST',response.data)
            this.$store.commit('SET_LIST_OF_YEARS', this.getYears)
        })          
    }

}
</script>