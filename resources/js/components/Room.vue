<template>
<div class="header">
    <header-view/>
</div>
<div class="clearfix"></div>
<div class="room_container">
     <div class="room">
        <ul class="room-list" >
            <li class="room-list-item" v-for="a in room" :key="a.index">
                <div class="img"><img :src="'uploads/'+a.image" alt=""></div>
                <br>
                <span class="room_name">
                    {{a.type}}
                </span>
                <br>
                <span class="room_price">
                    {{a.price}}$ /Per Night
                </span>
                <br>
                 <router-link :to="'/reservation/'+a.id">Book Now</router-link>
            </li>
        </ul>
     </div>
     <div class="clearfix"></div>
     <div class="offer-container">
         <div class="offer">
             <legend>Great Offers</legend>
             <div class="offer-text">
                 Far far away, behind the word mountains, far from the <br>
                  countries Vokalia and Consonantia, there live the blind texts. <br>
                   Separated they live inBookmarksgrove right at the coas <br>
                    of the Semantics,a large language ocean.
             </div>
             <span style="width:100%;background-color:aqua;padding:0 60px;margin-top:-30px;margin-left:auto;margin-right:auto;color:#fff;text-transform:capitalize;font-size:20px;">sale time up to 17/5/2022!</span>
             <div class="offer-item">
                <ul class="offer-main" v-for="a in discount" :key="a.index">
                    <li class="offer-left-item">
                         <img :src="'uploads/'+a.image" alt="">
                    </li>
                    <li class="offer-right-item">
                         <div class="offer-price">
                             <div class="left-pr">{{a.sale_price}}$</div>
                             <div class="right-type">/Per Night</div>
                         </div>
                         <span class="offer-room-name">
                             {{a.type}}
                         </span>
                         <div class="offer-text">
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts. Separated they
                            live in Bookmarksgroveright at the coast of the Semantics,a large language ocean.
                         </div> <br>
                         <router-link :to="'/reservation/'+a.id">Book Now</router-link>
                    </li>
                </ul>
                <ul class="offer-main" v-for="a in discount2" :key="a.index">
                    <li class="offer-right-item">
                         <div class="offer-price">
                             <div class="left-pr">{{a.sale_price}} $</div>
                             <div class="right-type">/Per Night</div>
                         </div>
                         <span class="offer-room-name">
                             {{a.type}}
                         </span>
                         <div class="offer-text">
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts. Separated they
                            live in Bookmarksgroveright at the coast of the Semantics,
                            a large language ocean.
                         </div><br>
                         <router-link :to="'/reservation/'+a.id">Book Now</router-link>
                    </li>
                    <li class="offer-left-item">
                         <img :src="'uploads/'+a.image" alt="">
                    </li>
                </ul>
             </div>
         </div>
     </div>
</div>
<div class="footer">
    <footer-view/>
</div>
</template>
<script>
import axios from 'axios';
export default {
    data(){
        return{
            tittle:'',
            room:[],
            discount:[],
            discount2:[],
        }
    },
    methods: {
        getDataRoom(){
            axios.get('http://127.0.0.1:8000/api/room_data').then(response => {
                this.room = response.data.data;
                //  console.log(this.room)
            }).catch(function(error){
                console.log(error);

            })

       },
       getDiscount(){
            axios.get('http://127.0.0.1:8000/api/room_discount').then(response => {
                this.discount = response.data.discount;
                //  console.log(this.room)
            }).catch(function(error){
                console.log(error);
            })
       },
       getDiscount2(){
            axios.get('http://127.0.0.1:8000/api/room_discount2').then(response => {
                this.discount2 = response.data.discount2;
                 console.log(this.discount2)
            }).catch(function(error){
                console.log(error);
            })
       }
    },
    created(){
        this.getDataRoom();
        this.getDiscount();
        this.getDiscount2();
    }
}
</script>
<style scoped>
.clearfix{
    clear:both;
}
  .room_container {
      width:100%; height:auto;padding:0px;margin:auto;
  }
  .room_container .room{
      width:82%;height:auto;margin-left: auto; margin-right: auto;
  }
  .room .room-list{
      display:inline-block;margin-left: auto; margin-right: auto;  padding-top: 100px;width:100%;
  }
  .room-list .room-list-item{
      width:32%;margin:5px;overflow:hidden;height:auto;text-align: center;padding-bottom: 10px;float:left;
  }
 .room-list-item .img{
        width: 400px;overflow: hidden;height: 250px;transition:all 0.3s ease-in-out;
}
    .room-list-item .img img{
    width: 100%;height: auto;
    }
  .room-list-item .img img:hover{
      cursor: pointer;transform: scale(1.1);
  }
  .room-list-item .room_name{
      width:100%; margin:5px;font-size: 30px;font-weight: 800;
  }
  .room-list-item .room_price{
      width:100%;font-size:20px;color:orange;margin-bottom:50px;
  }
  .room-list-item a{
      text-decoration: none;color:black;background: #fff;border: 1px solid orange; border-radius: 50px;padding:3px 10px;
  }
.room-list-item a:hover{
    background: orange; cursor: pointer;
}
.offer-container{
    width:100%;height:auto;padding-bottom:50px;background:#F2F4FB;
}
.offer-container .offer{
    width: 82%;margin-left:auto;margin-right:auto;height:auto;
}
.offer legend{
    width: 100%;text-align: center;font-family: "Playfair Display",times,serif;font-size: 50px; font-weight: 600;border-bottom:none;padding-top:100px;
}
.offer .offer-text{
    width:100%;font-size:20px;padding-bottom: 50px;text-align:center;
}
.offer .offer-item{
    width:100%;height:auto;padding-bottom:70px;margin-left: auto;margin-right:auto;
}
.offer-item .offer-main{
    width:100%;display:flex; margin-left: auto; margin-right: auto;overflow: hidden;height:500px;
}
.offer-main .offer-left-item{
    width:50%;overflow: hidden;cursor: pointer;
}
.offer-left-item img{
    width:100%;height:500px;
}
.offer-main .offer-right-item{
    width:50%;overflow: hidden; padding:4em; background:#fff;text-align:left;cursor: pointer;
}
.offer-price{
    display: flex; width:100%;
}
.offer-price .left-pr{
    font-size: 50px; color:orange;font-weight:900;
}
.offer-price .right-type{
    font-size:20px;line-height:5;
}
.offer-room-name{
    font-size:25px;font-weight: 700; width:100%;text-align:center;
}
.offer-right-item a{
    padding:10px 25px;border:1px solid #ccc;border-radius: 50px;text-decoration: none;color:black;font-size:20px;
}
.offer-right-item a:hover{
    background:orange;}
/* responsive area */
@media only screen and (max-width:650px){
     /*room responsive*/
   .room_container .room{
    margin-bottom: 50px;
   }
   .room .room-list{
    display: block;padding-top: 100px;
   }
   .room-list .room-list-item[data-v-cd69db74] {
    width: 90%;
  }
  .room_container{
      width:100%;
  }
  .offer legend{
      font-size: 40px;
  }
  .room-list-item .room_name{font-size: 20px;}
  .offer .offer-text{font-size:11px;}
  .offer-main .offer-left-item{width:80%;}
  .offer-main .offer-right-item{width:20%;padding:3px;}
.offer-item .offer-main{height:350px;padding-left:0px;}
.offer-container .offer{width:95%}
.offer-price .left-pr{font-size:13px;}
.offer-room-name {font-size: 10px;font-weight: 500;overflow: hidden;}
.offer-price .right-type{font-size:10px;line-height:1;}
}
  /* upper mobile devices */
  @media only screen and (max-width:850px) and (min-width:650px){
      .offer-price .right-type{font-size: 20px;line-height:1;}
      .offer .offer-text{font-size: 18px;text-align:center;}
      .offer-price .left-pr{font-size: 32px;}
      .offer-main .offer-text{font-size: 18px;text-align:left;}
  }
  /* tablets */
  @media only screen and (max-width:1050px) and (min-width:850px){
        .offer-main .offer-text{font-size: 18px;text-align:left;}
  }
  /* over 1200px */
  @media only screen and (max-width:1200px) and (min-width:1050px){

  }

</style>
