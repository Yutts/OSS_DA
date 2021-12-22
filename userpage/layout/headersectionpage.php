
<header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">
                        <!-- start header top left -->
                        <div class="aa-header-top-left">
                            <!-- start language -->
                           
                            <!-- / language -->

                            <!-- start currency -->
                            
                            <!-- / cellphone -->
                        </div>
                        <!-- / header top left -->
                        <div class="aa-header-top-right">
                            <ul class="aa-head-top-nav-right">
                                
                                
                               
                                
                                <?php
                                session_start();
                                if(isset($_SESSION["makh"])){
                                    echo '<li><a href="thongtincanhan.php">Tài Khoản Của Tôi</a></li>';
                                    
                                    echo '<li class="hidden-xs"><a href="checkout.php">Đơn Mua</a></li>';
                                    echo '<li><a href="thongtincanhan.php">Tài Khoản Của Tôi</a></li>';
                                    echo '<li><a href="thongtincanhan.php" > Welcome '.$_SESSION["tenkh"].'</a></li>';
                                    echo '<li><a href="logoutController.php" class="dropdown-item">Đăng Xuất</a></li>';
                 
                                }
                                else{
                                    echo '<li><a href="account.php" >Đăng Nhập</a></li>';
                     
                                }
                                ?>
                                <!-- <li><a href="" data-toggle="modal" data-target="#login-modal">Đăng Nhập</a></li> -->

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <!-- Text based logo -->
                            <a href="index.php">
                                <img src="img/logo.PNG" style="width: 100px;height: 80px;">
                            </a>
                           
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->
                        
                        <!-- / cart box -->
                        <!-- search box -->
                        <div class="aa-search-box">
                            <form action="">
                                <input type="text" name="" id="" placeholder="Nhập tên sản phẩm ... ">
                                <button type="submit"><span class="fa fa-search"></span></button>
                            </form>
                        </div>
                        <!-- / search box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>