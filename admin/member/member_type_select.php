<?php include "../../connect/connect_db.php"; ?> 
<html>
    <head>
    <link href= "../../css/style.css" rel = "stylesheet">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>เเสดงข้อมูลสินค้าทั้งหมด</title>
        <style>
          body{
            min-height: 100vh;
            background: linear-gradient(#2b1055,#7597de);
        }

            
        </style>
    </head>
    
    <body>
   <div class="container">
    
   <center> 
        <a href="member_type_form_insert.php"> -เพิ่มข้อมูลสินค้า </a>
        <table border = "1" class="table">
         <thead class="table-dark">
            
            <tr>
                <th>รหัสสินค้า</th>
                <th>ประเภท</th>
               
                <th>เเก้ไขข้อมูล</th>  
                <th>ลบข้อมูล</th>
                
            </tr>
            </thead>
            <tbody style = "background: white">
            <?php
                try{
                    $sql_select= $conn->prepare("SELECT * FROM `member_type_tb` ");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
            <tr>
                <td><?php echo $row_select['member_type_id'];  ?></td>
                <td><?php echo $row_select['member_type_name']; ?></td> 
        
                <td><a href="member_form_type_update.php?update_id=<?php echo $row_select['member_type_id'];  ?>"  
                onclick="return confirm('คุณเเน่ใจที่จะเเก้ไขข้อมูลใช่หรือไม่ ?');" > เเก้ไข </a></td> 
 
                <td><a href="member_type_delete.php?delete_id=<?php echo $row_select['member_type_id']; ?>"
                onclick="return confirm('คุณเเน่ใจที่จะลบข้อมูลใช่หรือไม่ ?');">ลบ </a></td>  
            </tr>
                <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
            

            </tbody>
 
 
 
            
        </table>
        </center>
   </div>
    </body>
</html>
