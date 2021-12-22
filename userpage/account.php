<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    include 'layout/headerpage.php';
    ?>
  </head>
  <body>
  
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
 <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <?php include 'layout/headersectionpage.php';?>
  <!-- / header section -->
  <!-- menu -->
  <?php include 'layout/menupage.php';?>
  <!-- / menu -->  
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
  <img src="img/banner/img_login.png" style="width:100%;height:500px;" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Trang Đăng Nhập - Đăng Ký</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Trang chủ</a></li>                   
          <li class="active">Đăng nhập - Đăng ký</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Login</h4>
                 <form action="loginController.php" method="POST" class="aa-login-form">
                  <label for="">Tên đăng nhập<span>*</span></label>
                   <input type="text" placeholder="" name="username" id="username">
                   <label for="">Mật khẩu<span>*</span></label>
                    <input type="password" placeholder="" name="password" id="password">
                    <button type="submit" class="aa-browse-btn">Đăng nhập</button>
                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                    <p class="aa-lost-password"><a href="#">Quên mật khẩu?</a></p>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Register</h4>
                 <form action="registerController.php" method="POST" class="aa-login-form">
                    <label for="">Họ tên<span>*</span></label>
                    <input type="text" placeholder="" name="txt_hoten" id="txt_hoten" required="">
                    <label for="">Tên đăng nhập<span>*</span></label>
                    <input type="text" placeholder="" name="txt_username" id="txt_username" required>
                    <label for="">Email<span>*</span></label>
                    <input type="text" placeholder="" name="txt_email" id="txt_email" required>
                    <label for="">Mật khẩu<span>*</span></label>
                    <input type="password" placeholder="" name="txt_password" id="txt_password" required>
                    <label for="">Nhập lại mật khẩu<span>*</span></label>
                    <input type="password" placeholder="" name="txt_repassword" id="txt_repassword" required>
                    <label for="">Số điện thoại<span>*</span></label>
                    <input type="text" placeholder="" name="txt_phone" id="txt_phone" required >
                    <button type="submit" class="aa-browse-btn" id="bnt_xuly" name="bnt_xuly" value="register">Đăng ký</button>                    
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

  <!-- footer -->  
  <?php include 'layout/footerpage.php'; ?>
  <!-- / footer -->
  <!-- Login Modal -->  
  <?php include 'layout/loginmodalpage.php'; ?>
  <script >
    $(document).ready(function () {

        $("#bnt_xuly").click(function (e) {
            var pass = $('#txt_password').val();
            var repass = $('#txt_repassword').val();

            var email = $('#txt_email').val();
            var filter1 = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
            $abc = $.trim(email).match(filter1) ? true : false;

            var sdt = $('#txt_phone').val();
            var filter2 = /((09|03|07|08|05)+([0-9]{8})\b)/g;
            $phone = $.trim(sdt).match(filter2) ? true : false;
            
            
            if (!$abc) {
                alert("Email không hợp lệ");
                e.preventDefault();
            }else if(!$phone){
                alert("SDT không hợp lệ");
                e.preventDefault();
            }else if(pass != repass)
            {
                alert("Vui lòng nhập lại mật khẩu");
                e.preventDefault();
            }


        });

    });
    
  </script>

  </body>
</html>