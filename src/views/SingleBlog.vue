<template>
  <div id="margin-shift">
       <h1>Single Blog</h1>
       <div>
          <h3>{{ blog.title }}</h3>
          <p>{{ blog.body }}</p>
       </div>
  </div>
</template>

<script>

export default {

  data () {
    return {
        id: this.$route.params.id,
        blog:{}
    }
  },
  created(){

     this.$http.get("https://jsonplaceholder.typicode.com/posts/"+this.id).then(function(response){

         this.blog = response.body;
     });
  }
}
</script>

<style scoped>

</style>
