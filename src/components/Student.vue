<template>
  <div>
    <button v-on:click="passData()">Click here to send data</button>
  </div>
</template>

<script>

import {EventBus} from '../main'

export default {

  data () {
    return {

    }
  },
  methods:{
      passData: function(){
         console.log("This is simple message passed");

         EventBus.$emit("emittedData","This is simple message passed");
      }
  }
}
</script>
