<template>
  <div>
     <student></student>

     <employee></employee>
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

    }
  },
  methods:{

  }
}
</script>
