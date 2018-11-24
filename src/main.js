import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
//import VueResource from 'vue-resource'
// importing components
import Home from './views/Home.vue'
import Contact from './views/Contact.vue'
import About from './views/About.vue'
import Services from './views/Services.vue'

Vue.use(VueRouter)

// routes
const routes = [
  { path:"/",component: Home },
  { path:"/about",component: About },
  { path:"/contact",component: Contact },
  { path:"/services",component: Services }
];

const router = new VueRouter({
  routes: routes
});

//Vue.use(VueResource)

new Vue({
  el: '#app',
  render: h => h(App),
  router: router
})
