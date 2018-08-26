<template>
  <div>
  <header>
      <h2>{{ headerMessage }}</h2>
      <p>{{ headerUrl }}</p>
  </header>
  </div>
</template>

<script>
export default {
  data () {
    return {
      headerMessage: "Welcome to Online Web Tutor Youtube Channel",
      headerUrl: "http://onlinewebtutorhub.blogspot.in/"
    }
  }
}
</script>

<style scoped>
header{
    background: #3f51b5f2;
    color: white;
    padding: 3px;
    text-align: center;
}
</style>
