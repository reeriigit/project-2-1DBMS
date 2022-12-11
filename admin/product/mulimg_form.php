<?php 
include "../../connect/connect_db.php";  
// print_r($_FILES);  //เชื่อมต่อ database
$get_img_type_id=$_REQUEST['img_id'];

?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href= "../../css/style.css" rel = "stylesheet">     
<title>เเบบฟอร์มข้อมูลเเบรนด์สินค้า</title></head>
<body>
    <div class="container">
    <form action="mulimg_insert.php?img_id=<?php echo $get_img_type_id;?>" method="POST" enctype="multipart/form-data">
    <table>
                <tr>
                    <td colspan="2"><h1>รายละเอียดรูปภาพ</h1></td>
                </tr>
                
                <tr>
                    
                    <td>FILE</td>
                    <td><input type="file" name="upload[]" multiple  /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="บันทึกข้อมูลสินค้า" id ="btn-success"></td>
                </tr>
            </table>
 
    </form>
    </div>
</body>
</html>
