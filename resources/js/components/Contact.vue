<template>
<div class="header">
    <header-view/>
</div>
<div class="clearfix"></div>
<div class="contact-container">
     <div class="main-contact">
         <div class="contact">
            <div class="left-contact-form">
            <form action="#" @submit.prevent="getPostContact">
                <div class="form-group">
                    <div class="left-name">
                        <label for="">Name</label><br>
                        <input type="text" name="name" v-model="contact.name"  placeholder="Name...">
                    </div>
                    <div class="right-phone">
                        <label for="">Phone</label> <br>
                        <input type="text" name="phone" v-model="contact.phone" placeholder="Phone...">
                    </div>
                </div>
                <div class="form-email">
                    <label for="">Email</label> <br>
                    <input type="text" name="email" v-model="contact.email" placeholder="Email...">
                </div>
                <div class="message">
                    <label for="">Message</label> <br>
                    <textarea name="message" v-model="contact.message"></textarea>
                </div>
                <div class="form-button">
                    <button type="submit">Send Message</button>
                </div>
            </form>
        </div>
        <div class="right-contact-infor">
            <span class="name-hastag">ADDRESS:</span>
            <br>
            <br>
            <span class="infor">
                98 West 21th Street, Suite 721 New York NY 10016
            </span><br>
            <span class="name-hastag">PHONE:</span>
            <br>
            <br>
            <span class="infor">
                (+1) 234 4567 8910
            </span><br>
            <span class="name-hastag">EMAIL:</span>
            <br>
            <br>
            <span class="infor">
                info@domain.com
            </span>
        </div>
         </div>
     </div>
</div>
<div class="footer">
    <footer-view/>
</div>
</template>

<script>
import VueSweetalert2 from 'vue-sweetalert2';
import Swal from 'sweetalert2';
export default {
    components:{
     VueSweetalert2,
     Swal
    },
   data: function(){
        return{
         clicktime:0,
         contact:{
             name:null,phone:null,email:null,message:null,
         },
         success:'',
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
        getPostContact(){
            // Send a POST request
            axios.post('http://127.0.0.1:8000/api/contact_post',this.contact)
            .then(response=>{
                this.success = response.data.success
                new Swal({
                    title:this.success,
                    icon: 'success',
                    showCancelButton: true,
                    confirmButtonText: 'Close',
                  })
                if(this.success !=''){
                    this.$router.push('/');
                }
            }).catch(function(error){
                console.log(error);
        })
      }
    },
    created(){
    }
}
</script>

<style scoped>
   .contact-container{
       width: 100%;margin: auto;padding:0px;
   }
   .contact-container .main-contact{
       width:82%;padding-top:50px;margin-left: auto;margin-right: auto;
   }
   .main-contact .contact{
       display: flex;padding-bottom: 100px;
   }
   .contact .left-contact-form{
       width:50%;border:1px solid #dee2e6;padding:2em;
   }
   .left-contact-form form{
       width:100%;
       height:auto;
       margin-left: auto;margin-right: auto;
   }
   form .form-group{
       width:100%;height:auto;display:flex;
   }
   .form-group .left-name,label{
       width:50%;
       margin:5px;
   }
   .left-name input{
       width:100%;margin:5px;height:50px;
   }
   .form-group .right-phone{
       width:50%;
       margin:5px;
   }
  .right-phone input{
   width:100%;margin:5px;height:50px;
  }
   .contact .right-contact-infor{
       width:50%;padding:4em;
   }
   .form-email{
       width:100%;
   }
   .form-email input{
       width:98%;height:50px;margin:10px;
   }
  form input{
       box-shadow: none !important;border:2px solid orange;border-radius:3px;
   }
   .message {
       width:100%;margin:10px;
   }
   .message textarea{
       border:2px solid orange;border-radius:3px;
   }
   form .form-button{
       width:100%;margin:10px;text-align:left;
   }
   .form-button button{
       border-radius: 50px;border:none;background:orange;color:#fff;padding:5px 15px;
   }
  .right-contact-infor .name-hastag{
      font-size: 20px;font-weight:900; text-transform: uppercase;padding-bottom:20px;font-family: "Playfair Display", times, serif;
  }
  .right-contact-infor .infor{
      width: 100%; text-align: left;font-size:30px;font-weight: normal;font-family: "Playfair Display", times, serif;padding-top:1em;padding-bottom:1em;opacity:0.7;
  }
   .message textarea{width: 98%;height: 200px;}
  @media only screen and (max-width:650px){
    .main-contact .contact{display:block}
    .contact .left-contact-form {width: 100%;border: 1px solid #dee2e6;padding: 1em;}
    .contact .right-contact-infor{width: 100%;padding: 2em;}
    .message textarea{width: 98%;height: 200px;}
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
