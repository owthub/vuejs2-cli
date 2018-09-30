<template>
  <div>
     <h3>Employee: {{ message }}</h3>
  </div>
</template>

<script>

import {EventBus} from '../main'

export default {

  data () {
    return {
      message: "Default message"
    }
  },
  methods:{

  },
  mounted(){
      EventBus.$on("emittedData", data=>{
          this.message = data;
      });
  }
}
</script>
