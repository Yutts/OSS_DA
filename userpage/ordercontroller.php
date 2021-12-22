<?php
session_start();
if(isset($_SESSION["username"]))
{
	$idkh=$_SESSION["makh"];
}

require 'db.php';

function getSLByID($id)
{
    require 'db.php';

  $stmt = $conn->prepare("SELECT masp,soluong AS `soluong` FROM sanpham
    where masp =:id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $sp =   $stmt->fetch(PDO::FETCH_ASSOC);
  return $sp;
  
}

$id = $_GET['id'];

if(count($_POST) > 0)
{

$txt_tensp = $_POST["txt_tensp"];
$txt_Gia = $_POST["txt_Gia"];
$txt_soluongsp = $_POST["txt_soluongsp"];
$phuongthuctt = $_POST["optionsRadios"];

$tongtien = $txt_Gia*$txt_soluongsp;
$sp = getSLByID($id);

if($sp["soluong"]>$txt_soluongsp){
 	$stmt = $conn->prepare("INSERT INTO donhang (tensp,giatien,soluong,makh) VALUES (:tensp, :giatien, :soluong, :makh)");
	$stmt->bindParam(':tensp', $txt_tensp);
	$stmt->bindParam(':giatien', $tongtien);
	$stmt->bindParam(':soluong', $txt_soluongsp);
	$stmt->bindParam(':makh', $idkh);
	
	$stmt->execute();

	$stmt = $conn->prepare("INSERT INTO chitietdonhang (masp,gia,soluong,phuongthuctt) VALUES (:masp, :giatien, :soluong, :phuongthuctt)");
	$stmt->bindParam(':masp', $id);
	$stmt->bindParam(':giatien', $tongtien);
	$stmt->bindParam(':soluong', $txt_soluongsp);
	$stmt->bindParam(':phuongthuctt', $phuongthuctt);
	$stmt->execute();
	
	
	$message = "Đặt hàng thành công";
      $url = "index.php";
      echo "<script type='text/javascript'>alert('$message');window.location = '$url';</script>";
  }
  else
  {
  	$message = "Đặt hàng thất bại";
      $url = "index.php";
      echo "<script type='text/javascript'>alert('$message');window.location = '$url';</script>";
  }
} 
  



?>