<template>
          <div class="footer">
                <div class="image-area">
                        <div class="footer-line">
                            <span class="tex-medium">A Best Place To Stay. Reserve Now!</span>
                            <a href="">Reserve Now</a>
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
</template>
<script>
import VueSweetalert2 from 'vue-sweetalert2';
import Swal from 'sweetalert2';
window.Swal = Swal
export default {
    components:{
      Swal,
      VueSweetalert2
    },
    data(){
        return{
          save_email:{email:null},
          success:''
        }
    },
    method:{
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
        }
    },
    created(){

    }
}
</script>
<style scoped>

</style>
