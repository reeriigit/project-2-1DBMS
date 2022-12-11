<?php include "../../connect/connect_db.php"; ?> 
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href= "../../css/style.css" rel = "stylesheet">  
    <title>เเบบฟอร์มบันทึกข้อมูลสินค้า</title>
    </head>
    <body>
        <div class="container">
        <center>
        <form action="product_insert.php" method="post"  enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลสินค้า</h1></td>
                </tr>
                
                <tr>
                    <td>BRAND</td>
                    <td>
                    <select name="fbrand">  
                        <?php
                            try{
                                $sql_select= $conn->prepare("SELECT * FROM product_brand_tb"); 
                                $sql_select->execute();//สั่งให้ sql_select ทำงาน
                                while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                                        
                        ?>
                        <option value="<?php echo $row_select['product_brand_id']; ?>"><?php echo $row_select['product_brand_name'];?></option> 
                        <?php 
                                }
                            }
                        catch(PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                       //เคลีย์ค่าในการดึงข้อมูล     
                        ?>
 
                    </select>    
                    </td>
                </tr>
                <tr>
                    <td>TYPE</td>
                    <td>
                    <select name="ftype">  
                        <?php
                            try{
                                $sql_select= $conn->prepare("SELECT * FROM product_type_tb"); 
                                $sql_select->execute();//สั่งให้ sql_select ทำงาน
                                while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                                        
                        ?>
                        <option value="<?php echo $row_select['product_type_id']; ?>"><?php echo $row_select['product_type_name'];?></option> 
                        <?php 
                                }
                            }
                        catch(PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                      //เคลีย์ค่าในการดึงข้อมูล     
                        ?>
 
                    </select>    
                    </td>
                </tr>
                <tr>
                    <td>PRICE</td>
                    <td><input type="text" name="fprice"></td>
                </tr>
                <tr>
                    
                    <td>FILE</td>
                    <td><input type="file" name="fimg"></td>
                </tr>
                <tr>
                    <td>SIZE</td>
                    <td><input type="text" name="fsize"></td>
                </tr>
                <tr>
                    <td>COUNTRY</td>
                    <td><input type="text" name="fcountry"></td>
                </tr>
                
                
                <tr>
                    <td>NATURE</td>
                    <td>
                    <select name="fnature">  
                        <?php
                            try{
                                $sql_select= $conn->prepare("SELECT * FROM product_nature_tb"); 
                                $sql_select->execute();//สั่งให้ sql_select ทำงาน
                                while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                                        
                        ?>
                        <option value="<?php echo $row_select['product_nature_id']; ?>"><?php echo $row_select['product_nature_name'];?></option> 
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
                    <td>DETAIL</td>
                    <td><input type="text" name="fdetail"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูลสินค้า" class = "btn btn-success" id="btn-success"></td>
                </tr>
            </table>
        </form>
    </center>
        </div>
    </body> 
</html>
