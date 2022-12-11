<?php
include "../../connect/connect_db.php";   //เชื่อมต่อ database
$get_product_type_name=$_REQUEST['ftype'];
 
 
 
try{
$sql_insert = "INSERT INTO `member_type_tb` VALUES ('','$get_product_type_name')";
 echo $sql_insert ;
    $conn->exec($sql_insert);
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
    echo "<script>window.location.href='member_type_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
