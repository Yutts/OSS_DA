<section id="menu" style="background-color: #192127">
        <div class="container">
            <div class="menu-area">
                <!-- Navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Left nav -->
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Trang chủ</a></li>
                            <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chuyennganh";

// tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
// kiểm kết nối
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT tendm,madm FROM danhmucsp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// Load dữ liệu lên website
  $i = 1;
while($row = $result->fetch_assoc()) {
                            echo'<li><a href="'.$row["tendm"].'.php?id=0">'.$row["tendm"].'<span class="caret"></span></a>';
                            echo'        <ul class="dropdown-menu" style="text-align: center;"><h5>Mức giá</h5>';
                                   
                            echo'        <hr>';
                            echo'        <li><a href="'.$row["tendm"].'.php?id=2">Dưới 2 triệu</a></li>';
                            echo'        <li><a href="'.$row["tendm"].'.php?id=3">Từ 2 - 5 triệu</a></li>';
                            echo'        <li><a href="'.$row["tendm"].'.php?id=4">Từ 5 - 7 triệu</a></li>';
                            echo'        <li><a href="'.$row["tendm"].'.php?id=5">Từ 7 - 13 triệu</a></li>';
                            echo'        <li><a href="'.$row["tendm"].'.php?id=6">Từ 13 - 20 triệu</a></li>';
                            echo'        <li><a href="'.$row["tendm"].'.php?id=7">Trên 20 triệu</a></li>';
                            echo'    </ul>';
                                
                            echo'</li>';

                            $i++;
}
} else {
echo "0 results";
}
$conn->close();
                            ?>
                            
                           
                            <li><a href="blog-archive.php">Bài viết</a>
                                
                            </li>
                                
                               
                                
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </section>