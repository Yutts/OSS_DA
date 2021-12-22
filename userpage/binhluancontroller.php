<?php
session_start();
if(isset($_SESSION["username"]))
{
	$idkh=$_SESSION["makh"];
	$tenkh = $_SESSION["tenkh"];
}
require 'db.php';

$id =  $_GET['id'];


$txt_noidung = $_POST["txt_noidung"];

if(count($_POST) > 0)
{
$stmt = $conn->prepare("INSERT INTO binhluan (tenkh,noidung,makh,masp) VALUES (:tenkh, :noidung, :makh, :masp)");
$stmt->bindParam(':tenkh', $tenkh);
$stmt->bindParam(':noidung', $txt_noidung);
$stmt->bindParam(':makh', $idkh);
$stmt->bindParam(':masp', $id);
$stmt->execute();


header("Location: chitiet-sanpham.php?id=".$id);
}

?>