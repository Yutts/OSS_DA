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


            <div class="col-lg-12">
             <div class="card">
               <div class="card-body">
               <div class="card-title">
                <div class="col-sm-8" style="float: left;">
                   <a href="comment.php" class="btn btn-info"><i class="fa  fa-mail-reply (alias)"></i>&nbsp; Trở lại</a>

                </div>
                
              </div>
             </div>
           </div>
          </div>

          
    
    <div class="col-lg-6" style="float: left;">
             <div class="card" >
               <div class="card-body">
               <div class="card-title">
                 <ol class="breadcrumb text-right">
                                        
                      <li><a href="comment.php">Bình luận &nbsp;</a></li>
                      <li class="active">/ &nbsp;Thông tin chi tiết bình luận</li>
                 </ol>
                   
               </div>
             </div>
           </div>
          </div>
             
    <div class="container-fluid" style="float: left;">
      
      <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Thông tin bình luận</div>
           <hr>
            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                         <?php
           $id = $_GET['id'];
require '../utils/db.php';
        $stmt = $conn->prepare("SELECT * FROM `binhluan` LEFT JOIN sanpham ON binhluan.masp = sanpham.masp where mabl=:id");
        $stmt->bindParam(':id', $id);
                // insert a row
        $stmt->execute();
        $bl= $stmt->fetch(PDO::FETCH_ASSOC);
       
if($bl)
{       
            echo'<form action="../controller/postcontroller.php?id='.$bl["mabl"].'" method="post" enctype="multipart/form-data" class="form-horizontal">';
                                    
                                    echo' <div class="row form-group">';
                                    echo'    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Tên khách hàng</label></div>';
                                    echo'    <div class="col-12 col-md-9"><textarea name="txt_tenbv" id="txt_tenbv"  class="form-control"  required>'.$bl["tenkh"].'</textarea></div>';
                                    echo'</div>';
                                    
                                    echo'<div class="row form-group">';
                                    echo'    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Nội dung</label></div>';
                                    echo'    <div class="col-12 col-md-9"><textarea name="txt_noidung" id="txt_noidung" rows="9" class="form-control"  required>'.$bl["noidung"].'</textarea></div>';
                                    echo'</div>';
                                
                                     echo'<div class="row form-group">';
                                    echo'    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Sản phẩm</label></div>';
                                    echo'    <div class="col-12 col-md-9"><textarea name="txt_tenbv" id="txt_tenbv"  class="form-control"  required>'.$bl["tensp"].'</textarea></div>';
                                    echo'</div>';
                                     }
?>
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
