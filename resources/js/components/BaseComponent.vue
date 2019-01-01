<script>
import { mapState } from 'vuex'
export default {

    data() {
        return {
            currentYear: '',
        }
    },

    computed: {
        ...mapState({
            list: state => state.list,
            filter: state => state.filter
        }),
        getCurrentYear(){
            const currentDate = new Date();
            return this.currentYear = currentDate.getFullYear();
        }
    },
    created() {
        this.getCurrentYear
    },
}
</script>