<template>
  <div id="margin-shift">
       <h1>All Blogs</h1>
       <div v-for="blog in blogs">
          <router-link v-bind:to="'/blog/'+blog.id"><h3>{{ blog.title }}</h3></router-link>
          <p>{{ blog.body }}</p>
       </div>
  </div>
</template>

<script>

export default {

  data () {
    return {
        blogs:[]
    }
  },
  created(){

     this.$http.get("https://jsonplaceholder.typicode.com/posts").then(function(response){

         this.blogs = response.body.slice(0,10);
     });
  }
}
</script>

<style scoped>

</style>
