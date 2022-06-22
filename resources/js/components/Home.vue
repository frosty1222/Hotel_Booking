<template>
    <div class="header">
    <header-view/>
    </div>
    <div class="home">
          <router-view></router-view>
    </div>
    <div class="footer">
    <footer-view/>
    </div>
</template>
<script>
export default {
    data: function(){
        return{
         clicktime:0,
        }
    },
    methods:{
     clickBut(){
          var a = this.clicktime++;
          if(a %2 ==0){
              $('.model').show();
          }else{
              $('.model').hide();
          }
        },
    },
    created(){

    }
}
</script>
<style scoped>

</style>
