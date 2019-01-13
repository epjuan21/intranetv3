<template>

    <div>
        <select class="form-control form-control-sm" v-on:change.prevent="commit" v-model.number="year">
            <option disabled value="">Año...</option>
            <option v-for="year in listOfYears" v-bind:value="year" :key="year">{{ year }}</option>
        </select>
    </div>

</template>

<script>
import { mapState } from 'vuex'
export default {
    
    data() {
        return {
            year: ''
        }
    },

    computed: {
        ...mapState({
            listOfYears: state => state.listOfYears
        })
    },

    methods: {
        commit(){
            this.$store.commit('SET_FILTER', this.year)
        },
    }
}
</script>