<?php 
include "../../connect/connect_db.php";
print_r($_POST["idcheckbox"]);
$arr_id = $_POST["idcheckbox"];

$multiple_id= implode(",",$arr_id);
var_dump($multiple_id);      // ดูโครงสร้างว่าเปฌน string หรือยัง

try{
    $sql_delete = "DELETE FROM `member_tb` WHERE member_id in ($multiple_id)";    
    echo $sql_delete;
    
    $conn->exec($sql_delete);    
    
    echo "<script>alert('ลบข้อมูลเรียบร้อยเเล้ว')</script>";
    echo "<script>window.location.href='member_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;


?>
