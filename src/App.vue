<template>
  <div id="margin-shift">
  
   <show-blogs></show-blogs>

  <h3>Blog Details</h3>
  <form name="blog_form" method="post">
     <p>
       <label>Title: </label>
       <input type="text" v-model.lazy="blog.title" placeholder="Enter Title"/>
     </p>
     <p>
       <label>Body: </label>
       <input type="text" v-model.lazy="blog.description" placeholder="Enter Description"/>
     </p>
     <p>
       <button v-on:click.prevent="postBlog">Submit</button>
     </p>
  </form>
  <div id="details-preview">
     <h3>Blog Details preview</h3>
     <p>Title: {{ blog.title }}</p>
     <p>Description: {{ blog.description }}</p>
  </div>
  </div>
</template>

<script>

import ShowBlogs from './components/ShowBlogs.vue'

export default {
  components:{
    "show-blogs":ShowBlogs
  },
  data () {
    return {
       blog:{
          title:"",
          description:"",
          user:""
       }
    }
  },
  methods:{
     postBlog: function(){

         this.$http.post("https://jsonplaceholder.typicode.com/posts",{
            title:this.blog.title,
            body: this.blog.description,
            userId: this.blog.user
         }).then(function(data){
            console.log(data);
         });
     }
  }
}
</script>

<style scoped>
  #margin-shift{
     margin-left:20%;
  }
</style>
