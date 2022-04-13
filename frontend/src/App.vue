<template>
  <h1>Vue</h1>
  <CalendarShow mes="Abril" />
</template>

<script>
import CalendarShow from "./components/CalendarShow.vue";

export default {
  name: "App",
  components: {
    CalendarShow,
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
