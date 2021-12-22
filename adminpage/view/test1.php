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
                  <a href="orderadd.php" class="btn btn-success"><i class="fa fa-edit (alias)"></i>&nbsp; Thêm mới</a>

                </div>
                <div class="col-sm-4 " style="float: left;">
                   <form class="search-bar">
                    <input type="text" class="form-control" placeholder="Tìm kiếm " style="width: 200px">
                    <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                    </form>
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
                      <li class="active">/ &nbsp; Danh sách đơn hàng</li>
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

              <h5 class="card-title">Danh sách đơn hàng</h5>
              
			  <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Mã đơn hàng</th>
                      <th scope="col">Tên sản phẩm</th>
                      <th scope="col">Số lượng</th>
                      <th scope="col">Giá tiền</th>
                      <th scope="col">Ngày đặt hàng</th>
                      <th scope="col">Ngày giao hàng</th>
                      <th scope="col">Tình trạng đơn hàng</th>
                       <th scope="col" colspan="3" style="text-align: center;">Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                   
                    include 'layout/orderitem.php';
                    require  '../controller/db.php';
  //$stmt = $conn->prepare();
  $sql = "SELECT * FROM `sanpham` INNER JOIN `khuyenmai` ON `khuyenmai`.`masp`=`sanpham`.`masp` ";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $today = date("Y-m-d");
  // set the resulting array to associative
  
  while($row = $stmt->fetch() ) {
    if(strtotime($today)>strtotime($row["ngayketthuc"]))//hết hạn
    {
      echo'<tr>';
                    echo'<th scope="row">'.$row["gia"].'</th>';
                    echo'<td>NRH-'.$row["gia"].'</td>';
                    echo'<td>'.($row["gia"]-$row["gia"]).'</td>';
                    echo'<td>'.$row["gia"].'</td>';
                    echo'<td>'.gia($row["gia"]).'</td>';
                    echo'<td>'.date('d-m-Y').'</td>';
                    echo'<td>'.date('d-m-Y').'</td>';
                    echo'<td>';
                    echo'<h5 class="'.tinhtrang($row["gia"]).'" style="color: rgb(255 255 255 / 85%);width:100px">'.$row["gia"].'</h5>';

                    echo'</td>';
                    echo'<td>';
                    echo'<a href="orderedit.php?id='.$row["gia"].'" class="btn btn-outline-warning btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-edit (alias)"></i>&nbsp; Sửa</a>';
                   
                    echo' <button type="button" class="btn btn-outline-danger btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-trash-o"></i>&nbsp; Xóa</button>';
                  
                    echo' <a href="orderdetail.php?id='.$row["gia"].'" class="btn btn-outline-info btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-eye"></i>&nbsp; Xem</a>';
                    echo'</td>';
                    echo'</tr>';
    }else{
                    echo'<tr>';
                    echo'<th scope="row">'.$row["gia"].'</th>';
                    echo'<td>NRH-'.$row["giakm"].'</td>';
                    echo'<td>'.($row["gia"]-$row["giakm"]).'</td>';
                    echo'<td>'.$row["gia"].'</td>';
                    echo'<td>'.gia($row["gia"]).'</td>';
                    echo'<td>'.date('d-m-Y').'</td>';
                    echo'<td>'.date('d-m-Y').'</td>';
                    echo'<td>';
                    echo'<h5 class="'.tinhtrang($row["gia"]).'" style="color: rgb(255 255 255 / 85%);width:100px">'.$row["gia"].'</h5>';

                    echo'</td>';
                    echo'<td>';
                    echo'<a href="orderedit.php?id='.$row["gia"].'" class="btn btn-outline-warning btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-edit (alias)"></i>&nbsp; Sửa</a>';
                   
                    echo' <button type="button" class="btn btn-outline-danger btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-trash-o"></i>&nbsp; Xóa</button>';
                  
                    echo' <a href="orderdetail.php?id='.$row["gia"].'" class="btn btn-outline-info btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-eye"></i>&nbsp; Xem</a>';
                    echo'</td>';
                    echo'</tr>';
                  }
                    }
                    ?>
                    
                  </tbody>
                   
                </table>
            </div>
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
	  <link rel="stylesheet" href="assets/css/breadcrumb.css">
</body>
</html>
