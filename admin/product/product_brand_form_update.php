<?php include "../../connect/connect_db.php";

$get_update_id=$_REQUEST['update_id'];
 
 try{
    $sql_select= $conn->prepare("SELECT * FROM product_brand_tb
    where product_brand_id=$get_update_id;");//การเขียนคำสั่ง SQL
    $sql_select->execute();//สั่งให้ sql_select ทำงาน
    $row_select = $sql_select->fetch(PDO::FETCH_ASSOC);      
 
 
    }
    catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
//$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
?>
 
 
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href= "../../css/style.css" rel = "stylesheet"> 
        <title>เเบบฟอร์มเเก้ไขข้อมูลสินค้า</title>
    </head>
    <body>
        <?php
        $filename1 = $row_select['product_brand_img'];
        ?>
       
        <div class="container">
        <center>
        <form action="product_brand_update.php?update_id=<?php echo $get_update_id; ?>&f_img=<?php echo $filename1;?>" method="post"  enctype="multipart/form-data">
    <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลbrand</h1></td>
                </tr>
                <tr>
                    <td>ชื่อประเภทข้อมูลสินค้า</td>
                    <td><input type="text" name="fbrand" value="<?php echo  $row_select['product_brand_name'];?>"></td>
                </tr>
                <tr>
                    
                    <td>FILE</td>
                    <td><input type="file" name="fimg"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูลสินค้า" id ="btn-success"></td>
                </tr>
            </table>
 
    </form>
    </center>
        </div>   
    </body> 
</html>
