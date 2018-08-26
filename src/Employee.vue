<template>
  <div>
      <h3>{{ employeeStatment }}</h3>
      <ul>
        <li v-for="emp in employees">{{ emp }}</li>
      </ul>
  </div>
</template>

<script>
export default {
  data () {
    return {
      employeeStatment: 'This is our company Employee message',
      employees: ["Employee 1","Employee 2","Employee 3"]
    }
  }
}
</script>

<style scoped>
  h3{
    color:blue;
    font-size:25px
  }
</style>
