<template>
  <div>

  <div id="content">
      <h2>Students List</h2>
      <ul>
        <li v-for="student in students">{{ student }}</li>
      </ul>

<h3>Simple message: {{ simpleMessage }}</h3>
<button v-on:click="UpdateMessage">Update message</button>

  </div>
  </div>
</template>

<script>
export default {
  props:{
  simpleMessage:{
    type: String
  },
     students:{
       type: Array
     }
  },
  data () {
    return {
      message:"This is simple message"
    }
  },
  methods:{
     UpdateMessage: function(){
         this.simpleMessage = "Simple message has been updated";
     }
  }
}
</script>
