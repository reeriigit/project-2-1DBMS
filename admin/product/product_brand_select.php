<?php include "../../connect/connect_db.php"; ?> 
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>เเสดงข้อมูลสินค้าทั้งหมด</title>
    <link href= "../style.css" rel = "stylesheet">
    <style>
            .bar-button{
                display:flex;
            }
            .bar-button div{
                width: 150px;
                border: 1px solid black;
                margin-left:10px;
                border-radius:20px;
                text-align:center;
                background:#555;
                color:white;
                border-color: #96D4D4;
            }
            .bar-button div:hover{
                background:#96D4D4;
            }
            th, td {
                 border-color: #96D4D4;
                }
                .huako{
                    position: absolute;
                    background:linear-gradient(30deg,#000,#555);
                    width:500px;
                    height: 100px;
                    left:400px;
                    border-radius:250px;
                    padding: 15px;
                    text-align:center;
                    color:white;
                    font-size:50px;
                    
                }
            .tab-huako{
                margin: 10px;
                position: relative;
                height: 100px;
            }
         
         /* body{
            min-height: 100vh;
            background: linear-gradient(#2b1055,#7597de);
        } */
  

            
        </style>
    </head>
    
    <body>
    <div class="tab-huako"><div class="huako">BRAND TABLE</div></div>
   <div class="container">
    
   <center> 
        
        <table border = "1" class="table table-dark table-striped">
         <thead class="table-dark">
            
            <tr>
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>IMG</th>
                <th>เเก้ไขข้อมูล</th>  
                <th>ลบข้อมูล</th>
                <th>ลบข้อมูล(check)</th>
                
            </tr>
            </thead>
            <tbody style = "">
            <?php
                try{
                    $sql_select= $conn->prepare("SELECT * FROM `product_brand_tb` ");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
            <tr>
                <td><?php echo $row_select['product_brand_id'];  ?></td>
                <td><?php echo $row_select['product_brand_name']; ?></td> 
                <td><img src="brand-img/<?php echo $row_select['product_brand_img']; ?>"  style="width:120px" >  </td>
                
                <td><a href="product_brand_form_update.php?update_id=<?php echo $row_select['product_brand_id'];  ?>"  
                onclick="return confirm('คุณเเน่ใจที่จะเเก้ไขข้อมูลใช่หรือไม่ ?');" > เเก้ไข </a></td> 
 
            <td><a href="product_delete.php?delete_id=<?php echo $row_select['product_brand_id']; ?>&gettablename=product_brand_tb&column=product_brand_id"
                onclick="return confirm('คุณเเน่ใจที่จะลบข้อมูลใช่หรือไม่ ?');">ลบ </a></td>  
               

                <?php 
                $columns = "product_brand_id";
                $get_table_name = "product_brand_tb";
                ?>
 
                
                <form action="multipledelete.php?gettablename=<?php echo $get_table_name; ?>&column=<?php echo $columns;?>" method = "post">
                <td>
                    <input type="checkbox"  name = "idcheckbox[]" value = "<?php echo $row_select['product_brand_id'];  ?>">
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
                <a href="show-table.php" class ="btn btn-success" id ="btn-pimarry">หน้าเเรก</a>
                </td>
                <td>
                <a href="product_brand_form_insert.php" class ="btn btn-success" id ="btn-success"> -เพิ่มข้อมูลสินค้า </a>
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
