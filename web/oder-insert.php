<?php
include "../connect/connect_db.php";    //เชื่อมต่อ database
$get_product_id=$_REQUEST['product_id'];
$get_user_id=$_REQUEST['user_id'];
$get_oder_count=$_REQUEST['oder_count'];

 
 
try{
$sql_insert = "INSERT INTO `oder_tb`(`Oder_id`, `Oder_product_id`, `Oder_user_id`, `oder_cont_product`, `Oder_detail`)
 VALUES ('','$get_product_id','$get_user_id','$get_oder_count','ยัวไม่รู้')";
 
    $conn->exec($sql_insert);
    
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

// 
try{
    $sql_insert = "DELETE FROM `oder_yet_tb` WHERE oder_yet_product = $get_product_id";
     
        $conn->exec($sql_insert);
        echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
        echo "<script>window.location.href='wait-show.php';</script>";
     
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }

 
$conn = null;
 
?>
