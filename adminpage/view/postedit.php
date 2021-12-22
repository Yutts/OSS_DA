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


            <div class="col-lg-12">
             <div class="card">
               <div class="card-body">
               <div class="card-title">
                <div class="col-sm-8" style="float: left;">
                   <a href="post.php" class="btn btn-info"><i class="fa  fa-mail-reply (alias)"></i>&nbsp; Trở lại</a>

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
                      <li class="active">/ &nbsp;Sửa bài viết</li>
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
           <div class="card-title">Thông tin bài viết</div>
           <hr>
           <?php
           $id = $_GET['id'];
require '../utils/db.php';
        $stmt = $conn->prepare("SELECT * FROM baiviet where mabv=:id");
        $stmt->bindParam(':id', $id);
                // insert a row
        $stmt->execute();
        $bv= $stmt->fetch(PDO::FETCH_ASSOC);
       
if($bv)
{       
            echo'<form action="../controller/postcontroller.php?id='.$bv["mabv"].'" method="post" enctype="multipart/form-data" class="form-horizontal">';
                                    
                                     echo' <div class="row form-group">';
                                    echo'    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Tiêu đề</label></div>';
                                    echo'    <div class="col-12 col-md-9"><textarea name="txt_tenbv" id="txt_tenbv" rows="2" class="form-control"  required>'.$bv["tieude"].'</textarea></div>';
                                    echo'</div>';
                                    
                                    echo'<div class="row form-group">';
                                    echo'    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Nội dung</label></div>';
                                    echo'    <div class="col-12 col-md-9"><textarea name="txt_noidung" id="txt_noidung" rows="9" class="form-control"  required>'.$bv["noidung"].'</textarea></div>';
                                    echo'</div>';
                                 }
?>
                                    <div class="row form-group">
                                      <div class="col col-md-3"><label for="inputDate">Ngày đăng</label></div>
                                      <div class="col-12 col-md-9"> <input type="date" name="txt_ngaydang" id="txt_ngaydang" maxlength="30" class="form-control" value="<?php echo date('Y-m-d'); ?>" required="" disabled autocomplete="off"></div>
                                    </div>
                                    
                                     <div class="card-footer">
                                <button type="submit" name="btn_post_group" value="update" class="btn btn-primary btn-sm">
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
