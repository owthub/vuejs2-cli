<template>
  <div>
     <h3>{{ information }}</h3>
     <ul>
        <li v-for="st in students">{{ st }}</li>
     </ul>
  </div>
</template>

<script>
export default {
  data () {
    return {
      information: 'Welcome to Online Web Tutor Channel',
      students:["Rahul","Rakesh","Sanjay","Aman"]
    }
  }
}
</script>

<style scoped>
  h3{
    color:red;
    font-size:30px;
  }
</style>
