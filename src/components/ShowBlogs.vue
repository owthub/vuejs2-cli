<template>
  <div v-list:orange="'wide'">

    <a v-bind:href="href" v-bind:title="title | makeUppercase">Click here to go Google</a>

     <h1>Listing Blogs</h1>
     <div v-for="blog in blogs">
       <h3 v-format>{{ blog.title | makeUppercase }}</h3>
       <p>{{ blog.body | contentSnippet }}</p>
     </div>
  </div>
</template>

<script>
import FiltersMixin from '../mixins/filters'

export default {
  mixins:[
     FiltersMixin
  ],
  data () {
    return {
        blogs:[],
        href:"https://www.google",
        title:"go to google"
    }
  },
  methods:{

  },
  created(){

       this.$http.get("https://jsonplaceholder.typicode.com/posts").then(function(data){
          //console.log(data);
          this.blogs = data.body.slice(0,5);
       });
  },
  /*filters:{
    makeUppercase: function(value){
       return value.toUpperCase();
    },
    contentSnippet: function(value){
        return value.slice(0,70)+"...";
    }
  }*/
}
</script>
