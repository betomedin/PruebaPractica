<template>
  <table>
    <thead>
      <tr>
        <th>Dia</th>
        <th>Imagen</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="dia in dias" :key="dia.id">
        <td>{{ dia.fecha }}</td>
        <td>
          <span v-if="dia.estado == 1">
            <a target="_blank" v-bind:href="dia.imagenes.url"> ver imagen </a>
          </span>
          <span v-else>
            {{ dia.descripcion }}
          </span>
        </td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  data() {
    return {};
  },
  props: {
    dias: Array,
  },
  methods: {},
  created() {},
};
</script>

<style scoped>
table {
  width: 100%;
  border-collapse: collapse;
}
</style>