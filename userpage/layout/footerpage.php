<footer id="aa-footer" style="background-color: white">
        <!-- footer bottom -->
        <div class="aa-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-footer-top-area">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        
                                        <ul class="aa-footer-nav">
                                            <li><a href="index.php">Trang Chủ</a></li>
                                            <li><a href="Vivo.php?id=0">Vivo</a></li>
                                            <li><a href="SamSung.php?id=0">SamSung</a></li>
                                            <li><a href="Oppo.php?id=0">Oppo</a></li>
                                            <li><a href="Xiaomi.php?id=0">Xiaomi</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                   <?php
                        
                      
                        require 'utils/db.php';



$stmt = $conn->prepare("SELECT * FROM thongtincuahang");
$stmt->execute();
$a =  $stmt->fetchALL(PDO::FETCH_ASSOC);
  
    foreach ($a as $row ) {      
                                            echo'<address>';
                                                echo'<p>Tên cửa hàng: <span>'.$row["tench"].'</span></p>';
                    echo'<p>Địa chỉ: <span>'.$row["diachi"].'</span></p>';
                    echo'<p><span class="fa fa-phone"></span>'.$row["sdt"].'</p>';
                    echo'<p><span class="fa fa-envelope"></span>'.$row["email"].'</p>';
                  echo '</address>';
              }
                  ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>Theo dõi chúng tôi</h3>
                                            <ul class="aa-footer-nav">
                                                <div class="aa-footer-social">
                                                    <a href="#"><span class="fa fa-facebook"></span></a>
                                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                                    <a href="#"><span class="fa fa-youtube"></span></a>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom -->
        
    </footer>