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

  <!-- Blog Archive -->
  <section id="aa-blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-blog-archive-area aa-blog-archive-2">
            <div class="row">
              <div class="col-md-9">
                <div class="aa-blog-content">
                  <div class="row">
                    <?php

require  'db.php';

$sql = "SELECT mabv, tieude, noidung, ngaydang, hinh FROM baiviet";
$stmt = $conn->prepare($sql);
$stmt->execute();

$bv =   $stmt->fetchALL(PDO::FETCH_ASSOC);




// Load dữ liệu lên website
  $i = 1;
 foreach ($bv as $row) { 
                    echo'<div class="col-md-4 col-sm-4">
                      <article class="aa-latest-blog-single">
                        <figure class="aa-blog-img">                    
                          <a href="chitiet-blog.php?id='.$row["mabv"].'"><img src="img/blog/'.$row["hinh"].'" alt="fashion img"></a>  
                            <figcaption class="aa-blog-img-caption">
                            
                            <span href="#"><i class="fa fa-clock-o"></i>'.$row["ngaydang"].'</span>
                          </figcaption>                          
                        </figure>
                        <div class="aa-blog-info">
                          <h3 class="aa-blog-title"><a href="chitiet-blog.php?id='.$row["mabv"].'">'.$row["tieude"].'</a></h3>
                          
                          <a class="aa-read-mor-btn" href="chitiet-blog.php?id='.$row["mabv"].'">Đọc Thêm <span class="fa fa-long-arrow-right"></span></a>
                        </div>
                      </article>
                    </div>';
                                             $i++;
}

                  ?>
                    
                    
                    
                    
                  </div>
                </div>
              
                <!-- Blog Pagination -->
                <div class="aa-blog-archive-pagination">
                  <nav>
                    <ul class="pagination">
                      <li>
                        <a aria-label="Previous" href="#">
                          <span aria-hidden="true">«</span>
                        </a>
                      </li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a aria-label="Next" href="#">
                          <span aria-hidden="true">»</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            <!-- Blog Menu -->
            
                       <!--/ Blog Menu -->
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Blog Archive -->


  <!-- Subscribe section -->
  <!-- / Subscribe section -->

  <!-- footer -->  
  <?php include 'layout/footerpage.php'; ?>
  <!-- / footer -->
   <!-- Login Modal -->  
   <?php include 'layout/loginmodalpage.php'; ?>

  </body>
</html>