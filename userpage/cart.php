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
  
    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <section id="cart-view">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cart-view-area" >
                        <div class="cart-view-table">
                          <?php        
                              $id = $_GET['id'];
                            echo '<form action="ordercontroller.php?id='.$id.'" method="POST">';
                                
require 'db.php';
include 'layout/orderitem.php';
        
        $stmt = $conn->prepare("SELECT * FROM sanpham LEFT JOIN danhmucsp ON sanpham.mahang = danhmucsp.madm where masp=:id");
        $stmt->bindParam(':id', $id);
                // insert a row
        $stmt->execute();
        $sp= $stmt->fetch(PDO::FETCH_ASSOC);
       
if($sp)
{                             echo'      <div style="text-align: center;"><h4>Thông tin sản phẩm</h4></div>';  
                              echo'      <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên</label></div>';
                              echo'          <div class="col-12 col-md-9"><input type="text" id="txt_tensp" name="txt_tensp" class="form-control"  value="'.$sp["tensp"].'" readonly>';
                              echo'      </div>';
                              echo'      </div>';
                              
                              echo'      <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số lượng</label></div>';
                              echo'          <div class="col-12 col-md-9"><input type="number" id="txt_soluongsp" name="txt_soluongsp" class="form-control" min=1 value ="1"></div>';
                              echo'      </div>';

                              echo'      <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá bán</label></div>';
                              echo'          <div class="col-12 col-md-9"><input type="text" id="txt_Gia" name="txt_Gia" class="form-control" value="'.$sp["gia"].'" readonly></div>';
                              echo'      </div>';

                              echo'        <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label class=" form-control-label">Màu sắc</label></div>';
                              echo'         <div class="col-12 col-md-9"><input type="text" id="txt_mau" name="txt_mau" class="form-control"  value="'.$sp["mausac"].'" readonly></div>';
                              echo'      </div>';
                                    

                              echo'       <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label class=" form-control-label">Dung lượng - Ram</label></div>';
                              echo'          <div class="col-12 col-md-9"><input type="text" id="txt_phienban" name="txt_phienban" class="form-control" value="'.$sp["dungluong"].'-'.$sp["ram"].'" readonly></div>';
                              echo'      </div>';
                                    
                                
                                    
                              echo'        <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label class=" form-control-label">Hãng</label></div>';
                              echo'         <div class="col-12 col-md-9"><input type="text" id="txt_hang" name="txt_hang" class="form-control"  value="'.$sp["tendm"].'" readonly></div>';
                              echo'      </div>';  
                                    
                              echo'       <div class="row form-group">';
                              echo'          <div class="col col-md-3"><label class=" form-control-label">Hình ảnh</label></div>';
                              echo'          <div class="col-12 col-md-9"><img src="img/dt/'.$sp["hinh"].'" width="200" height="200"></div>';
                              echo'      </div>';
                              echo'      <hr>';  

                              if(isset($_SESSION["tenkh"])){
                              echo'      <div style="text-align: center;"><h4>Thông tin khách hàng</h4></div>';
                              echo '<div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_Username" name="txt_Username" class="form-control" value="'.$_SESSION["tenkh"].'" required>
                                    </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="txt_Email" name="txt_Email"  class="form-control"  value="'.$_SESSION["email"].'" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">SĐT</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_sdt" name="txt_sdt" class="form-control"  value="'.$_SESSION["sdt"].'" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_diachi" name="txt_diachi"  class="form-control"  value="'.$_SESSION["diachi"].'" required></div>
                                    </div>  ';
                                }
                                else
                                {
                                  echo'      <div style="text-align: center;"><h4>Thông tin khách hàng</h4></div>';
                              echo '<div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_Username" name="txt_Username" class="form-control"  required>
                                    </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="txt_Email" name="txt_Email"  class="form-control"  required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">SĐT</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_sdt" name="txt_sdt" class="form-control" required ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_diachi" name="txt_diachi"  class="form-control"  required></div>
                                    </div>  ';
                                }
}
$conn=null;
                                    ?>
                                    

                                    <div style="text-align: center;"><h4>Phương Thức Thanh Toán</h4></div>
                                        <div class="aa-payment-method">
                                            <label for="cashdelivery"><input type="radio" id="cashdelivery" name="optionsRadios" value="Trả tiền khi nhận hàng"> Trả Tiền Khi Nhận Hàng </label>
                                            <label for="paypal" style="margin-left: 50px;"><input type="radio" id="paypal" name="optionsRadios" value="Chuyển khoản" checked> Chuyển khoản </label>
                                         </div>  
                                            <input type="submit" value="Đặt Đơn Hàng" class="aa-browse-btn">
                                        
                            </form>
                            <!-- Cart Total view -->
                            
                        </div>
                    </div>
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

</body>

</html>