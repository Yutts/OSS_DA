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
             <div class="card">
               <div class="card-body">
               <div class="card-title">
                <div class="col-sm-8" style="float: left;">
                   <a href="order.php" class="btn btn-info"><i class="fa  fa-mail-reply (alias)"></i>&nbsp; Trở lại</a>

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
                                        
                      <li><a href="order.php">Đơn hàng &nbsp;</a></li>
                      <li class="active">/ &nbsp; Thông tin chi tiết đơn hàng</li>
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
           <div class="card-title">Thông tin đơn hàng</div>
           <hr>
            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                   <?php
                   $id = $_GET['id'];
include 'layout/orderitem.php';
require '../utils/db.php';
$stmt = $conn->prepare("SELECT chitietdonhang.madh, masp, chitietdonhang.soluong, gia, phuongthuctt, donhang.tensp FROM chitietdonhang LEFT JOIN donhang On chitietdonhang.madh=donhang.madh where chitietdonhang.madh=:id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$dh= $stmt->fetch(PDO::FETCH_ASSOC);     
if($dh)    
{                 
                                  echo'  <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã đơn hàng</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_Madonhang" name="txt_Madonhang" class="form-control" disabled value="'.$dh["madh"].'">
                                    </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_Tensp" name="txt_Tensp"  class="form-control" disabled value="'.$dh["masp"].'"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_Tensp" name="txt_Tensp"  class="form-control" disabled value="'.$dh["tensp"].'"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số lượng</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_Soluong" name="txt_Soluong" class="form-control" disabled value="'.$dh["soluong"].'"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá tiền</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_Gia" name="txt_Gia" class="form-control" disabled value="'.gia($dh["gia"]).'"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phương thức thanh toán</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_Gia" name="txt_Gia" class="form-control" disabled value="'.$dh["phuongthuctt"].'"></div>
                                    </div>';
                                    

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
