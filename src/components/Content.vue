<template>
  <div>
  <div id="content">
      <h3>Playlists</h3>
{{ channelName }}  AND {{ name }}
       <ul>
          <li v-for="playlist in myplaylist">
            <a v-bind:href="playlist.githublink" v-bind:title="playlist.title" target="_blank">
                 {{ playlist.name }}
            </a>
          </li>
       </ul>

        <h2>Student List</h2>
        <ul>
            <li v-for="student in students">{{ student }}</li>
        </ul>
        <button v-on:click="deleteStudent">Delete Student</button>

       <h3>Simple message: {{ simpleMessage }}</h3>

       {{ call1() }}
  </div>
  </div>
</template>

<script>
export default {
  /*props:["name","myplaylist","channelName"],*/
  props:{
    simpleMessage:{
      type: String
    },
    students:{
      type: Array
    },
    name:{
       type: String,
       default: "Default name"
    },
    myplaylist:{
      type: Array
    },
    channelName:{
       type: String
    },
    author:{
      type:Object
    },
    isLearning:{
       type: Boolean
    }
  },
  data () {
    return {
      message:"This is simple message"
    }
  },
  methods:{
    call1: function(){
        console.log(this.channelName);
    },
    deleteStudent:function(){
         this.students.pop();
    }
  }
}
</script>

<style scoped>
#content{
  text-align: center;
}

#content ul{
    list-style: none;
}

#content ul li{
    font-size: 19px;
    padding: 6px;
    color: #38190e;
}

#content h3{
    text-align: center;
}
</style>
