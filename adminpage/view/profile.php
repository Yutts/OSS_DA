<!DOCTYPE html>
<html lang="en">
<head>
   <?php
      include 'layout/headerpage.php';
  ?>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   
   <!-- end loader -->

<!-- Start wrapper-->
 <?php
    include 'layout/menu.php';
 ?>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
  <?php
      include 'layout/menutop.php';
  ?>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="row mt-3">
        
        <div class="col-lg-12">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link active"><i class="icon-note"></i> <span class="hidden-xs">Thông tin cá nhân</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    
                
                <div class="tab-pane" id="edit">
                    <form action="../controller/usercontroller.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                      <?php
                        
                        if(isset($_SESSION["maqtv"])){
                        require '../utils/db.php';



$stmt = $conn->prepare("SELECT * FROM quantrivien");
$stmt->execute();
$a =  $stmt->fetchALL(PDO::FETCH_ASSOC);
  
    foreach ($a as $row ) {
      if($row["email"]==$_SESSION["email"]){

                        echo'<div class="form-group row">';
                        echo'    <label class="col-lg-3 col-form-label form-control-label">Tên</label>';
                        echo'    <div class="col-lg-9">';
                        echo'        <input class="form-control" type="text" value="'.$row["tenqtv"].'" name="txt_name" id="txt_name">';
                        echo'    </div>';
                        echo'</div>';
                        
                        echo'<div class="form-group row">';
                        echo'    <label class="col-lg-3 col-form-label form-control-label">Email</label>';
                        echo'    <div class="col-lg-9">';
                         echo'       <input class="form-control" type="email" value="'.$row["email"].'"name="txt_email" id="txt_email">';
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
                         echo'       <input class="form-control" type="password" name="txt_pass" id="txt_pass" value="'.$_SESSION["password"].'" readonly>';
                        echo'    </div>';
                        echo'</div>';

                        echo'<div class="form-group row">';
                        echo'    <label class="col-lg-3 col-form-label form-control-label">REPassword</label>';
                        echo'    <div class="col-lg-9">';
                         echo'       <input class="form-control" type="password" name="txt_repass" id="txt_repass" >';
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
                        
                         <div class="card-footer">
                                <button type="submit" name="btn_user_group" value="update" class="btn btn-primary ">
                                    Lưu thông tin
                                </button>
                                <button type="submit" name="btn_user_group" value="reset" class="btn btn-success">
                                    Đổi mật khẩu
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>

  <!--start overlay-->
      <div class="overlay toggle-menu"></div>
    <!--end overlay-->
  
    </div>
    <!-- End container-fluid-->
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  
  <!--Start footer-->
  <footer class="footer">
      <?php
          include 'layout/footerpage.php';
                ?>
    </footer>
  <!--End footer-->
  
  <!--start color switcher-->
   <?php
      include 'layout/theme.php';
   ?><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <script >
    $("#txt_renewpass").change(function(){
          var p = $("#txt_newpass").val();
        if($(this).val() != p){
          alert("Nhập lại mật khẩu không chính xác ! Vui lòng kiểm tra lại .");
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
