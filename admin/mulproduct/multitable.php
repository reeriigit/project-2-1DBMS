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
                background:linear-gradient(30deg,#000,#555);
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
        <div class="tab-huako"><div class="huako">PRODUCT TABLE</div></div>
        <!-- <?php include "inheader.php"; ?> -->
  
    
   <center> 
        
        <table border = "1" class="table table-dark table-striped">
         <thead >

            
            <tr>
                <?php
                $get_table_name=$_REQUEST['get_table_name'];
                if($get_table_name == "product_tb"){
                    $table_name_form = "product_form_insert.php";
                    $table_name_update = "product_form_update.php";

                 }elseif($get_table_name == "product_brand_tb"){
                    $table_name_form = "product_brand_form_insert.php";

                 }elseif($get_table_name == "product_nature_tb"){
                    $table_name_form = "product_nature_form_insert.php";

                 }elseif($get_table_name == "product_type_tb"){
                    $table_name_form = "product_type_form_insert.php";

                 }


                 try{
                    
                    $sql_select_table= $conn->prepare("SHOW COLUMNS FROM $get_table_name;");
                    $sql_select_table->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select_table = $sql_select_table->fetch(PDO::FETCH_ASSOC)){
                    // $name_table =   $row_select_table['Field'];
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
                <th><?php  echo $row_select_table['Field'];  ?></th>
                <?php
            }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                // $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
                   <?php
                   
                    $sql_select_column= $conn->prepare("SHOW COLUMNS FROM $get_table_name;");
                    $sql_select_column->execute();//สั่งให้ sql_select ทำงาน
                    $row_select_column = $sql_select_column->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR);
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
                    echo $columns  =  $row_select_column[0];
                
                ?>
           
                

                <th>เเก้ไข</th>  
                <th>ลบ</th>
                <th>ลบ(check)</th>
                
            </tr>
            </thead>
            <tbody style = "">
             
            <?php
                try{
                    
                    $sql_select= $conn->prepare("SELECT *
                    FROM $get_table_name 
                        ");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
                      
                        
    
            ?>
            <tr>
                <?php
                try{
                           
                    $sql_select_table= $conn->prepare("SHOW COLUMNS FROM $get_table_name;");
                    $sql_select_table->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select_table = $sql_select_table->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
                    $select_rowss  =  $row_select_table['Field'];
                
                ?>
                <td><?php  echo $row_select[$select_rowss];  ?></td>
                <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                // $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
             <?php
                try{
                           
                    $sql_select_id= $conn->prepare("SELECT * FROM $get_table_name;");
                    $sql_select_id->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select_id = $sql_select_id->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
                   
                
                ?>
              

           
                <td><a href="<?php echo $table_name_update;  ?>?update_id=<?php echo $row_select_id[0];  ?>"  
                onclick="return confirm('คุณเเน่ใจที่จะเเก้ไขข้อมูลใช่หรือไม่ ?');" > เเก้ไข </a></td> 
 
                <td><a href="product_delete.php?delete_id=<?php echo $row_select_id[0]; ?>&gettablename=<?php echo $get_table_name; ?>&column=<?php echo $columns;?>"
                onclick="return confirm('คุณเเน่ใจที่จะลบข้อมูลใช่หรือไม่ ?');">ลบ </a></td>  
                <form action="multipledelete.php?gettablename=<?php echo $get_table_name; ?>&column=<?php echo $columns;?>" method = "post">
                <td>
                    <input type="checkbox"  name = "idcheckbox[]" value = "<?php echo $row_select_id[0];  ?>">
                </td>
                <?php 
                break;
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                // $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
          
               

                
                
            </tr>
                <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                // $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
            

            </tbody>
         
   
        </table>
        
        </center>
        <div class="bar-button">
        <div><a href="<?php echo $table_name_form;?>" style="color:white;"  class="btn">เพิ่มข้อมูล</a></div>
                <?php if($get_table_name == "product_tb"){ ?>
                <div><a href="product_select.php" style="color:white;"  class="btn">MORE </a></div>
                <?php } ?>
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
