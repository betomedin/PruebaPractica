require('./bootstrap')
import Vue from 'vue'

//Componente Raiz
Vue.component('App', require('./components/App.vue'))

const app = new Vue().$mount('#app')
