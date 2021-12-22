<section id="aa-latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-latest-blog-area">
                        <h2>CÁC BÀI BLOG MỚI NHẤT</h2>
                        <div class="row">
                            <!-- single latest blog -->
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
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="chitiet-blog.php?id='.$row["mabv"].'"><img src="img/blog/'.$row["hinh"].'" style="width:360px;height:250px;" alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            
                                            <span href="#"><i class="fa fa-clock-o"></i>'.$row["ngaydang"].'</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="chitiet-blog.php?id='.$row["mabv"].'">'.$row["tieude"].'</a></h3>
                                        
                                        <a class="aa-read-mor-btn" href="chitiet-blog.php?id='.$row["mabv"].'">Đọc Thêm <span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>';
                        }
                            ?>
                            <!-- single latest blog -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>