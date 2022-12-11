<?php
include "../connect/connect_db.php";    //เชื่อมต่อ database
$get_product_id=$_REQUEST['product_id'];
$get_user_id=$_REQUEST['user_id'];

 
 
 
try{
$sql_insert = "INSERT INTO `oder_yet_tb`(`oder_yet_id`, `oder_yet_product`, `oder_yet_user`)
 VALUES ('','$get_product_id','$get_user_id')";
 
    $conn->exec($sql_insert);
    echo "<script>alert('เพิ่มสิ้นค้าในตะกร้า')</script>";    
    echo "<script>window.location.href='purchase.php?product_id=$get_product_id';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
