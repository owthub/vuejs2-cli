export default{
  filters:{
    makeUppercase: function(value){
       return value.toUpperCase();
    },
    contentSnippet: function(value){
        return value.slice(0,70)+"...";
    }
  }
}
