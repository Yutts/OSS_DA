<?php

session_start();
if(isset($_SESSION["username"]))
{
  $id=$_SESSION["makh"];
}



function updatePasswordByEmail($makh,$newpass)
{
require 'utils/db.php';
  $stmt = $conn->prepare("UPDATE khachhang SET password =:newpass where makh =:makh");
  $stmt->bindParam(':makh', $makh);
  $stmt->bindParam(':newpass', $newpass);
  return $stmt->execute();

  $conn = null; 

}

function updateUser($tenkh,$email,$sdt,$diachi,$user,$id)
{
require 'utils/db.php';
  $stmt = $conn->prepare("UPDATE khachhang SET tenkh =:tenkh, username =:username, email =:email, diachi =:diachi, sdt=:sdt where makh =:id");
  $stmt->bindParam(':tenkh', $tenkh);
  $stmt->bindParam(':username', $user);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':diachi', $diachi);
  $stmt->bindParam(':sdt', $sdt);
  
  
  $stmt->bindParam(':id', $id);
  return $stmt->execute();

  $conn = null; 

}

if(count($_POST) > 0)
{
$txt_name = $_POST["txt_name"];
$txt_email = $_POST["txt_email"];
$txt_diachi = $_POST["txt_diachi"];

$txt_sdt = $_POST["txt_sdt"];
$txt_username = $_POST["txt_username"];

$txt_pass = $_POST["txt_pass"];
$txt_newpass = $_POST["txt_newpass"];



$btn_group = $_POST['bnt_xuly'];
	switch ($btn_group) {

        case "update":

updateUser($txt_name,$txt_email,$txt_sdt,$txt_diachi,$txt_username,$id);

	$message = "Sửa thông tin thành công";
	$url = "thongtincanhan.php";
	echo "<script type='text/javascript'>alert('$message');window.location = '$url';</script>";

        break;

        case "reset":

if($txt_newpass != null){

updatePasswordByEmail($id,$txt_newpass);

	$message = "Đổi mật khẩu thành công";
	$url = "thongtincanhan.php";
	echo "<script type='text/javascript'>alert('$message');window.location = '$url';</script>";
}
else
{
	$message = "Đổi mật khẩu thất bại";
	$url = "thongtincanhan.php";
	echo "<script type='text/javascript'>alert('$message');window.location = '$url';</script>";

}


        break;
}

}
?>