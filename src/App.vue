<template>
  <div>
      <owt-header></owt-header>

      <owt-content></owt-content>

      <owt-footer></owt-footer>
  </div>
</template>

<script>

import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import Content from './components/Content.vue'

export default {
  components:{
    "owt-header": Header,
    "owt-footer": Footer,
    "owt-content": Content
  },
  data () {
    return {

    }
  }
}
</script>

<style scoped>

</style>
