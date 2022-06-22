<template>
            <div class="head">
               <div class="head-scroll-bar">
                  <div id="logo">
                      <span class="left-logo">North Hotel</span>
                      <span class="right-icon" @click="clickBut()"><i class="fa fa-angle-double-right fa-3x"></i></span>
                      <span class="right-icon" @click="clickBut()"><i class="fa fa-close fa-3x" style="display:none;color:red;"></i></span>
                   </div>
                   <div class="welcome">welcome to 5 <i class="fa fa-star-o" style="color:yellow"></i> Hotel</div>
                   <div class="clearfix"></div>
                   <div class="bestword">A BEST PLAY TO STAY</div>
               </div>
               <div class="model">
                   <div class="main-list">
                       <ul class="list">
                            <li><router-link to="/">Home</router-link></li>
                            <li><router-link :to="{name:'room'}" :class="[{active: $route.name === 'room'}]">Rooms</router-link></li>
                            <li><router-link to="/about">About</router-link></li>
                            <li><router-link to="/event">Events</router-link></li>
                            <li><router-link to="/contact">Contact</router-link></li>
                            <!-- <li><router-link to="/reservation">Reservation</router-link></li> -->
                           <li v-for="a in auth" :key="a.index">
                            <a v-if="a.id == 1"  href="adminindex">AdminPage</a>
                            <a  v-else-if="a.id !=1"  href="adminindex">User View</a>
                            </li>
                       </ul>
                   </div>
               </div>
            </div>
            <div class="welcome-pic">
                <div class="contain">
                   <div class="left-text">
                          <div class="text">
                            <h1 class="title-welcome">Welcome!</h1>
                            <h3 class="child-text">
                               Far far away, behind the word mountains, far from the
                               countries Vokalia and Consonantia, there live the blind texts.
                               Separated they live in
                               Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                            </h3>
                          </div>
                          <div class="button-bottom">
                              <span class="learn-more">Learn More</span>
                              <span id="or">or</span>
                              <span class="see-video">See Video</span>
                          </div>
                    </div>
                    <div class="right-pic">
                        <img src="images/room.jpg" alt="">
                        <div class="child-pic">
                            <img src="images/girl.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
</template>
<script>
export default {
    data: function(){
        return{
         clicktime:0,
         title:"",
         auth:[],
        }
    },
    methods:{
     clickBut(){
          var a = this.clicktime++;
          if(a %2 ==0){
              $('.model').show();
              $('.fa-close').show();
              $('.fa-angle-double-right').hide();
          }else{
              $('.model').hide();
               $('.fa-close').hide();
              $('.fa-angle-double-right').show();
          }
        },
         getDataAuth(){
          axios.get('http://127.0.0.1:8000/get_auth').then(response=>{
              this.auth= response.data.data;
            //   console.log(this.auth);
          }).catch(function(error){
                alert(error);
          })
        }
    },
    created(){
      this.getDataAuth();
    }
}
</script>
<style scoped>

</style>
