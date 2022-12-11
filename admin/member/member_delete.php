<?php
include "../../connect/connect_db.php";   //เชื่อมต่อ database
$get_delete_id=$_REQUEST['delete_id'];
 
try{
    $sql_delete = "DELETE FROM member_tb WHERE member_id=$get_delete_id";    
    $conn->exec($sql_delete);    
    
    echo "<script>alert('ลบข้อมูลเรียบร้อยเเล้ว')</script>";
    echo "<script>window.location.href='member_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
