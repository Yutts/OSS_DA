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
                      <li class="active">/ &nbsp; Sửa đơn hàng</li>
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
           <?php
$id = $_GET['id'];
include 'layout/orderitem.php';
require '../utils/db.php';
$stmt = $conn->prepare("SELECT donhang.madh, tensp, donhang.soluong, giatien, tinhtrang, ngaydathang, ngaygiaohang, masp FROM donhang LEFT JOIN chitietdonhang On donhang.madh=chitietdonhang.madh where donhang.madh=:id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$dh= $stmt->fetch(PDO::FETCH_ASSOC);     
if($dh)    
{  
            echo'<form action="../controller/ordercontroller.php?id='.$dh["madh"].'" method="post" enctype="multipart/form-data" class="form-horizontal">';
                                    
               
           
                                  echo'  <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_Tensp" name="txt_Tensp"  class="form-control" value="'.$dh["tensp"].'" readonly></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_masp" name="txt_masp"  class="form-control" value="'.$dh["masp"].'" readonly></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Số lượng</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="txt_Soluong" name="txt_Soluong" class="form-control" value="'.$dh["soluong"].'" readonly></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá tiền</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_Gia" name="txt_Gia" class="form-control" value="'.gia($dh["giatien"]).'" readonly></div>
                                    </div>


                                    
                                    <div class="row form-group">
                                      <div class="col col-md-3"><label for="inputDate">Ngày đặt hàng</label></div>
                                      <div class="col-12 col-md-9"> <input type="date" name="date_dathang" id="date_dathang" maxlength="30" class="form-control" value="'.$dh["ngaydathang"].'" readonly autocomplete="off"></div>
                                    </div>

                                    <div class="row form-group">
                                      <div class="col col-md-3"><label for="inputDate">Ngày giao hàng</label></div>
                                      <div class="col-12 col-md-9"> <input type="date" name="date_giaohang" id="date_giaohang" maxlength="30" class="form-control" value="'.$dh["ngaygiaohang"].'"  required="" autocomplete="off"></div>
                                    </div>
                                    
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Tình trạng</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="select" id="select" class="form-control" required
                                            >
                                                <option value="" selected disabled hidden>'.$dh["tinhtrang"].'</option>

                                                <option value="Chờ xử lý">Chờ xử lý</option>
                                                <option value="Đã xác nhận">Đã xác nhận</option>
                                                <option value="Đang giao">Đang giao</option>
                                                <option value="Đã giao">Đã giao</option>
                                                <option value="Đã hủy đơn">Đã hủy đơn</option>
                                            </select>
                                        </div>
                                    </div>';
                                   
                 }
                 ?>                   
                                    
                                    
                                    
                                 <div class="card-footer">
                                <button type="submit" name="btn_order_group" value="update" class="btn btn-primary btn-sm">
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
