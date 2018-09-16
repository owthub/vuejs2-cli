<template>
  <div>
      <owt-header></owt-header>

      <owt-content v-bind:simple-message="someMessage" v-bind:students="students" channel-name="Online Web Tutor" name="Sanjay Kumar" v-bind:is-learning="false" v-bind:author="{name:'Sanjay',email:'abc@gmail.com'}"  v-bind:myplaylist="playlists"></owt-content>

      <owt-student v-bind:simple-message="someMessage" v-bind:students="students"></owt-student>

      <owt-footer></owt-footer>
  </div>
</template>

<script>

import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import Content from './components/Content.vue'
import Student from './components/Student.vue'

export default {
  components:{
    "owt-header": Header,
    "owt-footer": Footer,
    "owt-content": Content,
    "owt-student":Student
  },
  data () {
    return {
    playlists:[
      {
          name:"Wordpress Plugin Development",
          githublink:"https://github.com/owthub/wordpress-plugin",
          title:"Wordpress Plugin Development"
      },
      {
         name:"Wordpress Theme Development",
         githublink:"https://github.com/owthub/wordpress-theme",
         title:"Wordpress Theme Development"
       },
       {
          name:"Vue Js2 Development",
          githublink:"https://github.com/owthub/vuejs2",
          title:"Vue Js2 Development"
        },
        {
           name:"WP JSON Rest API Development",
           githublink:"https://github.com/owthub/wordpress-json-rest-api",
           title:"WP JSON Rest API Development"
         },
         {
            name:"WP JSON Rest API Development",
            githublink:"https://github.com/owthub/wordpress-json-rest-api",
            title:"WP JSON Rest API Development"
          }
    ],
    students:[
      "Sanjay",
      "Rahul",
      "Rakesh",
      "Aman",
      "Vijay"
    ],
    someMessage:"Simple message defined here"
    }
  }
}
</script>

<style scoped>

</style>
