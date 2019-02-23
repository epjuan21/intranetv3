<template>
  <div>
    <base-graph></base-graph>
  </div>
</template>

<script>
import { mapState } from "vuex";
import BaseGraph from "../../BaseGraph.vue";

export default {
  name: "medicina-general-primera-vez",

  extends: BaseGraph,

  components: { BaseGraph },

  beforeMount() {
    this.$store.commit(
      "SET_TITLE",
      "Consultas de Medicina General de Primera Vez"
    );
  },

  created() {
    axios
      .get("/IndicadoresProduccion/MedicinaGeneralPrimeraVezData")
      .then(response => {
        this.$store.commit("SET_LIST", response.data);
        this.$store.commit("SET_LIST_OF_YEARS", this.getYears);
      });
  }
};
</script>