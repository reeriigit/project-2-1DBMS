<?php
include "../../connect/connect_db.php";  
// print_r($_FILES);  //เชื่อมต่อ database
$get_img_type_id=$_REQUEST['img_id'];
// $filename = $_FILES["fimg"]["name"];
if(isset($_POST['submit'])){
    // print_r($_FILES);

    foreach($_FILES["upload"]["tmp_name"] as $key =>$value ){
        $filename = $_FILES["upload"]["name"];
        $new_name = rand(0,microtime(true)).'-'.$filename[$key];
        if(move_uploaded_file($_FILES["upload"]["tmp_name"][$key], "uploads/".$new_name)){
            $sql = "INSERT INTO `milti_img_tb`(`milti_img`, `product_id`)
             VALUES ( :imge, :product_id)";
             $stmt = $conn->prepare($sql);
             $params = array(
                'imge' => $new_name,
                'product_id' => $get_img_type_id
             );
             $stmt->execute($params);
        }

    }
    echo "<script>window.location.href='mulimg_select.php?img_id=$get_img_type_id;';</script>";
}


 

