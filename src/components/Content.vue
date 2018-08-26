<template>
  <div>
  <div id="content">
      <h3>Playlists</h3>
       <ul>
          <li v-for="playlist in playlists">
            <a v-bind:href="playlist.githublink" v-bind:title="playlist.title" target="_blank">
                 {{ playlist.name }}
            </a>
          </li>
       </ul>
  </div>
  </div>
</template>

<script>
export default {

  data () {
    return {
       playlists:[
         {
             name:"Wordpress Plugin Development",
             githublink:"https://github.com/owthub/wordpress-plugin",
             title:"Wordpress Plugin Development"
         },
         {
            name:"Wordpress Theme Development",
            githublink:"https://github.com/owthub/wordpress-theme",
            title:"Wordpress Theme Development"
          },
          {
             name:"Vue Js2 Development",
             githublink:"https://github.com/owthub/vuejs2",
             title:"Vue Js2 Development"
           },
           {
              name:"WP JSON Rest API Development",
              githublink:"https://github.com/owthub/wordpress-json-rest-api",
              title:"WP JSON Rest API Development"
            },
            {
               name:"WP JSON Rest API Development",
               githublink:"https://github.com/owthub/wordpress-json-rest-api",
               title:"WP JSON Rest API Development"
             }
       ]
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
