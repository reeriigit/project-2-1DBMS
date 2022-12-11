<?php include "../../connect/connect_db.php"; ?> 
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href= "../../css/style.css" rel = "stylesheet">  
        <title>เเบบฟอร์มบันทึกข้อมูลสมาชิก</title>
    </head>
    <body>
        <div class="container">
        <center>
        <form action="member_insert.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลสมาชิก</h1></td>
                </tr>
                <tr>
                    <td>ชื่อ สกุล</td>
                    <td><input type="text" name="fname" size="50"></td>
                </tr>
                <tr>
                    <td>เพศ</td>
                    <td>
                        <input type="radio" name="fgender" value="0">หญิง
                        <input type="radio" name="fgender" value="1">ชาย
                    </td>
                </tr>

                <tr>
                    <td>ประเภท</td>
                    <td>
                    <select name="ftype">  
                        <?php
                            try{
                                $sql_select= $conn->prepare("SELECT * FROM member_type_tb"); 
                                $sql_select->execute();//สั่งให้ sql_select ทำงาน
                                while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                                        
                        ?>
                        <option value="<?php echo $row_select['member_type_id']; ?>"><?php echo $row_select['member_type_name'];?></option> 
                        <?php 
                                }
                            }
                        catch(PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                        $conn = null;//เคลีย์ค่าในการดึงข้อมูล     
                        ?>
 
                    </select>    
                    </td>
                </tr>
                <tr>
                    <td>รูปภาพ</td>
                    <td><input type="file" name="fimg"></td>
                </tr>
                <tr>
                    <td>ที่อยู่</td>
                    <td><textarea name="faddress" rows="5" cols="50"></textarea></td>
                </tr>

                
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูลสมาชิก" id="btn-success"></td>
                </tr>
            </table>
        </form>
    </center>
        </div>
    </body> 
</html>
