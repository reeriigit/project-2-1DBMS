<?php 
include "../../connect/connect_db.php";
echo $get_table_name=$_REQUEST['gettablename'];
echo $get_del_column=$_REQUEST['column'];
// print_r($_POST["idcheckbox"]);
$arr_id = $_POST["idcheckbox"];


$multiple_id= implode(",",$arr_id);
var_dump($multiple_id);      // ดูโครงสร้างว่าเปฌน string หรือยัง
if($get_table_name == "product_tb"){
  $table_name_form = "product_select.php";
 

}elseif($get_table_name == "product_brand_tb"){
  $table_name_form = "product_brand_select.php";

}elseif($get_table_name == "product_nature_tb"){
  $table_name_form = "product_nature_select.php";

}elseif($get_table_name == "product_type_tb"){
  $table_name_form = "product_type_select.php";

}elseif($get_table_name == "milti_img_tb"){
  $get_img_id=$_REQUEST['img_id'];
 $table_name_form = "mulimg_select.php";

}

try{
    $sql_delete = "DELETE FROM $get_table_name WHERE $get_del_column in ($multiple_id)";    
    
    $conn->exec($sql_delete);

    
    echo "<script>alert('ลบข้อมูลเรียบร้อยเเล้ว')</script>";
    echo "<script>window.location.href='$table_name_form?img_id=$get_img_id';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;


?>