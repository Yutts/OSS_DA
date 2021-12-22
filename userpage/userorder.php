<?php

function delete($id)
{
require 'db.php';
  $stmt = $conn->prepare("DELETE FROM donhang where madh =:id");
  $stmt->bindParam(':id', $id);
  return $stmt->execute();
} 
function ktTrangThai($id)
{
  require 'db.php';
  $stmt = $conn->prepare("SELECT * FROM  donhang where madh =:id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $data =   $stmt->fetch(PDO::FETCH_ASSOC);
  return $data;
}



$id = $_GET['id'];



if(isset($id))
{
  $tinhtrang = ktTrangThai($id);
   if($tinhtrang["tinhtrang"] == "Chờ xử lý")
   {

		delete($id);
		$message = "Hủy đơn thành công";
		$url = "checkout.php";
		echo "<script type='text/javascript'>alert('$message');window.location = '$url';</script>";
   }else
   {
		$message = "Hủy đơn thất bại";
		$url = "checkout.php";
		echo "<script type='text/javascript'>alert('$message');window.location = '$url';</script>";

   }

   
}
else
{
 $message = "Hủy đơn thất bại";
  $url = "checkout.php";
  echo "<script type='text/javascript'>alert('$message');window.location = '$url';</script>";}


?>