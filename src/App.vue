<template>
  <div>
    <student-form>

      {{ message }}

       <div slot="form-header">
         <h3>Student Form</h3>
       </div>
       <div slot="form-elements">
         <p><input type="text" placeholder="Enter name"/></p>
         <p><input type="email" placeholder="Enter email"/></p>
       </div>
       <div slot="form-button">
         <button v-on:click="submitDetails()">Submit</button>
       </div>
       <div slot="form-footer">
          <p>This is form footer</p>
       </div>
    </student-form>
  </div>
</template>

<script>

import Student from './components/Student.vue'

export default {
  components:{
     "student-form":Student
  },
  data () {
    return {
        message:"Passing data from parent to child"
    }
  },
  methods:{

  }
}
</script>
