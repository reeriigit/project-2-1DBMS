<?php include "../../connect/connect_db.php";

$get_update_id=$_REQUEST['update_id'];
 
 try{
    $sql_select= $conn->prepare("SELECT * FROM product_tb
    LEFT JOIN product_brand_tb ON product_brand_tb.product_brand_id = product_tb.product_brand
    LEFT JOIN product_type_tb ON product_type_tb.product_type_id = product_tb.product_type 
    LEFT JOIN product_nature_tb ON product_nature_tb.product_nature_id = product_tb.product_nature
    where product_id=$get_update_id;");//การเขียนคำสั่ง SQL
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
        $filename1 = $row_select['product_file'];
        ?>
        <div class="container">
        <center>
        <form action="product_update.php?update_id=<?php echo $get_update_id; ?>&f_img=<?php echo $filename1;?>" method="post"  enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลสินค้า</h1></td>
                </tr>
                
                
                <tr>
                    <td>BRAND</td>
                    <td>
                    <select name="fbrand">  
                        
                        <option value="<?php echo $row_select['product_brand_id']; ?>"><?php echo $row_select['product_brand_name'];?></option> 
                        <?php
                            try{
                                $sql_select_brand= $conn->prepare("SELECT * FROM product_brand_tb"); 
                                $sql_select_brand->execute();//สั่งให้ sql_select ทำงาน
                                while($row_select_brand = $sql_select_brand->fetch(PDO::FETCH_ASSOC)){
                                        
                        ?>
                        <option value="<?php echo $row_select_brand['product_brand_id']; ?>"><?php echo $row_select_brand['product_brand_name'];?></option> 
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
                       
                         <option value="<?php echo $row_select['product_type_id']; ?>"><?php echo $row_select['product_type_name'];?></option> 
                         <?php
                            try{
                                $sql_select_type= $conn->prepare("SELECT * FROM product_type_tb"); 
                                $sql_select_type->execute();//สั่งให้ sql_select ทำงาน
                                while($row_select_type = $sql_select_type->fetch(PDO::FETCH_ASSOC)){
                                        
                        ?>
                         <option value="<?php echo $row_select_type['product_type_id']; ?>"><?php echo $row_select_type['product_type_name'];?></option> 
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
                    <td><input type="text" name="fprice" value="<?php echo $row_select['product_price'];?>"></td>
                </tr>
                <tr>
                    
                    <td>FILE</td>
                    <td><input type="file" name="fimg" ></td>
                </tr>
                <tr>
                    <td>SIZE</td>
                    <td><input type="text" name="fsize" value="<?php echo $row_select['product_size'];?>"></td>
                </tr>
                <tr>
                    <td>COUNTRY</td>
                    <td><input type="text" name="fcountry" value="<?php echo $row_select['product_contry'];?>"></td>
                </tr>
                
                
                <tr>
                    <td>NATURE</td>
                    <td>
                    <select name="fnature"> 
                    <option value="<?php echo $row_select['product_nature_id']; ?>"><?php echo $row_select['product_nature_name'];?></option> 
                        <?php
                            try{
                                $sql_select_nature= $conn->prepare("SELECT * FROM product_nature_tb"); 
                                $sql_select_nature->execute();//สั่งให้ sql_select ทำงาน
                                while($row_select_nature = $sql_select_nature->fetch(PDO::FETCH_ASSOC)){
                                        
                        ?>
                        <option value="<?php echo $row_select_nature['product_nature_id']; ?>"><?php echo $row_select_nature['product_nature_name'];?></option> 
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
                    <td><input type="text" name="fdetail" value="<?php echo $row_select['product_details'];?>"></td>
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
