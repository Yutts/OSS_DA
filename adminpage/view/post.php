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
                  <a href="postadd.php" class="btn btn-success"><i class="fa fa-pencil-square-o"></i>&nbsp; Thêm mới</a>

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
                                        
                      <li><a href="post.php">Bài viết &nbsp;</a></li>
                      <li class="active">/ &nbsp; Danh sách bài viết</li>
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

              <h5 class="card-title">Danh sách bài viết</h5>
              
			  <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Tên bài viết</th>
                      <th scope="col">Nội dung</th>
                      <th scope="col">Ngày đăng</th>

                       <th scope="col" colspan="3" style="text-align: center;">Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'layout/orderitem.php';
require '../utils/db.php';



$sql = "SELECT * FROM baiviet";
$stmt = $conn->prepare($sql);
$stmt->execute();

$i = 1;
while($row = $stmt->fetch()) {
                    echo'<tr>';
                    echo'<th scope="row">'.$i.'</th>';


                    echo'<td>'.preg_replace('/\s+?(\S+)?$/', '', substr($row["tieude"], 0, 50)).'...</td>';
                    echo'<td><p><strong>'.preg_replace('/\s+?(\S+)?$/', '', substr($row["noidung"], 0, 70)).'
                        ...</strong></p></td>';
                    echo'<td>'.date($row["ngaydang"]).'</td>';
                    echo'<td>';
                    echo'<a href="postedit.php?id='.$row["mabv"].'" class="btn btn-outline-warning btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-edit (alias)"></i>&nbsp; Sửa</a>';
                   ?>
                    <a href="../controller/delete_post.php?id=<?php echo $row["mabv"] ?>" onclick="return confirm('Bạn có muốn xóa?')" type="button" class="btn btn-outline-danger btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-trash-o"></i>&nbsp; Xóa</a>
                  <?php
                    echo' <a href="postdetail.php?id='.$row["mabv"].'" class="btn btn-outline-info btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-eye"></i>&nbsp; Xem</a>';
                    echo'</td>';
                    echo'</tr>';
                    $i++;
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
