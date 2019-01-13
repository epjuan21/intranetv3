<template>

    <div>

        <base-graph></base-graph>

    </div>
    
</template>

<script>

import { mapState, mapMutations } from 'vuex'
import BaseGraph from "../../BaseGraph.vue"

export default {
    
    name: 'agudeza-visual',

    extends: BaseGraph,

    components: { BaseGraph },

    methods: {
        ...mapMutations(['SET_LIST','SET_LIST_OF_YEARS'])
    },

    beforeMount(){
        this.$store.commit('SET_TITLE','Medición o Valoración de la Agudeza Visual')
    },

    created() {
        axios.get('/IndicadoresProduccion/AgudezaVisualData')
        .then(response => {
            this.SET_LIST(response.data)
            this.SET_LIST_OF_YEARS(this.getYears)
        })   
    },    
}
</script>