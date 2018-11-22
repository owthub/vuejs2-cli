<template>
  <div>
     <h3> Employee Form </h3>
     <form>
         <p>
            <label>Name: </label>
            <input type="text" name="txtEmployeeName"/>
         </p>
         <p>
            <label>Designation: </label>
            <input type="text" name="txtEmployeeClass"/>
         </p>
         <p>
            <label>Mobile No: </label>
            <input type="text" name="txtEmployeeMobile"/>
         </p>
         <p>
           <button v-on:click.prevent="post">Submit</button>
         </p>
     </form>
  </div>
</template>

<script>

export default {
  data () {
    return {

    }
  },
  methods:{
    post: function(){
    this.$http.post("https://jsonplaceholder.typicode.com/posts",{
       title: "Online Web Tutor Demo post",
       body:"This is sample body",
       userId: 2
    }).then(function(data){
      console.log(data)
    })
    }
  }
}
</script>
