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
                      <li class="active">/ &nbsp; Sửa thông tin sản phẩm</li>
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
            <form action="../controller/productcontroller.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <?php
$id = $_GET['id'];
require '../utils/db.php';
        $stmt = $conn->prepare("SELECT * FROM sanpham where masp=:id");
        $stmt->bindParam(':id', $id);
                // insert a row
        $stmt->execute();
        $sp= $stmt->fetch(PDO::FETCH_ASSOC);
       
if($sp)
{                 
                                echo'<div class="row form-group">';
                                echo'        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên</label></div>';
                                echo'        <div class="col-12 col-md-9"><input type="text" id="txt_tensp" name="txt_tensp" class="form-control" value="'.$sp["tensp"].'" required>';
                                echo'    </div>';
                                echo'    </div>';
                                    
                                echo'    <div class="row form-group">';
                                echo'        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Số lượng</label></div>';
                                echo'        <div class="col-12 col-md-9"><input type="text" id="txt_soluongsp" name="txt_soluongsp" class="form-control" value="'.$sp["soluong"].'" required></div>';
                                echo'    </div>';

                                echo'    <div class="row form-group">';
                                echo'        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Giá bán</label></div>';
                                echo'        <div class="col-12 col-md-9"><input type="number" id="txt_Gia" name="txt_Gia" class="form-control" value="'.$sp["gia"].'" required></div>';
                                echo'    </div>';
                                    
                                echo'    <div class="row form-group">';
                                echo'        <div class="col col-md-3"><label class=" form-control-label">Màu sắc</label></div>';
                                echo'        <div class="col-12 col-md-9"><input type="text" id="txt_mau" name="txt_mau" class="form-control" value="'.$sp["mausac"].'" ></div>';
                               echo'     </div>';
                                  }
                                    ?>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Dung lượng</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="select_dungluong" id="select_dungluong" class="form-control">
                                              <option value="8GB"> 8GB</option>
                                              <option value="16GB"> 16GB</option>
                                              <option value="32GB"> 32GB</option>
                                              <option value="64GB"> 64GB</option>
                                              <option value="128GB"> 128GB</option>
                                              <option value="256GB"> 256GB</option>
                                              <option value="512GB"> 521GB</option>
                                            </select>
                                        </div>
                                    </div>


                                     <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Ram</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="select_ram" id="select_ram" class="form-control">
                                              <option value="4GB"> 4GB</option>
                                              <option value="6GB"> 6GB</option>
                                              <option value="8GB"> 8GB</option>
                                              <option value="12GB"> 12GB</option>
                                             
                                            </select>
                                        </div>
                                    </div>
                                   <?php
$id = $_GET['id'];
require '../utils/db.php';
        $stmt = $conn->prepare("SELECT * FROM sanpham  where masp=:id");
        $stmt->bindParam(':id', $id);
                // insert a row
        $stmt->execute();
        $sp= $stmt->fetch(PDO::FETCH_ASSOC);
       
if($sp)
{ 
                                echo'    <div class="row form-group">';
                                echo'        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả</label></div>';
                                echo'        <div class="col-12 col-md-9"><textarea name="txt_mota" id="txt_mota" rows="9" class="form-control" >'.$sp["mota"].'</textarea></div>';
                                echo'    </div>';
}
                                              ?>

                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Hãng</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="select" id="select" class="form-control" required>
                                              <option value="" selected disabled hidden> Chọn hãng</option>
                                             <?php
  require '../utils/db.php';
  
  $sql = "SELECT * FROM danhmucsp";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  while($row = $stmt->fetch() ){

                                                echo'<option value="'.$row["madm"].'" >'.$row["tendm"].'</option>';
                                                
                                              }

                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                   


                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Nhà cung cấp</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="select_nhacungcap" id="select" class="form-control" required="">
                                              <option value=""> Chọn nhà cung cấp</option>
                                             <?php
  require '../utils/db.php';
  
  $sql = "SELECT * FROM nhacungcap";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  while($row = $stmt->fetch() ){

                                                echo'<option value="'.$row["mancc"].'">'.$row["tenncc"].'</option>';
                                                
                                              }

                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                   
                               <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hình ảnh</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file_avatar" name="file_avatar" class="form-control-file"></div>
                                    </div>
                               
                                    
                                    <div class="card-footer">
                                <button type="submit" name="btn_product_group" value="update" class="btn btn-primary btn-sm">
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
