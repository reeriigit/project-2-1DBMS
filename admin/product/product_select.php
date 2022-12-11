<?php include "../../connect/connect_db.php"; ?> 
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>เเสดงข้อมูลสินค้าทั้งหมด</title>
        <!-- <link href= "../../css/style.css" rel = "stylesheet">   -->
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
        .datail-block{
            width: 200px;

        }
  

            
        </style>
    </head>
    
    <body>
        <div class="tab-huako"><div class="huako">PRODUCT TABLE</div></div>
        <!-- <?php include "inheader.php"; ?> -->
  
    
   <center> 
        
        <table border = "1" class="table table-dark table-striped">
         <thead >
            
            <tr>
                <th>รหัส</th>
                <th>ชื่อ</th>
                <th>ประเภท</th>
                <th>ราคา</th>
                <th>รูปภาพ</th>
                <th>รายละเอียดรูป</th>
                <th>ไซส์</th>
                <th>ผลิตที่</th>
                <th>ลักษณะ</th>
                <th>รายละเอียด</th>

                <th>เเก้ไข</th>  
                <th>ลบ</th>
                <th>ลบ(check)</th>
                
            </tr>
            </thead>
            <tbody style = "">
            <?php
                try{
                    
                    $sql_select= $conn->prepare("SELECT *
                    FROM product_tb
                        LEFT JOIN product_brand_tb ON product_brand_tb.product_brand_id = product_tb.product_brand 
                        LEFT JOIN product_type_tb ON product_type_tb.product_type_id = product_tb.product_type 
                        LEFT JOIN product_nature_tb ON product_nature_tb.product_nature_id = product_tb.product_nature ");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
            <tr>
                <td><?php  echo $row_select['product_id'];  ?></td>
                <td><?php echo $row_select['product_brand_name']; ?></td> 
                <td><?php echo $row_select['product_type_name']; ?></td> 
                <td><?php echo $row_select['product_price']; ?></td> 
                <!--if-->
                 <?php //-----------------------
                 if($row_select['product_file']== NULL){?>
                 <td align = "center"><h2>-</h2></td>
                 <?php }else{?>
                <td><img src="img/<?php echo $row_select['product_file']; ?>"  style="width:120px" >  </td>
                <?php }//-----------------------?>
                <td><a href="mulimg_form.php?img_id=<?php  echo $row_select['product_id'];  ?>">เพิ่ม</a></td>
                <td><?php echo $row_select['product_size']; ?></td> 
                <td><?php echo $row_select['product_contry']; ?></td> 
                <td><?php echo $row_select['product_nature_name']; ?></td> 
                <td class="datail-block"><?php echo $row_select['product_details']; ?></td> 

                
                <td><a href="product_form_update.php?update_id=<?php echo $row_select['product_id'];  ?>"  
                onclick="return confirm('คุณเเน่ใจที่จะเเก้ไขข้อมูลใช่หรือไม่ ?');" > เเก้ไข </a></td> 
 
                <?php 
                $columns = "product_id";
                $get_table_name = "product_tb";
                ?>
 
                <td><a href="product_delete.php?delete_id=<?php echo $row_select['product_id']; ?>&gettablename=<?php echo $get_table_name; ?>&column=<?php echo $columns;?>"
                onclick="return confirm('คุณเเน่ใจที่จะลบข้อมูลใช่หรือไม่ ?');">ลบ </a></td>  
                <form action="multipledelete.php?gettablename=<?php echo $get_table_name; ?>&column=<?php echo $columns;?>" method = "post">
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
          
   
        </table>
        
        </center>
        <div class="bar-button">
        <div><a href="show-table.php" style="color:white;"  class="btn">หน้าเเรก</a></div>
                <div><a href="product_form_insert.php" style="color:white;"  class="btn">เพิ่มข้อมูลสินค้า </a></div>
                <div><input type="submit" value = ""  class="btn">Delete</div>
                </form>
                <div><button style="color:white;"   onclick = "checkall()" class="btn">เลือกทั้งหมด</button></div>
                <div><button style="color:white;"  onclick = "uncheckall()"class="btn">ยกเลิก</button></div>
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
