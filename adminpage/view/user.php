<!DOCTYPE html>
<html lang="en">
<head>
  <?php
      include 'layout/headerpage.php';
  ?>
  
</head>


 
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
                
                <div class="col-sm-4 " style="float: right;">
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
                                        
                      <li><a href="user.php">Người dùng &nbsp;</a></li>
                      <li class="active">/ &nbsp; Danh sách người dùng</li>
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

              <h5 class="card-title">Danh sách người dùng</h5>
              
			  <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">STT</th>
                    
                      <th scope="col">Tên</th>
                      
                      <th scope="col">Email</th>
                      
                      <th scope="col">Số điện thoại</th>
                      <th scope="col">Địa chỉ</th>
                      <th scope="col">Trạng thái</th>
                       <th scope="col" colspan="3" style="text-align: center;">Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'layout/orderitem.php';
require '../utils/db.php';

        $stmt = $conn->prepare("SELECT * FROM khachhang");
        
                // insert a row
        $stmt->execute();
        $users= $stmt->fetchALL(PDO::FETCH_ASSOC);
        if($users){
          $i = 1;
          foreach ($users as $row) {
                    echo'<tr>';
                    echo'<th scope="row">'.$i.'</th>';
                    
                    echo'<td>'.$row["tenkh"].'</td>';
                  
                    echo'<td>'.$row["email"].'</td>';
                    echo'<td>'.$row["sdt"].'</td>';
                    echo'<td>'.$row["diachi"].'</td>';
                    echo'<td><span class="'.tinhtranguser($row["tinhtrang"]).'">'.$row["tinhtrang"].'</span></td>';
                    echo'<td>';
                  
                   ?>

                    <a href = "../controller/khoauser.php?id=<?php echo $row["makh"] ?>" onclick="return confirm('Bạn có muốn khóa/mở khóa?')" type="button" class="btn btn-outline-danger btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-trash-o"></i>&nbsp;Khóa</a>
                    <?php
                    echo' <a href = "userdetail.php?id='.$row["makh"].'" type="button" class="btn btn-outline-info btn-sm" style="color: rgb(255 255 255 / 85%)"><i class="fa fa-eye"></i>&nbsp;Xem</a>';
                    
                    echo'</td>';
                    echo'</tr>';
                    $i++;
          }
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
