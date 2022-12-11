<?php
include "../../connect/connect_db.php";    //เชื่อมต่อ database
$get_product_type_name=$_REQUEST['ftype'];
 
 
 
try{
$sql_insert = "INSERT INTO `product_type_tb`(`product_type_id`, `product_type_name`) 
VALUES ('','$get_product_type_name')";
 
    $conn->exec($sql_insert);
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
    echo "<script>window.location.href='product_type_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
