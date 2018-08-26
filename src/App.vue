<template>
  <div>
  <h3>This is App vue page</h3>
    <student></student>
    <employee></employee>
  </div>
</template>

<script>

import Employee from './Employee.vue'

export default {
components:{
  employee: Employee
},
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<style scoped>
  h3{
    color:yellow;
    font-size:45px
  }
</style>
