<?php


function tinhtrang($arr){

if($arr == 'Đã hủy đơn')
{
return "btn btn-danger btn-sm";
}
else if($arr == 'Đang giao')
{
return  "btn btn-info btn-sm";
}
else if($arr == 'Đã giao')
{
return  "btn btn-success btn-sm";
}
else if($arr == 'Chờ xử lý')
{
return  "btn btn-warning btn-sm";
}
else
{
return  "btn btn-primary btn-sm";
}
}

function gia($value)
{
 	return number_format($value,0,".",",")." VNĐ";
}


function tinhtrangsp($arr){

if($arr == 0)
{
return "badge badge-danger";
}

else
{
return  "badge badge-success";
}
}

function tinhtrangsp2($arr){

if($arr == 0)
{
return "Hết hàng";
}

else
{
return  "Còn hàng";
}
}


function tinhtranguser($arr){

if($arr == 'Khóa')
{
return "badge badge-danger";
}

else
{
return  "badge badge-success";
}
}

?>