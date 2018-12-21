<template>
  <div id="margin-shift">
     <h2>Welcome to Home page</h2>
  </div>
</template>

<script>

export default {

  data () {
    return {

    }
  },
  mounted(){
     this.$axios.post("http://localhost/vue-cli/vueapis/api.php",{
       name: "Online web tutor",
       email: "onlinewebtutorhub@gmail.com",
       phone: "123457980",
       action: "insert"
     })
     .then(function(response){
        console.log(response)
     })
     .catch(function(error){
        console.log(error)
     });
  }
}
</script>

<style scoped>
  #margin-shift{
     margin-left:20%;
  }
</style>
