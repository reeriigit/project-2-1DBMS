<?php
 include "../../connect/connect_db.php"; //เชื่อมต่อ database
$get_name=$_REQUEST['fname'];
$get_gender=$_REQUEST['fgender'];
$get_type=$_REQUEST['ftype'];
$filename = $_FILES["fimg"]["name"];
$get_address=$_REQUEST['faddress'];


//=============================
//ทดสอบการส่งข้อมูลจากไฟล์ที่ชื่อ product_form_insert.php
echo $get_name;
echo $get_type;
echo $get_dealer;
echo $get_price;
//----------------------------------------------------

//$tempname = $_FILES["fimg"]["tmp_name"];
//$folder = "./img/" . $filename;
 
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fimg"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fimg"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fimg"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
/* Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fimg"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fimg"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
//===========================================
 

try{
$sql_insert = "insert into member_tb 
values ('','$get_name','$get_gender','$get_address','$filename','$get_type')";
 echo $sql_insert;
    $conn->exec($sql_insert);
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
    echo "<script>window.location.href='member_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
