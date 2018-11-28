<template>
  <div id="margin-shift">

      <p>
          <router-link to = "/">Home</router-link>
          <router-link to = "/about">About</router-link>
          <router-link to = "/blogs">Show Blog</router-link>
          <router-link to = "/services">Services</router-link>
          <router-link to = "/contact">Contact</router-link>
      </p>

       <router-view></router-view>

  </div>
</template>

<script>

export default {

  data () {
    return {

    }
  }
}
</script>

<style scoped>
  #margin-shift{
     margin-left:10%;
  }
</style>
