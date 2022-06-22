<template>
<div class="container">
    <div class="row">
        <div class="main-view">
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
                            <a  v-else  href="adminindex">User View</a>
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
            <div class="clearfix"></div>
            <div class="room-suit">
                 <div class="contain-room">
                     <legend>Rooms & Suites</legend>
                     <div class="below-text">
                         Far far away, behind the word mountains, far from the countries <br>
                         Vokalia and Consonantia,there live the blind texts. Separated they<br>
                         live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                     </div>
                     <div class="below-pic">
                         <ul class="type_of_room">
                             <li v-for="a in room" :key="a.index">
                                 <div class="image-li">
                                     <img :src="'uploads/'+a.image" alt="">
                                 </div>
                                 <div class="room_type">{{a.type}}</div>
                                 <span class="price">{{a.price}}$ / PER NIGHT</span>
                                 <br>
                                 <a class="check" :href="'check_avail/'+a.id">Check Available</a>
                             </li>
                             <!-- <li>
                                 <div class="image-li">
                                    <img src="images/family_room.jpg" alt="">
                                 </div>
                                 <div class="room_type">Family Room</div>
                                  <span class="price">120$ / PER NIGHT</span>
                              </li>
                             <li>
                                 <div class="image-li">
                                     <img src="images/presidential_room.jpg" alt="">
                                 </div>
                                 <div class="room_type">Presidential Room</div>
                                  <span class="price">250$ / PER NIGHT</span>
                            </li> -->
                         </ul>
                     </div>
                 </div>
            </div>
            <div class="clearfix"></div>
            <div class="photo">
                  <div class="main-photo">
                      <legend class="photos">Photos</legend>
                      <p class="text-center">
                          Far far away, behind the word mountains, far from the countries Vokalia and <br>
                    Consonantia,there live the blind texts.Separated they live in Bookmarksgrove right at the <br>
                                 coast of the Semantics,a large language ocean.
                      </p>
                      <div class="carosel-photo">
                          <div class="slide_main">
                            <div class="slide active">
                                <img src="images/xslider-1.jpg" alt="photo">
                            </div>
                            <div class="slide">
                                <img src="images/xslider-2.jpg" alt="photo">
                            </div>
                            <div class="slide">
                                <img src="images/xslider-3.jpg" alt="photo">
                            </div>
                            <div class="slide">
                                <img src="images/xslider-4.jpg" alt="photo">
                            </div>
                            <div class="slide">
                                <img class="" src="images/xslider-5.jpg" alt="photo">
                            </div>
                            <div class="slide">
                                <img  src="images/xslider-6.jpg" alt="photo">
                            </div>
                            <div class="slide">
                                <img src="images/xslider-7.jpg" alt="photo">
                            </div>
                          </div>
                          <ul class="dot">
                                 <li class="active_but"></li>
                                 <li></li>
                                 <li></li>
                                 <li></li>
                                 <li></li>
                                 <li></li>
                                 <li></li>
                           </ul>
                           <span id="pre" @click="previous()"><i class="fa fa-angle-left fa-5x"></i></span>
                           <span id="nexts" @click="nextimage()"><i class="fa fa-angle-right fa-5x" v-on:click="stopinternal()"></i></span>
                      </div>
                  </div>
            </div>
            <div class="restaurant">
                <div class="main-head">
                    <div class="restaurant-main">
                        <legend>Our Restaurant Menu</legend>
                        <div class="text-res">
                            Far far away, behind the word mountains, far from the <br>
                            countries Vokalia and Consonantia,there live the blind texts.<br>
                              Separated they live in Bookmarksgrove right at the coast <br>
                                    of the Semantics,a large language ocean.
                        </div>
                        <div class="clearfix"></div>
                        <div class="menu-area">
                         <div class="dish-area">
                             <ul class="type_of_food">
                                  <li id="main"  @click="dish_display_main()">Mains</li>
                                  <li id="dessert"  @click="dish_display_dessert()">Desserts</li>
                                  <li id="drink"   @click="dish_display_drink()">Drinks</li>
                             </ul>
                             <div class="dish-display-main" >
                                        <ul class="menu-main" v-for="a in main_dish" :key="a.index">
                                            <li class="image">
                                                <img :src="'uploads/'+a.image"  alt="">
                                                <br>
                                            </li>
                                            <span class="price">Price:{{a.sale_price}}$ <del>{{a.price}}$</del></span>
                                            <br>
                                            <span class="name">Name:{{a.name}}</span>
                                            <br>
                                            <br>
                                            <a v-if="check_id !=0 " :href="'get_meal/'+a.id">order now</a>
                                            <a href="#" v-else onclick="return confirm('you have not booked room yet ! please make you reservation before you order the meal')">order now</a>
                                        </ul>
                             </div>
                             <div class="dish-display-dessert" >
                                        <ul class="menu-main" v-for="a in dessert" :key="a.index">
                                            <li class="image">
                                                <img :src="'uploads/'+a.image" alt="">
                                                <br>
                                            </li>
                                            <span class="price">Price:{{a.sale_price}}$ <del>{{a.price}}$</del></span>
                                            <br>
                                            <span class="name">Name:{{a.name}}</span>
                                            <br>
                                            <br>
                                            <a v-if="check_id !=0 " :href="'get_meal/'+a.id">order now</a>
                                            <a href="#" v-else onclick="return confirm('you have not booked room yet ! please make you reservation before you order the meal')">order now</a>
                                        </ul>
                             </div>
                             <div class="dish-display-drink" >
                                        <ul class="menu-main" v-for="a in drink" :key="a.index">
                                            <li class="image">
                                                <img :src="'uploads/'+a.image" alt="">
                                            </li>
                                            <span class="price">Price:{{a.sale_price}}$ <del>{{a.price}}$</del></span>
                                            <br>
                                            <span class="name">Name:{{a.name}}</span>
                                            <br>
                                            <br>
                                            <a v-if="check_id !=0 " :href="'get_meal/'+a.id">order now</a>
                                            <a href="#" v-else onclick="return confirm('you have not booked room yet ! please make you reservation before you order the meal')">order now</a>
                                        </ul>
                             </div>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="people-comment">
                <div class="main-says">
                    <legend>People Says</legend>
                    <div class="list-comment">
                      <ul class="comment-child">
                          <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <li class="comments">
                                    <img src="images/xperson_1.jpg" alt="" id="img">
                                    <br>
                                        <p>
                                        A small river named Duden flows by their place <br>
                                        and supplies it with the necessary<br>
                                        regelialia. It is a paradisematic country,<br>
                                            in which roasted parts of <br>
                                            sentences fly into your mouth.”
                                        </p>
                                    <em>— Jean Smith</em>
                                </li>
                                </div>
                                <div class="item">
                                      <li class="comments">
                                        <img src="images/xperson_2.jpg" alt="" id="img">
                                        <br>
                                        <p>
                                            “Even the all-powerful Pointing has no control about the blind texts <br>
                                                it is an almost unorthographic life One day <br>
                                                however a small line of blind text  by the name of <br>
                                            Lorem Ipsum decided to leave for the far World of Grammar.”
                                        </p>
                                        <em>— John Doe</em>
                                    </li>
                                </div>
                                <div class="item">
                                       <li class="comments">
                                        <img src="images/xperson_3.jpg" alt="" id="img">
                                        <br>
                                        <p>
                                            “When she reached the first hills of the Italic Mountains, she had a last view <br>
                                                        back on the skyline of her hometown Bookmarksgrove, <br>
                                                        the headline of Alphabet Village and the <br>
                                                        subline of her own road, the Line Lane.
                                        </p>
                                        <em>— John Doe</em>
                                    </li>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                      </ul>
                      <!-- <div class="arrow">
                          <span id="pre-arrow" @click="preArrow()"><i class="fa fa-angle-left fa-5x"></i></span>
                          <span id="next-arrow" @click="nextArrow()"><i class="fa fa-angle-right fa-5x"></i></span>
                      </div> -->
                    </div>
                </div>
            </div>
            <div class="event">
                <legend>Events</legend>
                <div class="event-text">
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, <br>
                         there live the blind texts.Separated they live in Bookmarksgrove right <br>
                              at the coast of the Semantics, a large language ocean. <br>
                </div>
                <div class="event-list">
                  <ul class="even-child">
                          <li class="events"  v-for="(item,index) in event.data" :key="index">
                        <div class="img">
                            <img :src="'uploads/'+item.image" alt="">
                        </div>
                        <br>
                        <br>
                            <span class="calendar">{{item.time}}</span>
                            <br>
                            <span class="heading">
                                {{item.name}}
                            </span>
                            <br>
                            <br>
                            <span class="even-text">
                                {{item.content}}
                                <br>
                            <a href="">read more</a>
                        </span>

                    </li>
                  </ul>
                  <div class="navigation">
                        <div class="arrow-d">
                            <pagination :data="event" @pagination-change-page="Event" />
                        </div>
                       </div>
                </div>
            </div>
            <div class="footer">
                <div class="image-area">
                        <div class="footer-line">
                            <span class="tex-medium">A Best Place To Stay. Reserve Now!</span>
                            <a href="admin/category/available">Reserve Now</a>
                        </div>
                </div>
                <div class="clearfix"></div>
                <div class="main-footer">
                    <div class="inner-footer">
                        <ul class="footer-list">
                            <li class="listed">About Us</li>
                            <li class="listed">Terms & Conditions</li>
                            <li class="listed">Privacy Policy</li>
                            <li class="listed">Room</li>
                        </ul>
                       <ul class="footer-list">
                           <li class="listed">The Rooms & Suites</li>
                           <li class="listed">About Us</li>
                           <li class="listed">Contact Us</li>
                           <li class="listed">Restaurant</li>
                       </ul>
                       <ul class="footer-list">
                           <li class="listed">
                               <i class="fas fa-map-marker-alt">Address:
                                   <br>
                                   198 West 21th Street,
                                   Suite 721 New York NY 10016
                               </i>
                               <br>
                               Phone:
                                (+1) 435 3533
                               <br>
                               Email:
                                   info@domain.com
                           </li>

                       </ul>
                       <ul class="footer-list">
                           <li class="listed">
                               <span class="heading-letter">Sign up for our newsletter</span>
                               <input type="email" name="email" v-model="save_email.email" placeholder="Email...">
                               <button type="submit" class="btn btn-default" v-on:click="Save_email">Send</button>
                           </li>
                       </ul>
                    </div>
                    <div class="clearfix"></div>
                     <div class="copy-right">
                    <ul id="copy-right">
                        <li class="copy-text">Copyright ©2022 All rights reserved | This template is made with  by Colorlib</li>
                        <li class="social">
                           <span><i class="fa fa-facebook"></i></span>
                           <span><i class="fa fa-twitter"></i></span>
                           <span><i class="fa fa-linkedin"></i></span>
                           <span><i class="fa fa-google"></i></span>
                        </li>
                    </ul>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
</template>
<script>
let stop =0;
import VueSweetalert2 from 'vue-sweetalert2';
import Swal from 'sweetalert2';
window.Swal = Swal
import  pagination from 'laravel-vue-pagination';
export default {
    components:{
       pagination,
       VueSweetalert2,
       Swal,
       stop,
    },
    data: function(){
        return{
         clicktime:0,
         baseURL:'',
         room:[],
         auth:[],
         main_dish:[],
         drink:[],
         dessert:[],
         event:[],
         success:'',
         save_email:{email:null},
         check_id:'',
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
        autoclick(){
              stop =  setInterval(function(){
                    $('#nexts').trigger('click')
               },3000);
        },
        stopinternal(){
           clearInterval(stop);
        },
        nextimage(){
            var actives = $('.active').next();
            var currentlocation = $('.active_but').index()+1;
            if(actives.length !=0){
                $('.active').addClass('faded-left').one('webkitAnimationEnd',function(event){
                    $('.faded-left').removeClass('faded-left').removeClass('active');
                });
                actives.addClass('active').addClass('faded-right').one('webkitAnimationEnd',function(event){
                    $('.faded-right').removeClass('faded-right');
                });
                $('.dot li').removeClass('active_but');
                $('.dot li:nth-child('+(currentlocation+1)+')').addClass('active_but');
            }else{
                 $('.active').addClass('faded-left').one('webkitAnimationEnd',function(event){
                    $('.faded-left').removeClass('faded-left').removeClass('active');
                });
                $('.slide:first-child').addClass('active').addClass('faded-right').one('webkitAnimationEnd',function(event){
                    $('.faded-right').removeClass('faded-right');
                });
                $('.dot li').removeClass('active_but');
                $('.dot li:nth-child(1)').addClass('active_but');
            }
        },
        previous(){
              var actives = $('.active').next();
              var currentlocation = $('.active_but').index()+1;
            if(actives.length !=0){
                $('.active').addClass('faded-rights').one('webkitAnimationEnd',function(event){
                    $('.faded-rights').removeClass('faded-rights').removeClass('active');
                });
                actives.addClass('active').addClass('faded-lefts').one('webkitAnimationEnd',function(event){
                    $('.faded-lefts').removeClass('faded-lefts');
                });
                 $('.dot li').removeClass('active_but');
                $('.dot li:nth-child('+(currentlocation+1)+')').addClass('active_but');
            }else{
                 $('.active').addClass('faded-rights').one('webkitAnimationEnd',function(event){
                    $('.faded-rights').removeClass('faded-rights').removeClass('active');
                });
                $('.slide:first-child').addClass('active').addClass('faded-lefts').one('webkitAnimationEnd',function(event){
                    $('.faded-lefts').removeClass('faded-lefts');
                });
                  $('.dot li').removeClass('active_but');
                  $('.dot li:nth-child(7)').addClass('active_but');
            }
           //active_nut
        },
        dish_display_drink(){
           $('.dish-display-drink').show();
           $('.dish-display-dessert').hide();
           $('.dish-display-main').hide();
            $('.dish-display-drink').css('visibility','visible');
        },
        dish_display_dessert(){
            $('.dish-display-drink').hide();
            $('.dish-display-dessert').show();
            $('.dish-display-main').hide();
            $('.dish-display-dessert').css('visibility', 'visible');
        },
        dish_display_main(){
            $('.dish-display-drink').hide();
            $('.dish-display-dessert').hide();
            $('.dish-display-main').show();
        },
        getDatalimit(){
               axios.get('http://127.0.0.1:8000/api/room_data_limit').then(response => {
                this.room = response.data.data;
                //  console.log(this.room)
            }).catch(function(error){
                console.log(error);
            })
        },
        mainDish(){
            axios.get('http://127.0.0.1:8000/api/main_dish').then(response => {
                this.main_dish = response.data.main_dish;
                //  console.log(this.room)
            }).catch(function(error){
                console.log(error);
            })
        },
        Drink(){
            axios.get('http://127.0.0.1:8000/api/drink').then(response => {
                this.drink = response.data.drink;
                //  console.log(this.room)
            }).catch(function(error){
                console.log(error);
            })
        },
        Dessert(){
            axios.get('http://127.0.0.1:8000/api/dessert').then(response => {
                this.dessert = response.data.dessert;
                //  console.log(this.room)
            }).catch(function(error){
                console.log(error);
            })
        },
        async Event(page = 1){
         await axios.get(`http://127.0.0.1:8000/api/event_data?page=${page}`).then(response => {
                this.event= response.data.data;
                //  console.log(this.room)
            }).catch(function(error){
                console.log(error);
            })
        },
        getDataAuth(){
          axios.get('http://127.0.0.1:8000/get_auth').then(response=>{
              this.auth= response.data.data;
            //   console.log(this.auth);
          }).catch(function(error){
                alert(error);
          })
        },
        Save_email(){
            axios.post('http://127.0.0.1:8000/save_email',this.save_email).then(response=>{
                this.success = response.data.success;
                new Swal({
                    title:this.success,
                    icon: 'success',
                    showCancelButton: true,
                    confirmButtonText: 'Close',
                  })
            }).catch(function(error){
                console.log(error);
            })
        },
        check_room_Id(){
            axios.get('http://127.0.0.1:8000/check_Id').then(response=>{
                this.check_id = response.data.room_id;
                console.log(this.check_id);
            }).catch(function(error){
                alert(error);
            })
        }
    },
    created(){
      this.dish_display_main();
      this.getDatalimit();
      this.mainDish();
      this.Drink();
      this.Dessert();
      this.Event();
      this.getDataAuth();
      this.autoclick();
      this.check_room_Id();
    },
    mounted(){
        this.Event();
    }
}
</script>
<style lang="css" scoped>
.dot{
    width:auto;
    position: absolute;
    margin-top:-5%;
    z-index: 1;
    opacity: 1;
    margin-left: 40%;
    display:flex;
    height:auto;
    overflow: hidden;
}
.dot .active_but{
    margin-left: 0px;
    list-style: disc;
    color: #333;
    background: #fff;
    opacity: 1;
    font-size: 40px;
    font-weight: bold;
    height:auto;
}
.dot li{
    margin-left:25px;
    background: transparent;
    font-size:40px;
    list-style:circle;
    color:aquamarine;
    height: auto;
    opacity: 0.6;
}
.faded-left{
    animation: faded-left 1s forwards;
}
.faded-lefts{
    animation: faded-lefts 1s backwards;
}
@keyframes faded-left{
    from {
        transform:translateX(0%);
    }
    to{
        transform:translateX(100%);
    }
}
@keyframes faded-lefts{
    from {
        transform:translateX(100%);
    }
    to{
        transform:translateX(0%);
    }
}
.faded-right{
    animation: faded-right 1s forwards;
}
.faded-rights{
    animation: faded-rights 1s backwards;
}
@keyframes faded-rights{
    from {
        transform:translateX(0%);
    }
    to{
        transform:translateX(-100%);
    }
}
@keyframes faded-right{
    from {
        transform:translateX(-100%);
    }
    to{
        transform:translateX(0%);
    }
}
/* .item{
    width:100%;
} */
</style>
