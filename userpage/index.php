

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
    <!-- Start slider -->
    <section id="aa-slider">
        <div class="aa-slider-area" style="height: 400px;">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                     
                    <ul class="seq-canvas">
                      <?php
                             
require 'utils/db.php';



$sql = "SELECT * FROM banner";
$stmt = $conn->prepare($sql);
$stmt->execute();


while($row = $stmt->fetch()) {
                          
                           
                            echo'<li>';
                            echo'<a href="'.$row["url"].'">
                            <img data-seq src="img/banner/'.$row["hinhanh"].'" width="100%" height = "400px"></a>';
                            echo'</li>';
                            
                            
                           
                       }
                        ?>
                    </ul>
                    
                </div>
                <!-- slider navigation btn -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
        </div>
    </section>
    <!-- / slider -->
    <!-- Start Promo section -->
  
    <!-- / Promo section -->
   
    <!-- popular section -->
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#popular" data-toggle="tab">Phổ Biến</a></li>
                                
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men popular category -->
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                        <!-- start single product item -->
                                        <?php
                                        include 'layout/orderitem.php';
                                        require  'db.php';
                               
$sql = "SELECT `sanpham`.`masp`,`tensp`,`hinh`,`gia`,`soluong`,`mausac`,`dungluong`,`ram`,`mota`,khuyenmai.makm,khuyenmai.ngaybatdau,khuyenmai.ngayketthuc,khuyenmai.giakm FROM `sanpham` LEFT JOIN `khuyenmai` ON `sanpham`.`masp`=`khuyenmai`.`masp`
LIMIT 10
";

$stmt = $conn->prepare($sql);
$stmt->execute();
$today = date("Y-m-d");

$sp =   $stmt->fetchALL(PDO::FETCH_ASSOC);
// Load dữ liệu lên website
 
if($sp) {
    foreach ($sp as $row) {
    if($row["makm"] == null)
    {
        echo'<li>';
                    echo'<figure>';
                    echo'<a class="aa-product-img" href="chitiet-sanpham.php?id='.$row["masp"].'"><img src="img/dt/'.$row["hinh"].'" style="width: 220px; height: 300px;"></a>';
                    echo'<a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Thêm vào giỏ hàng</a>';
                    echo'<figcaption>';
                    echo'<h4 class="aa-product-title"><a href="chitiet-sanpham.php?id='.$row["masp"].'">'.$row["tensp"].'-'.$row["mausac"].'-'.$row["dungluong"].'-'.$row["ram"].'</a></h4>';
                    echo'<span class="aa-product-price" style="font-size: 13px;">'.gia($row["gia"]).'</span>';
                    echo'</figcaption>';
                    echo'</figure>';
                    echo'<div class="aa-product-hvr-content">';
                    echo'<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>';
                    echo'<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>';
                    echo'<a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>';
                    echo'</div>';
                    echo'<!-- product badge -->';
                    echo'</li>';
                    
                }
            
               else 
                {

if(strtotime($today)>strtotime($row["ngayketthuc"]))
        {
            echo'<li>';
                    echo'<figure>';
                    echo'<a class="aa-product-img" href="chitiet-sanpham.php?id='.$row["masp"].'"><img src="img/dt/'.$row["hinh"].'" style="width: 220px; height: 300px;"></a>';
                    echo'<a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Thêm vào giỏ hàng</a>';
                    echo'<figcaption>';
                    echo'<h4 class="aa-product-title"><a href="chitiet-sanpham.php?id='.$row["masp"].'">'.$row["tensp"].'-'.$row["mausac"].'-'.$row["dungluong"].'-'.$row["ram"].'</a></h4>';
                    echo'<span class="aa-product-price" style="font-size: 13px;">'.gia($row["gia"]).'</span>';
                    echo'</figcaption>';
                    echo'</figure>';
                    echo'<div class="aa-product-hvr-content">';
                    echo'<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>';
                    echo'<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>';
                    echo'<a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>';
                    echo'</div>';
                    echo'<!-- product badge -->';
                    echo'</li>';
        }
        else{
            echo'<li>';
                    echo'<figure>';
                    echo'<a class="aa-product-img" href="chitiet-sanpham.php?id='.$row["masp"].'"><img src="img/dt/'.$row["hinh"].'" style="width: 220px; height: 300px;"></a>';
                    echo'<a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Thêm vào giỏ hàng</a>';
                    echo'<figcaption>';
                    echo'<h4 class="aa-product-title"><a href="chitiet-sanpham.php?id='.$row["masp"].'">'.$row["tensp"].'-'.$row["mausac"].'-'.$row["dungluong"].'-'.$row["ram"].'</a></h4>';
                    echo'<span class="aa-product-price" style="font-size: 13px;">'.gia(($row["gia"]-$row["giakm"])).'</span><span class="aa-product-price" style="font-size: 13px;"><del>'.gia($row["gia"]).'</del></span>';
                    echo'</figcaption>';
                    echo'</figure>';
                    echo'<div class="aa-product-hvr-content">';
                    echo'<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>';
                    echo'<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>';
                    echo'<a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>';
                    echo'</div>';
                    echo'<!-- product badge -->';
                    echo'</li>';
        }
                    
                }

                   
}
}
?>
                                    </ul>
                                    <a class="aa-browse-btn" href="product.php">Xem thêm sản phẩm<span class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / popular product category -->

                                <!-- start featured product category -->
                                
                                <!-- / latest product category -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / popular section -->
    <!-- Support section -->
    <?php include 'layout/supportpage.php'; ?>
    <!-- / Support section -->
    

    <!-- Latest Blog -->
    <?php include 'layout/lastblogpage.php'; ?>
    <!-- / Latest Blog -->

    <!-- Client Brand -->
    <section id="aa-client-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-client-brand-area">
                        <ul class="aa-client-brand-slider">
                            <li>
                                <a href="#"><img src="img/brand1.png" ></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/brand2.png" ></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/brand3.png" ></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/brand4.png" ></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/brand5.png" ></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/brand6.png" ></a>
                            </li>
                             <li>
                                <a href="#"><img src="img/brand1.png" ></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/brand2.png" ></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Client Brand -->

    <!-- Subscribe section -->

    <!-- / Subscribe section -->

    <!-- footer -->
  <?php include 'layout/footerpage.php'; ?>
    <!-- / footer -->

    <!-- Login Modal -->
    <?php include 'layout/loginmodalpage.php'; ?>

</body>

</html>