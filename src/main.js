import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import Routes from './routes'
import VueResource from 'vue-resource'
import axios from 'axios'
import VueAxios from 'vue-axios'

// npm install --save axios vue-axios

Vue.use(VueAxios,axios);

Vue.prototype.$axios = axios

Vue.use(VueRouter)

const router = new VueRouter({
  routes: Routes,
  mode: "history" // mode: "hash"
});

//Vue.use(VueResource)

new Vue({
  el: '#app',
  render: h => h(App),
  router: router
})
