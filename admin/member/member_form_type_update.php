<?php include "../../connect/connect_db.php";
$get_update_id=$_REQUEST['update_id'];
echo $get_update_id;
 
 try{
    $sql_select= $conn->prepare("SELECT * FROM `member_type_tb` WHERE  member_type_id ='$get_update_id'");//การเขียนคำสั่ง SQL
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
    <link href= "../style.css" rel = "stylesheet">  
        <title>เเบบฟอร์มเเก้ไขข้อมูลสินค้า</title>
    </head>
    <body>
    <div class="container">
    <center>
        <form action="member_update.php?update_id=<?php echo $get_update_id; ?> " method="post">
            <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลสินค้า</h1></td>
                </tr>
                
                <tr>
                    <td>ประเภทสินค้า</td>
                    <td><input type="text" name="ftype" value="<?php echo $row_select['member_type_name'];?>"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูลสินค้า"></td>
                </tr>
            </table>
        </form>
    </center>
    </div>
    </body> 
</html>
