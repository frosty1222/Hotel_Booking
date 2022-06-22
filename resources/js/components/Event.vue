<template>
<div class="header">
    <header-view/>
</div>
<div class="clearfix"></div>
<div class="event">
<legend>Events</legend>
<div class="event-text">
    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, <br>
            there live the blind texts.Separated they live in Bookmarksgrove right <br>
                at the coast of the Semantics, a large language ocean. <br>
</div>
<div class="event-list">
    <ul class="even-child">
        <div class="inner-event">
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
        </div>
    </ul>
    <div class="navigation">
        <div class="arrow-d">
            <pagination :data="event" @pagination-change-page="Event" />
        </div>
    </div>
</div>
</div>
<div class="footer">
    <footer-view/>
</div>
</template>

<script>
import  pagination from 'laravel-vue-pagination';
export default {
    components:{
             pagination
    },
      data: function(){
        return{
         clicktime:0,
         event:[],
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
    async Event(page = 1){
         await axios.get(`http://127.0.0.1:8000/api/event_data?page=${page}`).then(response => {
                this.event= response.data.data;
                //  console.log(this.room)
            }).catch(function(error){
                console.log(error);
            })
    },
    },
    created(){
        this.Event();
    },
    mounted(){
     this.Event();
    }
}
</script>
<style scoped>
   .navigation{
       width: 100%;padding:1em;height:auto;text-align:center;margin-top:-20px;
   }
   .navigation .arrow-d{width: 82%;margin-left: auto; margin-right: auto;}
   .arrow-d .parent-page{
       width:100%;text-align:center;
   }
   .inner-event{
       display:flex;
       width:100%;
       overflow-x:auto;
   }
   .parent-page .child-page{
       display: inline; margin:0 15px;background: #fff;border-radius:50%;padding:10px 15px;font-family: 'Courier New', Courier, monospace;
   }
   .child-page.active{
       background:orange;
       color:#fff;
   }
   .arrow-d .Previous{
       position: absolute;margin-left: -170px;color: #333;font-size: 13px; font-weight:900;cursor: pointer;
   }
   .arrow-d .Previous:hover{
       color:cyan;
   }
   .arrow-d .Next:hover{
       color:cyan;
   }
   .arrow-d .Next{
       position: absolute;margin-left: 162px;color: #333;font-size: 13px;font-weight:900;cursor: pointer;margin-top:-28px;
   }
   @media only screen and (max-width:650px){
   }
     /* upper mobile devices */
  @media only screen and (min-width:850px){
  }
  /* tablets */
  @media only screen and (min-width:1050px){

  }
  /* over 1200px */
  @media only screen and (max-width:1200px){

  }

</style>
