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
                  <a href="user.php" class="btn btn-info"><i class="fa  fa-mail-reply (alias)"></i>&nbsp; Trở lại</a>

                </div>
                
              </div>
             </div>
           </div>
          </div>

          
    
    <div class="col-lg-7" style="float: left;">
             <div class="card" >
               <div class="card-body">
               <div class="card-title">
                 <ol class="breadcrumb text-right">
                                        
                      <li><a href="user.php">Người dùng &nbsp;</a></li>
                      <li class="active">/ &nbsp;Thông tin chi tiết người dùng</li>
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
           <div class="card-title">Thông tin người dùng</div>
           <hr>
            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <?php  
                                $id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chuyennganh";


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM khachhang where makh=:id");
        $stmt->bindParam(':id', $id);
                // insert a row
    $stmt->execute();
        $user= $stmt->fetch(PDO::FETCH_ASSOC);
       
if($user)
{
                              echo '<div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_Username" name="txt_Username" class="form-control" value="'.$user["tenkh"].'" readonly>
                                    </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_Email" name="txt_Email"  class="form-control" readonly value="'.$user["email"].'"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">SĐT</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_sdt" name="txt_sdt" class="form-control" readonly value="'.$user["sdt"].'"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_Email" name="txt_Email"  class="form-control" readonly value="'.$user["diachi"].'" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tình trạng</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_Email" name="txt_Email"  class="form-control" readonly value="'.$user["tinhtrang"].'"></div>
                                    </div>';
                                    
}
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }finally{
      $conn = null;

    }                         
                                    
                                  
                                   
                                    
                                    
                                    
                                   

                                    
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
