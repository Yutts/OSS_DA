<?php
function getSLByID($id)
{
	
  $stmt = $conn->prepare("SELECT `mahang`,SUM(`soluong`) AS `soluong` FROM `sanpham`
  	where mahang =:id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $sp =   $stmt->fetch(PDO::FETCH_ASSOC);
  return $sp;
 
  
}




function updateSLByID($id,$SL)
{

  $stmt = $conn->prepare("UPDATE danhmucsp SET soluong =:soluong where madm =:id");
  $stmt->bindParam(':soluong', $SL);
  $stmt->bindParam(':id', $id);
  return $stmt->execute();
  

}

    $sp = getSLByID("2");

    updateSLBtID($sp["mahang"],$sp["soluong"]);


?>






