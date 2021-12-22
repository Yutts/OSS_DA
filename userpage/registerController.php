<?php
require 'db.php';

function ktTrungUser($username)
{
    require 'db.php';
    $sql = "SELECT * FROM khachhang ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data =  $stmt->fetchALL(PDO::FETCH_ASSOC);
    if($data)
    {
    foreach ($data as $row) {
        if($row["username"]==$username)
        {
            return $row;
            break;
        }
        
    }
}
}

function ktTrungEmail($email)
{
    require 'db.php';
    $sql = "SELECT * FROM khachhang ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data =  $stmt->fetchALL(PDO::FETCH_ASSOC);
    if($data)
    {
    foreach ($data as $row) {
        if($row["email"]==$email)
        {
            return $row;
            break;
        }       
    }
}
}

function ktTrungSDT($phone)
{
    require 'db.php';
    $sql = "SELECT * FROM khachhang ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data =  $stmt->fetchALL(PDO::FETCH_ASSOC);
    if($data)
    {
    foreach ($data as $row) {
        if($row["sdt"]==$phone)
        {
            return $row;
            break;
        }   
    }
}
}

if (count($_POST) > 0) {
    $txt_hoten = $_POST['txt_hoten'];
    $txt_username = $_POST['txt_username'];
    $txt_password = $_POST['txt_password'];
    $txt_email = $_POST['txt_email'];
    $txt_phone = $_POST['txt_phone'];

    $username = ktTrungUser($txt_username);
    $email = ktTrungEmail($txt_email);
    $sdt = ktTrungSDT($txt_phone);

    $bnt_xuly = $_POST['bnt_xuly'];
  
    switch ($bnt_xuly) {
        case "register":
    if(isset($username))
    {
      $message = "Tên đăng nhập đã tồn tại";
      $url = "account.php";
      echo "<script type='text/javascript'>alert('$message');window.location = '$url';</script>";
    }else if(isset($email))
    {
      $message = "Email đã tồn tại";
      $url = "account.php";
      echo "<script type='text/javascript'>alert('$message');window.location = '$url';</script>";
    }else if(isset($sdt))
    {
      $message = "SĐT đã tồn tại";
      $url = "account.php";
      echo "<script type='text/javascript'>alert('$message');window.location = '$url';</script>";
    }
    else
    {
        $stmt = $conn->prepare("INSERT INTO khachhang (tenkh, email, sdt, username, password) VALUES (:tenkh, :email, :sdt, :username, :password)");
$stmt->bindParam(':tenkh', $txt_hoten);
$stmt->bindParam(':email', $txt_email);
$stmt->bindParam(':sdt', $txt_phone);
$stmt->bindParam(':username', $txt_username);
$stmt->bindParam(':password', $txt_password);
$stmt->execute();
        $message = "Đăng ký tài khoản thành công";
      $url = "account.php";
      echo "<script type='text/javascript'>alert('$message');window.location = '$url';</script>";
    }

            
            break;
        default :
            break;
    }
} else {
    header("Location:account.php");
    die;
}
?>
