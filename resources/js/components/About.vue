<template>
<div class="header">
    <header-view/>
</div>
<div class="clearfix"></div>
<div class="about_container">
    <legend>LeaderShip</legend>
    <div class="about">
        <div class="card">
            <ul class="about-flip-card-front">
              <li class="img">
                  <img src="images/xperson_1.jpg" alt="">
                  <span class="img-name"><b>Will Peters</b> <br> president</span>
              </li>
           </ul>
           <ul class="about-flip-card-back">
              <li class="text">
                   “Even the all-powerful Pointing has no control about the blind
                  texts it is an almost unorthographic life One day however a small line of blind text by the name
                  of Lorem Ipsum decided to leave for the far World of Grammar.”
              </li>
              <li class="child-bottom">
                  <span class="left-img"><img src="images/xperson_1.jpg" alt="" width="50"></span>
                  <span class="right-name">
                      <b>Will Peters</b> <br>President
                  </span>
              </li>
           </ul>
        </div>
        <div class="card">
            <ul class="about-flip-card-front">
              <li class="img">
                  <img src="images/xperson_2.jpg" alt="">
                  <span class="img-name"><b>Jane Williams</b> <br>  Business Manager</span>
              </li>
           </ul>
           <ul class="about-flip-card-back">
              <li class="text">
                  “Even the all-powerful Pointing has no control about the blind texts it
                  is an almost unorthographic life One day however a small line of blind text by
                  the name of Lorem Ipsum decided to leave for the far World of Grammar.”
              </li>
              <li class="child-bottom">
                  <span class="left-img"><img src="images/xperson_2.jpg" alt="" width="50"></span>
                  <span class="right-name">
                      <b>Jane Williams </b> <br>Business Manager
                  </span>
              </li>
           </ul>
        </div>
        <div class="card">
            <ul class="about-flip-card-front">
              <li class="img">
                  <img src="images/xperson_3.jpg" alt="">
                  <span class="img-name"><b>Jeffrey Neddery</b> <br> Marketing Director</span>
              </li>
            </ul>
            <ul class="about-flip-card-back">
              <li class="text">
                  “Even the all-powerful Pointing has no control about the blind texts it is an almost
                  unorthographic life One day however a small line
                  of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.”
              </li>
              <li class="child-bottom">
                  <span class="left-img">
                      <img src="images/xperson_3.jpg" alt="" width="50">
                  </span>
                  <span class="right-name">
                      <b>Jeffrey Neddery </b> <br> Marketing Director
                  </span>
              </li>
           </ul>
        </div>
    </div>
    <!-- slider -->
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
    <div class="history-container">
        <legend>History</legend>
        <div class="history">
            <span class="history-point">2021</span>
           <ul class="main-history-text">
               <label for="title">More Branches Worldwide</label>
               <li class="his_text">
                   Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                   there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                   A small river named Duden flows by their place and supplies it with the necessary regelialia.
                   It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
               </li>
           </ul>
            <span class="history-point">2011</span>
           <ul class="main-history-text">
               <label for="title">Company Full Blast</label>
               <li class="his_text">
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there live the blind texts.
                    Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
               </li>
           </ul>
            <span class="history-point">2008</span>
           <ul class="main-history-text">
               <label for="title">The Birth of the Company</label>
               <li class="his_text">
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there live the blind texts.
                    Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
               </li>
           </ul>
        </div>
    </div>
</div>
<div class="footer">
    <footer-view/>
</div>
</template>
<script>
let stop = 0;
export default {
    components:{
        stop,
    },
    data(){
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
         autoclick(){
           stop = setInterval(function(){
              $('#next').trigger('click');
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
    },
    created(){
     this.autoclick();
    }
}
</script>
<style scoped>
      .about_container{
          width:100%;height: auto;margin: auto;padding: auto;overflow:hidden;
      }
      .about_container legend{
         width:100%;text-align:center; font-size: 60px;font-family: "Playfair Display", times, serif;font-weight:800;border-bottom:none;padding-top:100px;padding-bottom:50px;
      }
      .about{
          width:82%;margin-left: auto;margin-right: auto;display: flex;padding-bottom:100px;
      }
      .card{
        width:33%;margin:5px;overflow:hidden;height:500px;padding-bottom:100px;display: block;position: relative;box-shadow: 5px 10px 18px #333;border-radius: 5px;
      }
      .card .about-flip-card-front{
         position:relative;height:500px;width:100%;margin:0px;overflow:hidden;padding:0px;
      }
      .about-flip-card-front .img{
          width:100%;height:100%;position: absolute;
      }
      .about-flip-card-front .img img{
          position:absolute;z-index:1; background-image: linear-gradient(#fff, #333);height:500px;
      }
      .about-flip-card-front .img .img-name{
          width:100%;height:auto;position: absolute;z-index: 2;bottom:0px;color:#fff;background:rgb(0, 183, 255);padding-left: 5px;
      }
      .card .about-flip-card-back{
         position:absolute;height: 100%;width:100%;top:0;left:0;z-index:2;text-align:center;background:#fff;opacity:0;visibility:hidden; transition: transform 0.8s;transform-style: preserve-3d;
      }
      .about-flip-card-back .text{
          width:100%;height:200px;padding:1em;text-align: left;font-size:20px;
      }
      .about-flip-card-back .child-bottom{
          width:100%;position: absolute;bottom: 0px;text-align: left;padding:1em;display: flex;
      }
      .about-flip-card-back .child-bottom .left-img img{
          border-radius: 50%;
      }
      .about-flip-card-back .child-bottom .right-name{
          line-height:1.5;color:#333;
      }
      .about-flip-card-front, .about-flip-card-back{
        position: absolute;width: 100%;height: 100%;-webkit-backface-visibility: hidden;backface-visibility: hidden;transform: rotate3d(180deg);
    }
.card:hover .about-flip-card-back{
    transform: rotateY(360deg);opacity: 1;visibility: visible;transition: 1s;
}
.card:hover .about-flip-card-front{
    opacity:0;visibility:hidden;transform: rotateY(360deg);transition: 1s;
}
.dot{
    width:auto;position: absolute;margin-top:-5%;z-index: 1;opacity: 1;margin-left: 40%;display:flex;height:auto;overflow: hidden;
}
.dot .active_but{
    margin-left: 0px;list-style: disc;color: #333;background: #fff;opacity: 1; font-size: 40px;font-weight: bold;height:auto;
}
.dot li{
    margin-left:25px;background: transparent;font-size:40px;list-style:circle;color:aquamarine;height: auto;opacity: 0.6;
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
/* history */
.history-container{
    width:100%;height:auto;margin:auto;padding:0px;
}
*{
    box-sizing: border-box;
}
.history-container .history{
    width:65%;height:auto;margin-left:auto;margin-right:auto;border-left: 2px solid #dee2e6;padding:3em 2em 2em;
}
.history .main-history-text{
    text-align: left;
}
.main-history-text label{
    width:100%;text-align: left;font-size: 30px;font-weight:normal;
}
.main-history-text .his_text{
    font-size:20px;opacity:0.5;
}
.history-point::before{
     content: "";list-style:circle;position:absolute;background:#dee2e6;border: 2px solid black;width:10px;height:10px;border-radius: 50%;opacity:0.5;margin-left:-35px; z-index:1;
}
/* mobile screen */
@media only screen and (max-width:650px){
  .about{display: block;}
  .card{width:100%;}
}
  /* upper mobile devices */
  @media only screen and (max-width:850px) and (min-width:650px){
      .card .about-flip-card-back{padding:0px;font-size:17px;}
      .about-flip-card-back .text{font-size:17px;}
  }
  /* tablets */
  @media only screen and (min-width:1050px){

  }
  /* over 1200px */
  @media only screen and (max-width:1200px){

  }

</style>
