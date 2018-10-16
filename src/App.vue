<template>
  <div>
        <keep-alive>
            <component v-bind:is="component"></component>
        </keep-alive>


        <button v-on:click="component = 'student-form'">Student Form</button>
        <button v-on:click="component = 'employee-form'">Employee Form</button>

  </div>
</template>

<script>

import Student from './components/Student.vue'
import Employee from './components/Employee.vue'

export default {
  components:{
     "student-form":Student,
     "employee-form":Employee
  },
  data () {
    return {
        message:"",
        component:"student-form"
    }
  },
  methods:{

  }
}
</script>
