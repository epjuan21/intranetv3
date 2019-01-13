<template>

    <div>

        <base-graph></base-graph>

    </div>
    
</template>

<script>

import { mapState } from 'vuex'
import BaseGraph from "../../BaseGraph.vue"

export default {
    
    name: 'barniz-fluor',

    extends: BaseGraph,

    components: { BaseGraph },

    beforeMount(){
        this.$store.commit('SET_TITLE','Número de Aplicaciones de Flúor en Barniz')
    },

    created() {
        axios.get('/IndicadoresProduccion/HOral/BarnizFluorData')
        .then(response => {
            this.$store.commit('SET_LIST',response.data)
            this.$store.commit('SET_LIST_OF_YEARS', this.getYears)
        })
        
    }

}
</script>