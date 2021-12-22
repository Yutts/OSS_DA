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

    <!-- Cart view section -->
    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="checkout-area">
                        <form action="">
                            <div class="row">
                                
                                <div class="col-md-8">
                                    <div class="checkout-right">
                                        <h4>Thông tin đơn hàng</h4>
                                        <div class="aa-order-summary-area">
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Tên sản phẩm</th>
                                                        <th>Số lượng</th>
                                                        <th>Tổng giá tiền</th>
                                                        <th>Tình trạng đơn hàng</th>
                                                        <th>Ngày đặt hàng</th>
                                                        <th>Ngày giao hàng</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if(isset($_SESSION["tenkh"])){
require  'db.php';

$sql = "SELECT * FROM donhang where makh=:id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $_SESSION["makh"]);
$stmt->execute();
$data= $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $row)
{
                                                        echo'<tr>
                                                        <td>'.$row["tensp"].'</td>
                                                        <td>'.$row["soluong"].'</td>
                                                        <td>'.$row["giatien"].'</td>
                                                        <td>'.$row["tinhtrang"].'</td>
                                                        <td>'.$row["ngaydathang"].'</td>
                                                        <td>'.$row["ngaydathang"].'</td>';
                                                        ?>
                                                        <td>
                    <a href="userorder.php?id=<?php echo $row["madh"] ?>" onclick="return confirm('Bạn có muốn hủy đơn hàng này?')" class="btn btn-outline-warning btn-sm" style="color: red"><i class="fa fa-edit (alias)"></i>&nbsp; Hủy đơn hàng</a>
                    <?php
                    echo '</td>
                                                    </tr>';
}

                                                    
                                                }

                                                    ?>
                                                
                                                </tbody>
                                               
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->

    <!-- footer -->
    <?php include 'layout/footerpage.php'; ?>
    <!-- / footer -->
    <!-- Login Modal -->
    <?php include 'layout/loginmodalpage.php'; ?>
</body>

</html>