<!DOCTYPE html>
<html lang="en">
<head>
  <?php
      include 'layout/headerpage.php';
  ?>
  
</head>



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
                   <a href="product.php" class="btn btn-info"><i class="fa  fa-mail-reply (alias)"></i>&nbsp; Trở lại</a>

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
                                        
                      <li><a href="product.php">Sản phẩm &nbsp;</a></li>
                      <li class="active">/ &nbsp;Thông tin chi tiết sản phẩm</li>
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
           <div class="card-title">Thông tin sản phẩm</div>
           <hr>
            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                           <?php        
                              $id = $_GET['id'];
require '../utils/db.php';
include 'layout/orderitem.php';
        
        $stmt = $conn->prepare("SELECT * FROM sanpham LEFT JOIN danhmucsp ON sanpham.mahang = danhmucsp.madm where masp=:id");
        $stmt->bindParam(':id', $id);
                // insert a row
        $stmt->execute();
        $sp= $stmt->fetch(PDO::FETCH_ASSOC);
       
if($sp)
{                               
                              echo'      <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên</label></div>';
                              echo'          <div class="col-12 col-md-9"><input type="text" id="txt_tensp" name="txt_tensp" class="form-control" disabled="" value="'.$sp["tensp"].'">';
                              echo'      </div>';
                              echo'      </div>';
                              
                              echo'      <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số lượng</label></div>';
                              echo'          <div class="col-12 col-md-9"><input type="text" id="txt_soluongsp" name="txt_soluongsp" class="form-control" disabled="" value="'.$sp["soluong"].'"></div>';
                              echo'      </div>';

                              echo'      <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá bán</label></div>';
                              echo'          <div class="col-12 col-md-9"><input type="text" id="txt_Gia" name="txt_Gia" class="form-control" disabled="" value="'.gia($sp["gia"]).'"></div>';
                              echo'      </div>';

                              echo'        <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label class=" form-control-label">Màu sắc</label></div>';
                              echo'         <div class="col-12 col-md-9"><input type="text" id="txt_mau" name="txt_mau" class="form-control" disabled="" value="'.$sp["mausac"].'"></div>';
                              echo'      </div>';
                                    

                              echo'       <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label class=" form-control-label">Dung lượng - Ram</label></div>';
                              echo'          <div class="col-12 col-md-9"><input type="text" id="txt_phienban" name="txt_phienban" class="form-control" disabled=""value="'.$sp["dungluong"].'-'.$sp["ram"].'"></div>';
                              echo'      </div>';
                                    
                              echo'    <div class="row form-group">';
                                echo'        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả</label></div>';
                                echo'        <div class="col-12 col-md-9"><textarea name="txt_mota" id="txt_mota" rows="9" class="form-control" disabled>'.$sp["mota"].'</textarea></div>';
                                echo'    </div>';     
                                    
                              echo'        <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label class=" form-control-label">Hãng</label></div>';
                              echo'         <div class="col-12 col-md-9"><input type="text" id="txt_hang" name="txt_hang" class="form-control" disabled="" value="'.$sp["tendm"].'"></div>';
                              echo'      </div>';  
                                    
                              echo'       <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label class=" form-control-label">Hình ảnh</label></div>';
                              echo'          <div class="col-12 col-md-9"><img src="assets/images/dt/'.$sp["hinh"].'" width="200" height="200"></div>';
                              echo'      </div>';
}
$conn=null;
                                    ?>
                                    <?php
require '../utils/db.php';

        $id = $_GET['id'];
        $stmt = $conn->prepare("SELECT tenncc FROM sanpham LEFT JOIN nhacungcap ON sanpham.mancc = nhacungcap.mancc where masp=:id");
        $stmt->bindParam(':id', $id);
                // insert a row
        $stmt->execute();
        $sp= $stmt->fetch(PDO::FETCH_ASSOC);
     
                              echo'        <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label class=" form-control-label">Nhà cung cấp</label></div>';
                              echo'         <div class="col-12 col-md-9"><input type="text" id="txt_ncc" name="txt_ncc" class="form-control" disabled="" value="'.$sp["tenncc"].'"></div>';
                              echo'      </div>';
                            
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
