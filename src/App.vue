<template>
  <div>
      <student></student>

      <employee></employee>

     <h3>{{ simpleText }}</h3>

      <button @click="updateMessage()">Click here to update</button>
  </div>
</template>

<script>

import Student from './components/Student.vue'
import Employee from './components/Employee.vue'

export default {
  components:{
     "student":Student,
     "employee":Employee
  },
  data () {
    return {
      simpleText: "Simple message"
    }
  },
  methods:{
    updateMessage: function(){
        this.simpleText = "Message has been updated"
      }
  },
  beforeCreate(){
      alert("Before Create");
  },
  created(){
     alert("Created");
  },
  beforeMount(){
     alert("Before mount");
  },
  mounted(){
    alert("Mounted")
  },
  beforeUpdate(){
    alert("Before update");
  },
  updated(){
      alert("updated")
  }
}
</script>
