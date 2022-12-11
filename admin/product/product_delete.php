<?php
include "../../connect/connect_db.php";  //เชื่อมต่อ database
$get_del_id=$_REQUEST['delete_id'];
$get_table_name=$_REQUEST['gettablename'];
$get_del_column=$_REQUEST['column'];
// $get_del_id=$_REQUEST['delete_id'];
echo $get_del_id;

if($get_table_name == "product_tb"){
    $table_name_form = "product_select.php";
   

 }elseif($get_table_name == "product_brand_tb"){
    $table_name_form = "product_brand_select.php";

 }elseif($get_table_name == "product_nature_tb"){
    $table_name_form = "product_nature_select.php";

 }elseif($get_table_name == "product_type_tb"){
    $table_name_form = "product_type_select.php";

 }elseif($get_table_name == "milti_img_tb"){
   $table_name_form = "mulimg_select.php";

}
 
 
 
try{
    $sql_delete = "DELETE FROM $get_table_name WHERE $get_del_column=$get_del_id";    
    
    $conn->exec($sql_delete);    
    
    echo "<script>alert('ลบข้อมูลเรียบร้อยเเล้ว')</script>";
    echo "<script>window.location.href='$table_name_form';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
