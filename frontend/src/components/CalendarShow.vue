<template>
  <table>
    <thead>
      <tr>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miércoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sábado</th>
        <th>Domingo</th>
      </tr>
    </thead>
  </table>
</template>

<script>
export default {
  props: {
    mes: String,
  },
};
</script>

<style scoped>
table {
  width: 100%;
  border-collapse: collapse;
}
</style>