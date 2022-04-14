<template>
  <h1>Calendario</h1>
  <select v-model="monthSelected">
    <option value="0">Enero</option>
    <option value="1">Febrero</option>
    <option value="2">Marzo</option>
    <option value="3">Abril</option>
    <option value="4">Mayo</option>
    <option value="5">Junio</option>
    <option value="6">Julio</option>
    <option value="7">Agosto</option>
    <option value="8">Septiembre</option>
    <option value="9">Octubre</option>
    <option value="10">Nombre</option>
    <option value="11">Diciembre</option>
  </select>
  <CalendarShow v-bind:dias="dias" />
</template>

<script>
import CalendarShow from "./components/CalendarShow.vue";
import axios from "axios";

export default {
  name: "App",
  components: {
    CalendarShow,
  },
  data() {
    return {
      monthSelected: 3,
      dias: [],
    };
  },
  methods: {
    getImages() {
      let date = new Date();
      date.setMonth(this.monthSelected);

      let firstDate = new Date(date.getFullYear(), date.getMonth(), 1);
      let lastDate = new Date(date.getFullYear(), date.getMonth() + 1, 0);

      let inicio =
        firstDate.getFullYear() +
        "-" +
        (firstDate.getMonth() + 1) +
        "-" +
        firstDate.getDate();
      let termino =
        lastDate.getFullYear() +
        "-" +
        (lastDate.getMonth() + 1) +
        "-" +
        lastDate.getDate();

      console.log(inicio, termino);

      axios
        .get("http://127.0.0.1:8000/api/dias/" + inicio + "/" + termino)
        .then((response) => {
          this.dias = response.data;
          console.log(date.toLocaleDateString(), inicio, termino);
          console.log(this.dias);
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    selectMonth(month) {
      console.log(month);
    },
  },
  watch: {
    monthSelected: function () {
      this.getImages();
    },
  },
  created() {
    this.getImages();
  },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
