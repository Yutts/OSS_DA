<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'layout/headerpage.php'; ?>
</head>
<!-- !Important notice -->
<!-- Only for product page body tag have to added .productPage class -->

<body class="productPage">
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
  <?php include 'layout/headersectionpage.php'; ?>
  <!-- / header section -->
  <!-- menu -->
  <?php include 'layout/menupage.php'; ?>
  <!-- / menu -->

  <!-- catg header banner section -->
  
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">

            <!-- Thanh sap xep -->
            <?php include 'layout/thanhsapxep.php'; ?>
            <!-- /Thanh sap xep -->

            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <!-- start single product item -->
                <?php
          $id = $_GET['id'];
          include 'layout/orderitem.php';
          require  'db.php';



if($id == 2)
{
  
$sql = "SELECT `sanpham`.`masp`,`tensp`,`hinh`,`gia`,`soluong`,`mausac`,`dungluong`,`ram`,`mota`,khuyenmai.makm,khuyenmai.ngaybatdau,khuyenmai.ngayketthuc,khuyenmai.giakm FROM `sanpham` LEFT JOIN `khuyenmai` ON `sanpham`.`masp`=`khuyenmai`.`masp`  where sanpham.gia < 2000000 and mahang=1";
}

else if($id == 3)
{
$sql = "SELECT `sanpham`.`masp`,`tensp`,`hinh`,`gia`,`soluong`,`mausac`,`dungluong`,`ram`,`mota`,khuyenmai.makm,khuyenmai.ngaybatdau,khuyenmai.ngayketthuc,khuyenmai.giakm FROM `sanpham` LEFT JOIN `khuyenmai` ON `sanpham`.`masp`=`khuyenmai`.`masp`  where 2000000 <=sanpham.gia and sanpham.gia< 5000000 and mahang=1";
}

else if($id == 4)
{
$sql = "SELECT `sanpham`.`masp`,`tensp`,`hinh`,`gia`,`soluong`,`mausac`,`dungluong`,`ram`,`mota`,khuyenmai.makm,khuyenmai.ngaybatdau,khuyenmai.ngayketthuc,khuyenmai.giakm FROM `sanpham` LEFT JOIN `khuyenmai` ON `sanpham`.`masp`=`khuyenmai`.`masp`  where 5000000 <=sanpham.gia and sanpham.gia< 7000000 and mahang=1";
}

else if($id == 5)
{
$sql = "SELECT `sanpham`.`masp`,`tensp`,`hinh`,`gia`,`soluong`,`mausac`,`dungluong`,`ram`,`mota`,khuyenmai.makm,khuyenmai.ngaybatdau,khuyenmai.ngayketthuc,khuyenmai.giakm FROM `sanpham` LEFT JOIN `khuyenmai` ON `sanpham`.`masp`=`khuyenmai`.`masp`  where 7000000 <=sanpham.gia and sanpham.gia< 13000000 and mahang=1";
}

else if($id == 6)
{
$sql = "SELECT `sanpham`.`masp`,`tensp`,`hinh`,`gia`,`soluong`,`mausac`,`dungluong`,`ram`,`mota`,khuyenmai.makm,khuyenmai.ngaybatdau,khuyenmai.ngayketthuc,khuyenmai.giakm FROM `sanpham` LEFT JOIN `khuyenmai` ON `sanpham`.`masp`=`khuyenmai`.`masp`  where 13000000 <=sanpham.gia and sanpham.gia< 20000000 and mahang=1";
}

else if($id == 7)
{
$sql = "SELECT `sanpham`.`masp`,`tensp`,`hinh`,`gia`,`soluong`,`mausac`,`dungluong`,`ram`,`mota`,khuyenmai.makm,khuyenmai.ngaybatdau,khuyenmai.ngayketthuc,khuyenmai.giakm FROM `sanpham` LEFT JOIN `khuyenmai` ON `sanpham`.`masp`=`khuyenmai`.`masp` where 20000000 <=sanpham.gia and mahang=1";
}


else 
{
$sql = "SELECT `sanpham`.`masp`,`tensp`,`hinh`,`gia`,`soluong`,`mausac`,`dungluong`,`ram`,`mota`,khuyenmai.makm,khuyenmai.ngaybatdau,khuyenmai.ngayketthuc,khuyenmai.giakm FROM `sanpham` LEFT JOIN `khuyenmai` ON `sanpham`.`masp`=`khuyenmai`.`masp` where mahang=1";
}


$stmt = $conn->prepare($sql);


$stmt->execute();
$today = date("Y-m-d");

$sp =   $stmt->fetchALL(PDO::FETCH_ASSOC);
// Load dữ liệu lên website
 
if($sp) {
    foreach ($sp as $row) {
    if($row["makm"])
    {
        if(strtotime($today)>strtotime($row["ngayketthuc"]))
        {
                        echo'<li>';
                        echo'<figure>';
                        echo'<a class="aa-product-img" href="chitiet-sanpham.php?id='.$row["masp"].'"><img src="img/dt/'.$row["hinh"].'" style="width: 250px; height: 300px;"></a>';
                        echo'<a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Thêm vào giỏ hàng</a>';
                        echo'<figcaption>';
                        echo'<h4 class="aa-product-title"><a href="chitiet-sanpham.php?id='.$row["masp"].'">'.$row["tensp"].'-'.$row["mausac"].'-'.$row["dungluong"].'-'.$row["ram"].'</a></h4>';
                        echo'<span class="aa-product-price">'.gia($row["gia"]).'</span>';
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
                        echo'<a class="aa-product-img" href="chitiet-sanpham.php?id='.$row["masp"].'"><img src="img/dt/'.$row["hinh"].'" style="width: 250px; height: 300px;"></a>';
                        echo'<a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Thêm vào giỏ hàng</a>';
                        echo'<figcaption>';
                        echo'<h4 class="aa-product-title"><a href="chitiet-sanpham.php?id='.$row["masp"].'">'.$row["tensp"].'-'.$row["mausac"].'-'.$row["dungluong"].'-'.$row["ram"].'</a></h4>';
                        echo'<span class="aa-product-price">'.gia(($row["gia"]-$row["giakm"])).'</span><span class="aa-product-price"><del>'.gia($row["gia"]).'</del></span>';
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
            
               else
                {
                  echo'<li>';
                        echo'<figure>';
                        echo'<a class="aa-product-img" href="chitiet-sanpham.php?id='.$row["masp"].'"><img src="img/dt/'.$row["hinh"].'" style="width: 250px; height: 300px;"></a>';
                        echo'<a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Thêm vào giỏ hàng</a>';
                        echo'<figcaption>';
                        echo'<h4 class="aa-product-title"><a href="chitiet-sanpham.php?id='.$row["masp"].'">'.$row["tensp"].'-'.$row["mausac"].'-'.$row["dungluong"].'-'.$row["ram"].'</a></h4>';
                        echo'<span class="aa-product-price">'.gia($row["gia"]).'</span>';
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

                ?>



                <!-- start single product item -->

                <!-- quick view modal -->
                
                <!-- / quick view modal -->
            </div>
            <div class="aa-product-catg-pagination">
              <div class="pagination" id="">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
              </div>
            </div>
          </div>
        </div>
            <!--  thanhloaisach -->
            <?php include 'layout/thanhloaisach.php'; ?>
          <!-- / thanhloaisach -->
  <!-- / product category -->


 
  <!-- footer -->
  <?php include 'layout/footerpage.php'; ?>
  <!-- / footer -->
  <!-- Login Modal -->
  <?php include 'layout/loginmodalpage.php'; ?>


</body>

</html>