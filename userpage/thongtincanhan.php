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


    <!-- Cart view section -->

    <section id="checkout">
        <div class="container" style="margin-left: 300px;">
            <div class="col-md-7">
                <div class="aa-myaccount-register">                 
                 <h1>Thông tin cá nhân</h1>
                 <hr>
                 <form action="usercontroller.php" method="POST" class="aa-login-form">
                    <?php
                       
                        if(isset($_SESSION["tenkh"])){
                        require 'utils/db.php';



$stmt = $conn->prepare("SELECT * FROM khachhang");
$stmt->execute();
$a =  $stmt->fetchALL(PDO::FETCH_ASSOC);
  
    foreach ($a as $row ) {
      if($row["makh"]==$_SESSION["makh"]){

                        echo'<div class="form-group row">';
                        echo'    <label class="col-lg-3 col-form-label form-control-label">Tên</label>';
                        echo'    <div class="col-lg-9">';
                        echo'        <input class="form-control" type="text" value="'.$row["tenkh"].'" name="txt_name" id="txt_name">';
                        echo'    </div>';
                        echo'</div>';
                        
                        echo'<div class="form-group row">';
                        echo'    <label class="col-lg-3 col-form-label form-control-label">Email</label>';
                        echo'    <div class="col-lg-9">';
                         echo'       <input class="form-control" type="email" value="'.$row["email"].'"name="txt_email" id="txt_email">';
                        echo'    </div>';
                        echo'</div>';
                        
                        echo'<div class="form-group row">';
                        echo'    <label class="col-lg-3 col-form-label form-control-label">Số điện thoại</label>';
                        echo'    <div class="col-lg-9">';
                         echo'       <input class="form-control" type="text" value="'.$row["sdt"].'"name="txt_sdt" id="txt_sdt">';
                        echo'    </div>';
                        echo'</div>';

                        echo'<div class="form-group row">';
                        echo'    <label class="col-lg-3 col-form-label form-control-label">Địa chỉ</label>';
                        echo'    <div class="col-lg-9">';
                         echo'       <input class="form-control" type="text" value="'.$row["diachi"].'"name="txt_diachi" id="txt_diachi">';
                        echo'    </div>';
                        echo'</div>';


                        echo'<div class="form-group row">';
                        echo'    <label class="col-lg-3 col-form-label form-control-label">Username</label>';
                        echo'    <div class="col-lg-9">';
                         echo'       <input class="form-control" type="text" value="'.$row["username"].'"name="txt_username" id="txt_username">';
                        echo'    </div>';
                        echo'</div>';
                      
                       
                        echo'<div class="form-group row">';
                        echo'    <label class="col-lg-3 col-form-label form-control-label">Password</label>';
                        echo'    <div class="col-lg-9">';
                         echo'       <input class="form-control" type="password" name="txt_pass" id="txt_pass" value="'.$_SESSION["password"].'" readonly> ';
                        echo'    </div>';
                        echo'</div>';

                        echo'<div class="form-group row">';
                        echo'    <label class="col-lg-3 col-form-label form-control-label">RePassword</label>';
                        echo'    <div class="col-lg-9">';
                         echo'       <input class="form-control" type="password" name="txt_repass" id="txt_repass">';
                        echo'    </div>';
                        echo'</div>';

                        echo'<div class="form-group row">';
                        echo'    <label class="col-lg-3 col-form-label form-control-label">New Password</label>';
                        echo'    <div class="col-lg-9">';
                         echo'       <input class="form-control" type="password" name="txt_newpass" id="txt_newpass">';
                        echo'    </div>';
                        echo'</div>';

                        

                        

                        echo'<div class="form-group row">';
                        echo'    <label class="col-lg-3 col-form-label form-control-label">ReNew Password</label>';
                        echo'    <div class="col-lg-9">';
                         echo'       <input class="form-control" type="password" "name="txt_renewpass" id="txt_renewpass">';
                        echo'    </div>';
                        echo'</div>';
                      }
                      }
                    }
                        ?>
                    <button type="submit" class="aa-browse-btn" id="bnt_xuly" name="bnt_xuly" value="update">Lưu</button>  
                    <button type="submit" class="aa-browse-btn" id="bnt_xuly" name="bnt_xuly" value="reset" style="margin-left: 310px;">Đổi mật khẩu</button>                   
                  </form>
                </div>
              </div>
        </div>

    </section>

    <!-- / Cart view section -->
  <!-- Subscribe section -->
  <!-- / Subscribe section -->
    <!-- footer -->
    <?php include 'layout/footerpage.php'; ?>
    <!-- / footer -->
    <!-- Login Modal -->
    <?php include 'layout/loginmodalpage.php'; ?>
    <script >
    $(document).ready(function () {

        $("#bnt_xuly").click(function (e) {
            

            var email = $('#txt_email').val();
            var filter1 = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
            $abc = $.trim(email).match(filter1) ? true : false;

            var sdt = $('#txt_sdt').val();
            var filter2 = /((09|03|07|08|05)+([0-9]{8})\b)/g;
            $phone = $.trim(sdt).match(filter2) ? true : false;
            
            
            if (!$abc) {
                alert("Email không hợp lệ");
                e.preventDefault();
            }else if(!$phone){
                alert("SDT không hợp lệ");
                e.preventDefault();
            }


        });

    });
    $("#txt_renewpass").change(function(){
          var p = $("#txt_newpass").val();
        if($(this).val() != p){
          alert("Nhập lại mật khẩu mới không chính xác ! Vui lòng kiểm tra lại .");
          $("#txt_renewpass").val("").parent().addClass("has-error");
        } else{
          $("#txt_renewpass").parent().removeClass("has-error");
        }
      })

     $("#txt_repass").change(function(){
          var p = $("#txt_pass").val();
        if($(this).val() != p){
          alert("Mật khẩu cũ không chính xác ! Vui lòng kiểm tra lại .");
          $("#txt_repass").val("").parent().addClass("has-error");
        } else{
          $("#txt_repass").parent().removeClass("has-error");
        }
      })
    
  </script>
</body>

</html>