<?php include "../../connect/connect_db.php"; ?> 
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>เเสดงข้อมูลสินค้าทั้งหมด</title>
    <link href= "../style.css" rel = "stylesheet">
        <style>
         /* body{
            min-height: 100vh;
            background: linear-gradient(#2b1055,#7597de);
        } */
  

            
        </style>
    </head>
    
    <body>
  
   <div class="container">
    
   <center> 
        
        <table border = "1" class="table">
         <thead class="table-dark">
            
            <tr>
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>เเก้ไขข้อมูล</th>  
                <th>ลบข้อมูล</th>
                <th>ลบข้อมูล(check)</th>
                
            </tr>
            </thead>
            <tbody style = "">
            <?php
                try{
                    $sql_select= $conn->prepare("SELECT * FROM `product_type_tb` ");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
            <tr>
                <td><?php echo $row_select['product_type_id'];  ?></td>
                <td><?php echo $row_select['product_type_name']; ?></td> 
                
                <td><a href="product_form_update.php?update_id=<?php echo $row_select['product_id'];  ?>"  
                onclick="return confirm('คุณเเน่ใจที่จะเเก้ไขข้อมูลใช่หรือไม่ ?');" > เเก้ไข </a></td> 
 
                <td><a href="product_delete.php?delete_id=<?php echo $row_select['product_id']; ?>"
                onclick="return confirm('คุณเเน่ใจที่จะลบข้อมูลใช่หรือไม่ ?');">ลบ </a></td>  
                <form action="multipledelete.php" method = "post">
                <td>
                    <input type="checkbox"  name = "idcheckbox[]" value = "<?php echo $row_select['product_id'];  ?>">
                </td>

                
                
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
           <div class="button">
           <tr >
                <td>
                <a href="product_type_form_insert.php" class ="btn btn-success" id ="btn-success"> -เพิ่มข้อมูลสินค้า </a>
                </td>
                <td>
                <input type="submit" value = "Delete" class = "btn btn-danger" id ="btn-danger">
                </td>
                </form>
                <td>
                <button class = "btn btn-primary" onclick = "checkall()" id ="btn-primary">เลือกทั้งหมด</button>
                </td>
                <td>
                <button class = "btn btn-warning" onclick = "uncheckall()" id ="btn-warning">ยกเลิก</button>
                </td>
            </tr>
           </div>
   
        </table>
        </center>
   </div>
    </body>
    <script>
        function checkall(){
           var formele =document.forms[0].length;
           for(i=0;i<formele-1;i++){
            document.forms[0].elements[i].checked=true;
           }
       
        }
        function uncheckall(){
           var formele =document.forms[0].length;
           for(i=0;i<formele-1;i++){
            document.forms[0].elements[i].checked=false;
           }
       
        }
    </script>
</html>
