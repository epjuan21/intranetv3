import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        list: [],
        filter: '',
        listOfYears: [],
        title: ''
    },
    mutations: {
        SET_LIST(state, obj) {
            state.list = obj
        },
        SET_FILTER(state, obj) {
            state.filter = obj
        },
        SET_LIST_OF_YEARS(state, obj){
            state.listOfYears = obj
        },
        SET_TITLE(state, obj){
            state.title = obj
        }
    }
})