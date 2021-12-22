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
                
                
               
              </div>
             </div>
           </div>
          </div>

          
    
    <div class="col-lg-8" style="float: left;">
             <div class="card" >
               <div class="card-body">
               <div class="card-title">
                 <ol class="breadcrumb text-right">
                                        
                      <li><a href="comment.php">Bình luận &nbsp;</a></li>
                      <li class="active">/ &nbsp; Danh sách bình luận</li>
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

              <h5 class="card-title">Danh sách bình luận</h5>
              
        <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Tên khách hàng</th>
                      <th scope="col">Nội dung</th>
                      <th scope="col">Sản phẩm</th>
                       <th scope="col" colspan="3" style="text-align: left;">Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                   
require '../utils/db.php';



$sql = "SELECT * FROM `binhluan` LEFT JOIN sanpham ON binhluan.masp = sanpham.masp";
$stmt = $conn->prepare($sql);
$stmt->execute();

$i = 1;
while($row = $stmt->fetch()) {


                 echo'<tr>';
                 echo'<td>'.$i.'</td>';
                    
                   
                  
                    echo'<td>
                        '.$row["tenkh"].'</td>';
                     echo'<td>'.substr($row["noidung"],0,70).'</td>';
                    echo'<td>'.$row["tensp"].'</td>';
                    echo'<td>';
                    
                   ?>
                    <a href="../controller/commentcontroller.php?id=<?php echo $row["mabl"] ?>" onclick="return confirm('Bạn có muốn xóa?')" type="button" class="btn btn-outline-danger btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-trash-o"></i>&nbsp; Xóa</a>
                  <?php
                    echo' <a href="commentdetail.php?id='.$row["mabl"].'" class="btn btn-outline-info btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-eye"></i>&nbsp; Xem</a>';
                    echo'</td>';
                    echo'</tr>';
                    $i++;
}

$conn = null;

                    
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
