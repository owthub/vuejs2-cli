import Vue from 'vue'
import App from './App.vue'
import VueResource from 'vue-resource'

Vue.use(VueResource)

Vue.mixin({
  filters:{
    makeUppercase: function(value){
       return value.toUpperCase();
    },
    contentSnippet: function(value){
        return value.slice(0,70)+"...";
    }
  }
});

/*Vue.filter("makeUppercase",function(value){
    return value.toUpperCase();
});

Vue.filter("contentSnippet",function(value){
    return value.slice(2,70);
});*/

Vue.directive("list",{
  bind(el,binding,vnode){
    if(binding.value=="wide"){
        el.style.maxWidth = "1200px";
    }
    if(binding.value=="narrow"){
       el.style.maxWidth = "600px";
    }
    if(binding.arg=="cyan"){
      //el.style.backgroundColor = "cyan";
    }
    if(binding.arg=="orange"){
      //el.style.backgroundColor = "orange";
    }
  }
});

Vue.directive('format',{
  bind(el,binding,vnode){
     el.style.color = "blue";
     //el.style.fontSize = "30px";
     //font-size
     // background-color: backgroundColor
  }
});

new Vue({
  el: '#app',
  render: h => h(App)
})
