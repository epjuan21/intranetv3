<template>

    <div>

        <base-graph></base-graph>

    </div>
    
</template>

<script>

import { mapState } from 'vuex'
import BaseGraph from "../BaseGraph.vue"

export default {
    
    name: 'graph-two',

    extends: BaseGraph,

    components: {
        BaseGraph
    },

    data() {
        return {
            name: 'GraphicTwo',
        }
    },

    beforeMount(){
        this.$store.commit('SET_TITLE','Control de Placa')
    },

    created() {
        axios.get('/IndicadoresProduccion/HOral/SellantesYear')
        .then(response => {
            this.$store.commit('SET_LIST',response.data.datos)
            this.$store.commit('SET_LIST_OF_YEARS', this.getYears)
        })
        
    }

}
</script>