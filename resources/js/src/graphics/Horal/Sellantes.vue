<template>

    <div>

        <base-graph></base-graph>

    </div>

</template>

<script>

import { mapState } from 'vuex'
import BaseGraph from "../../BaseGraph.vue"

export default {

    name: 'sellantes',

    extends: BaseGraph,

    components: { BaseGraph },

    beforeMount(){
        this.$store.commit('SET_TITLE','Número de Sellantes Aplicados')
    },

    created() {
        axios.get('/IndicadoresProduccion/HOral/SellantesData')
        .then(response => {
            this.$store.commit('SET_LIST',response.data.datos)
            this.$store.commit('SET_LIST_OF_YEARS', this.getYears)
        })          
    }

}
</script>