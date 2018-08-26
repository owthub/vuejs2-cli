<template>
  <div>
  <footer>
      {{ FooterContent }}
  </footer>
  </div>
</template>

<script>
export default {

  data () {
    return {
      FooterContent: "Copyright @Online Web Tutor Developers 2018"
    }
  }
}
</script>

<style scoped>
footer{
    background: #3f51b5f2;
    padding: 7px;
    color: white;
    text-align: center;
}
</style>
