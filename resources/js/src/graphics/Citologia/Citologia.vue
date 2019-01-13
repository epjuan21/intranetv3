<template>

    <div>

        <base-graph></base-graph>

    </div>
    
</template>

<script>

import { mapState, mapMutations } from 'vuex'
import BaseGraph from "../../BaseGraph.vue"

export default {
    
    name: 'citologia',

    extends: BaseGraph,

    components: { BaseGraph },

    methods: {
        ...mapMutations(['SET_LIST','SET_LIST_OF_YEARS'])
    },

    beforeMount(){
        this.$store.commit('SET_TITLE','Citologías Cervico Uterinas Tomadas')
    },

    created() {
        axios.get('/IndicadoresProduccion/CitologiasData')
        .then(response => {
            this.SET_LIST(response.data)
            this.SET_LIST_OF_YEARS(this.getYears)
        })   
    },    
}
</script>