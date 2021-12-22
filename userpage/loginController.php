<?php


if (count($_POST) > 0) {

require 'utils/db.php';

$username = $_POST["username"];
$password = $_POST["password"];


$stmt = $conn->prepare("SELECT * FROM khachhang");
$stmt->execute();
$a =  $stmt->fetchALL(PDO::FETCH_ASSOC);
  if($a)
  {
    foreach ($a as $row ) {
      if ($username == $row["username"] && $password == $row["password"] && $row["tinhtrang"] == "Hoạt động") {
       session_start();
       $_SESSION["makh"] = $row["makh"];
       $_SESSION["tenkh"] = $row["tenkh"];
       $_SESSION["email"] = $row["email"];
       $_SESSION["sdt"] = $row["sdt"];
       $_SESSION["diachi"] = $row["diachi"];
       $_SESSION["username"] = $row["username"];
       $_SESSION["password"] = $row["password"];
       
       header("Location: index.php");
       
    }else if ($username == $row["username"] && $password == $row["password"] && $row["tinhtrang"] == "Khóa") {
       $message = "Tài khoản đã bị khóa";
      $url = "account.php";
      echo "<script type='text/javascript'>alert('$message');window.location = '$url';</script>";
       
    }
    
    else
    {
      
      $message = "Sai thông tin đăng nhập";
      $url = "account.php";
      echo "<script type='text/javascript'>alert('$message');window.location = '$url';</script>";
      
    }
    }
  }
}
?>

