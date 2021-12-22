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
          
 <div class="col-lg-12">

          

          
    
    
             
    <div class="container-fluid" style="float: left;">
      
      <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Thông tin cửa hàng</div>
           <hr>
            <form action="../controller/informationcontroller.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <?php
                                
require '../utils/db.php';
        $stmt = $conn->prepare("SELECT * FROM thongtincuahang");
       
              
        $stmt->execute();
        $information= $stmt->fetch(PDO::FETCH_ASSOC);
       
if($information)
{    
                                  echo'  <div class="row form-group">';
                                  echo'      <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên của hàng</label></div>';
                                  echo'      <div class="col-12 col-md-9"><input type="text" id="txt_tench" name="txt_tench" class="form-control" value="'.$information["tench"].'" readonly="">';
                                  echo'  </div>';
                                  echo'</div>';

                                  echo'<div class="row form-group">';
                                  echo'      <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>';
                                  echo'      <div class="col-12 col-md-9"><input type="text" id="txt_diachi" name="txt_diachi" class="form-control" value="'.$information["diachi"].'">';
                                  echo'  </div>';
                                  echo'</div>';

                                  echo'<div class="row form-group">';
                                  echo'      <div class="col col-md-3"><label for="text-input" class=" form-control-label">SĐT</label></div>';
                                  echo'      <div class="col-12 col-md-9"><input type="text" id="txt_sdt" name="txt_sdt" class="form-control" value="'.$information["sdt"].'">';
                                  echo'  </div>';
                                  echo'</div>';

                                  echo'<div class="row form-group">';
                                  echo'      <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>';
                                  echo'      <div class="col-12 col-md-9"><input type="text" id="txt_email" name="txt_email" class="form-control" value="'.$information["email"].'">';
                                  echo'  </div>';
                                  echo'</div>';


                                }

$conn = null;

      
                                  ?>
                                    
                                    <div class="card-footer">
                                <button type="submit" name="btn_productcatalog_group" value="update" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Save
                                </button>
                                <button type="reset" name="btn_reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                       
                                </form>

                            </div>
                            
         </div>
      </div>

      
    </div><!--End Row-->


      
    
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
      include 'layout/theme.php'
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
  
</body>
</html>
