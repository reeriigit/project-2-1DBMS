<?php 
include "../../connect/connect_db.php";
echo $get_table_name=$_REQUEST['gettablename'];
echo $get_del_column=$_REQUEST['column'];
// print_r($_POST["idcheckbox"]);
$arr_id = $_POST["idcheckbox"];


$multiple_id= implode(",",$arr_id);
var_dump($multiple_id);      // ดูโครงสร้างว่าเปฌน string หรือยัง

try{
    $sql_delete = "DELETE FROM $get_table_name WHERE $get_del_column in ($multiple_id)";    
    
    $conn->exec($sql_delete);    
    
    echo "<script>alert('ลบข้อมูลเรียบร้อยเเล้ว')</script>";
    echo "<script>window.location.href='product_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;


?>
