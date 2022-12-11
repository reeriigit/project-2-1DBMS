<?php
include "../../connect/connect_db.php";    //เชื่อมต่อ database
$get_product_type_name=$_REQUEST['ftype'];
 
 
 
try{
$sql_insert = "INSERT INTO `product_nature_tb`(`product_nature_id`, `product_nature_name`) 
VALUES ('','$get_product_type_name')";
 
    $conn->exec($sql_insert);
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
    echo "<script>window.location.href='product_nature_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
