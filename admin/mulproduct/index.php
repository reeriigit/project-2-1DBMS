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
  

            
        </style>
    </head>
    
    <body>
        <div class="tab-huako"><div class="huako">PRODUCT TABLE</div></div>
        <!-- <?php include "inheader.php"; ?> -->
  
    
   <center> 
        
        <table border = "1" class="table table-dark table-striped">
         <thead >
            
            <tr>
                <th>Table name</th>        
            </tr>
            </thead>
            <tbody style = "">
            <?php
                try{
                    
                    $sql_select= $conn->prepare("SHOW FULL TABLES;");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
            
            <tr>
                <td>
                    <a href="multitable.php?get_table_name=<?php echo $row_select['Tables_in_finalproject2022']; ?>"  >
                    <div><?php  echo $row_select['Tables_in_finalproject2022'];  ?> </div>
                    </a>
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
