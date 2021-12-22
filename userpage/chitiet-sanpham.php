<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'layout/headerpage.php';?>

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

  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container" >
                        <?php
                        include 'layout/orderitem.php';
                        $id = $_GET['id'];
require 'db.php';
        $sql = "SELECT `sanpham`.`masp`,`tensp`,`hinh`,`gia`,`soluong`,`mausac`,`dungluong`,`ram`,`mota`,khuyenmai.makm,khuyenmai.ngaybatdau,khuyenmai.ngayketthuc,khuyenmai.giakm FROM `sanpham` LEFT JOIN `khuyenmai` ON `sanpham`.`masp`=`khuyenmai`.`masp` where sanpham.masp=:masp ";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':masp', $id);
$stmt->execute();
$today = date("Y-m-d");

$data =   $stmt->fetchALL(PDO::FETCH_ASSOC);
// Load dữ liệu lên website
 
if($data) {
    foreach ($data as $sp) {
    if($sp["makm"] == null)
      
{ 
            echo'  <div class="simpleLens-big-image-container"><a data-lens-image="img/dt/'.$sp["hinh"].'" class="simpleLens-lens-image"><img src="img/dt/'.$sp["hinh"].'" class="simpleLens-big-image" style="width: 275px;height: 300px;"></a></div>';
            echo'</div>';

            echo'<div class="simpleLens-thumbnails-container">';
            echo'    <a data-big-image="img/dt/'.$sp["hinh"].'" data-lens-image="img/dt/'.$sp["hinh"].'" class="simpleLens-thumbnail-wrapper" href="#">';
            echo'      <img src="img/dt/'.$sp["hinh"].'" style="width: 45px;height: 55px;">';
            echo'    </a>  ';
                                 
            echo'    <a data-big-image="img/dt/'.$sp["hinh"].'" data-lens-image="img/dt/'.$sp["hinh"].'" class="simpleLens-thumbnail-wrapper" href="#">';
            echo'      <img src="img/dt/'.$sp["hinh"].'" style="width: 45px;height: 55px;">';
            echo'    </a>  ';
                 
            echo'  </div>';
            echo'  </div>';
            echo' </div>';
            echo'</div>';
            //<!-- Modal view content -->
            echo'<div class="col-md-7 col-sm-7 col-xs-12">';
            echo'  <div class="aa-product-view-content">';
            echo'    <h1 >'.$sp["tensp"].'-'.$sp["mausac"].'</h1>';
            echo'    <div class="aa-price-block">';
            echo'      <h2 class="aa-product-view-price">Giá: '.gia($sp["gia"]).'</h2>';

            echo'      <p class="aa-product-avilability">Tình trạng: <span style="color:red;">'.tinhtrangsp2($sp["soluong"]).'</span></p>';
            echo'    </div>';
              }else 
                {

if(strtotime($today)>strtotime($row["ngayketthuc"]))
        {
            echo'  <div class="simpleLens-big-image-container"><a data-lens-image="img/dt/'.$sp["hinh"].'" class="simpleLens-lens-image"><img src="img/dt/'.$sp["hinh"].'" class="simpleLens-big-image" style="width: 275px;height: 300px;"></a></div>';
            echo'</div>';

            echo'<div class="simpleLens-thumbnails-container">';
            echo'    <a data-big-image="img/dt/'.$sp["hinh"].'" data-lens-image="img/dt/'.$sp["hinh"].'" class="simpleLens-thumbnail-wrapper" href="#">';
            echo'      <img src="img/dt/'.$sp["hinh"].'" style="width: 45px;height: 55px;">';
            echo'    </a>  ';
                                       
            echo'    <a data-big-image="img/dt/'.$sp["hinh"].'" data-lens-image="img/dt/'.$sp["hinh"].'" class="simpleLens-thumbnail-wrapper" href="#">';
            echo'      <img src="img/dt/'.$sp["hinh"].'" style="width: 45px;height: 55px;">';
            echo'    </a>  ';
                       

            echo'  </div>';
            echo'  </div>';
            echo' </div>';
            echo'</div>';
            //<!-- Modal view content -->
            echo'<div class="col-md-7 col-sm-7 col-xs-12">';
            echo'  <div class="aa-product-view-content">';
            echo'    <h1 >'.$sp["tensp"].'-'.$sp["mausac"].'</h1>';
            echo'    <div class="aa-price-block">';
            echo'      <h2 class="aa-product-view-price">Giá: '.gia($sp["gia"]).'</h2>';

            echo'      <p class="aa-product-avilability">Tình trạng: <span style="color:red;">'.tinhtrangsp2($sp["soluong"]).'</span></p>';
            echo'    </div>';
}else{
            echo'  <div class="simpleLens-big-image-container"><a data-lens-image="img/dt/'.$sp["hinh"].'" class="simpleLens-lens-image"><img src="img/dt/'.$sp["hinh"].'" class="simpleLens-big-image" style="width: 275px;height: 300px;"></a></div>';
            echo'</div>';

            echo'<div class="simpleLens-thumbnails-container">';
            echo'    <a data-big-image="img/dt/'.$sp["hinh"].'" data-lens-image="img/dt/'.$sp["hinh"].'" class="simpleLens-thumbnail-wrapper" href="#">';
            echo'      <img src="img/dt/'.$sp["hinh"].'" style="width: 45px;height: 55px;">';
            echo'    </a>  ';
                               
            echo'    <a data-big-image="img/dt/'.$sp["hinh"].'" data-lens-image="img/dt/'.$sp["hinh"].'" class="simpleLens-thumbnail-wrapper" href="#">';
            echo'      <img src="img/dt/'.$sp["hinh"].'" style="width: 45px;height: 55px;">';
            echo'    </a>  ';
               

            echo'  </div>';
            echo'  </div>';
            echo' </div>';
            echo'</div>';
            //<!-- Modal view content -->
            echo'<div class="col-md-7 col-sm-7 col-xs-12">';
            echo'  <div class="aa-product-view-content">';
            echo'    <h1 >'.$sp["tensp"].'-'.$sp["mausac"].'</h1>';
            echo'    <div class="aa-price-block">';
            echo'      <h2 class="aa-product-view-price">Giá: '.gia($sp["gia"]-$sp["giakm"]).'</h2>
            <span class="aa-product-price" style="font-size: 13px;"><del>'.gia($sp["gia"]).'</del></span>';

            echo'      <p class="aa-product-avilability">Tình trạng: <span style="color:red;">'.tinhtrangsp2($sp["soluong"]).'</span></p>';
            echo'    </div>';
}
                        }
                      }
                    }
                     
                      ?>

                    
                    <div class="aa-prod-quantity">
                    <p class="aa-prod-category">
                        Số lượng cần đặt: &nbsp;
                      </p>
                      <form action="">
                        <select id="" name="">
                          <option selected="1" value="0">1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                          <option value="4">5</option>
                          <option value="5">6</option>
                        </select>
                      </form>
                      
                    </div>
                    <div class="aa-prod-view-bottom">
                      <?php
                      echo ' <a class="aa-add-to-cart-btn" href="cart.php?id='.$sp["masp"].'">Đặt hàng</a>';
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Miêu tả sản phẩm</a></li>
                <li><a href="#review" data-toggle="tab">Đánh giá của khách hàng</a></li>                
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
<?php
                     
  require 'db.php';

        
        $stmt = $conn->prepare("SELECT * FROM sanpham LEFT JOIN danhmucsp ON sanpham.mahang = danhmucsp.madm where masp=:id");
        $stmt->bindParam(':id', $id);
                // insert a row
        $stmt->execute();
        $sp= $stmt->fetch(PDO::FETCH_ASSOC);
        
               echo' <div class="tab-pane fade in active" id="description">';
               echo'   <p>'.$sp["mota"].'</p>';
               echo '<div>Cấu hình điện thoại '.$sp["tensp"].'</div>';
                echo'<table style="width:100%;border:1px solid black">';

  echo'<tr>';
  echo'  <td>Dung lượng</td>';
  echo'  <td>'.$sp["dungluong"].'</td>';
 
  echo'</tr>';
  echo'<tr>';
  echo'  <td>RAM</td>';
  echo'  <td>'.$sp["ram"].'</td>';
 
  echo'</tr>';
  echo'<tr>';
  echo'  <td>Hãng</td>';
   
  echo'  <td>'.$sp["tendm"].'</td>';
 
  echo'</tr>';

echo'</table>';
                echo'</div>';
                
            
                ?>
                <div class="tab-pane fade " id="review">
                 <div class="aa-product-review-area">
                  <?php
                     
  require 'db.php';

        
        $stmt = $conn->prepare("SELECT Count(*) as SL FROM binhluan where masp=:id");
        $stmt->bindParam(':id', $id);
                
        $stmt->execute();
        $bl= $stmt->fetch(PDO::FETCH_ASSOC);
                   echo'<h4>'.$bl["SL"].' Đánh giá cho sản phẩm</b></h4> ';
                   $conn=null;
                   ?>
                   <?php
                     
  require 'db.php';

        
        $stmt = $conn->prepare("SELECT * FROM binhluan where masp =:id");
        $stmt->bindParam(':id', $id);
                // insert a row
        $stmt->execute();
        $bl= $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($bl) {
    foreach ($bl as $row) {
                  echo' <ul class="aa-review-nav">
                     <li>
                        <div class="media">
                          
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Tên KH: '.$row["tenkh"].'</strong> </h4>
                            
                            <p>Đánh giá:  '.$row["noidung"].'</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        
                      </li>
                   </ul>';
                 }
               }
                   ?>
                   <?php
                                
                                if(isset($_SESSION["makh"])){
                   echo'<h4>Thêm Đánh giá cho sản phẩm </h4>';
                   
                 
                   echo'<form action="binhluancontroller.php?id='.$id.'" class="aa-review-form" method="post">';
                    echo'  <div class="form-group">';
                    echo'    <label for="message">Đánh giá của khách hàng</label>';
                    echo'    <textarea class="form-control" rows="3" name="txt_noidung" id="txt_noidung"></textarea>';
                    echo'  </div>';
                      


                      echo'<button type="submit" class="btn btn-default aa-review-submit">Gửi đánh giá</button>';
  }
                      ?>
                   </form>
                 </div>
                </div>            
              </div>
            </div>
            <!-- Related product -->
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->


  <!-- Subscribe section -->
 
  <!-- / Subscribe section -->

  <!-- footer -->  
  <?php include 'layout/footerpage.php'; ?>
  <!-- / footer -->
  <!-- Login Modal -->  
  <?php include 'layout/loginmodalpage.php'; ?>

  </body>
</html>