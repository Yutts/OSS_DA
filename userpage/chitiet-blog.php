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
                    <div class="aa-blog-archive-area">
                        <div class="row">
                            <div class="col-md-9">
                                <!-- Blog details -->
                                <?php
                                $id = $_GET['id'];
require  'db.php';

$sql = "SELECT mabv, tieude, noidung, ngaydang, hinh, tenqtv FROM baiviet LEFT JOIN quantrivien ON baiviet.maqtv=quantrivien.maqtv where mabv=:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$data =   $stmt->fetchALL(PDO::FETCH_ASSOC);
foreach ($data as $row)
{

                                echo'<div class="aa-blog-content aa-blog-details">
                                    <article class="aa-blog-content-single">
                                        <h2>'.$row["tieude"].'</h2>
                                        <div class="aa-article-bottom">
                                            <div class="aa-post-author">
                                                Được đăng bởi '.$row["tenqtv"].'
                                            </div>
                                            <div class="aa-post-date" style="float:right">
                                                Ngày đăng: '.$row["ngaydang"].'
                                            </div>
                                        </div>
                                        <p>'.$row["noidung"].'</p>
                                        <figure class="aa-blog-img">
                                            <a href="#"><img src="img/blog/'.$row["hinh"].'" alt="fashion img"></a>
                                        </figure>
                                
                                    ';
                                                        }
                                                            ?>
                                        <div class="blog-single-bottom">
                                            <div class="row">
                                                
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="blog-single-social">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </article>
                                    <!-- blog navigation -->
                                    
                                    <!-- Blog Comment threats -->
                                    
                                    <!-- blog comments form -->
                                    
                                </div>
                            </div>

                            <!-- blog sidebar -->
                            <!-- Blog Menu -->
                      <?php include 'layout/blogmenu.php'; ?>
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