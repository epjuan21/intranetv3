<template>

    <div>

        <base-graph></base-graph>

    </div>
    
</template>

<script>

import { mapState } from 'vuex'
import BaseGraph from "../../BaseGraph.vue"

export default {
    
    name: 'diu',

    extends: BaseGraph,

    components: { BaseGraph },

    beforeMount(){
        this.$store.commit('SET_TITLE','Inserción y Retiro de Dispositivo Intrauterino')
    },

    created() {
        axios.get('/IndicadoresProduccion/DispositivoData')
        .then(response => {
            this.$store.commit('SET_LIST',response.data)
            this.$store.commit('SET_LIST_OF_YEARS', this.getYears)
        })
        
    }

}
</script>