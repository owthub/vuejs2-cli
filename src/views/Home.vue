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
     // Insert API Call
     /*this.$axios.post("http://localhost/vue-cli/vueapis/api.php",{
       name: "Sample name",
       email: "sampleemail@gmail.com",
       phone: "9764654512",
       action: "insert"
     })
     .then(function(response){
        console.log(response)
     })
     .catch(function(error){
        console.log(error)
     });*/

     // Update API Call
     this.$axios.post("http://localhost/vue-cli/vueapis/api.php",{
       name: "Test name",
       email: "test123@gmail.com",
       phone: "888888888",
       action: "update",
       student_id:3
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
