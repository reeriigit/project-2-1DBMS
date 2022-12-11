<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
           }
           body{
            background:#DCDCDC;
           }
           a{
            text-decoration:none;
           }
        
        .back-to{
            border:1px solid red;
            height: 40px;
            background:red;
            opacity:.5;
            padding: 10px;
        }
        .back-to > h3{
            color:white;
        }
        .show-oder-yet{
            position: relative;
            /* background:red; */
            width:1000px;
            height:auto;
            margin: auto auto auto 150px;
        }
        .show-oder-yet > .block-oder{
            background:white;
            width:100%;
            height:200px;
            margin-top:20px;
            display:flex;
            border:1px solid #555;
            border-radius:5px;
            
        }
        .show-oder-yet > .block-oder >.box-1{
            position: relative;
            /* background:green; */
            width:100px;
            height:200px;
            text-align:center;
            padding-top: 90px;
            
        }
        .show-oder-yet > .block-oder >.box-1>.checkbox{
            width:30px;
            height:30px;
            border:1px solid #555;

        }
        .show-oder-yet > .block-oder >.box-2{
            background:white;
            width:100%;
            height:190px;
            display:flex;
            padding: 10px;

        }
        /*  */
        .Oder-form{
            background-color:white;
            border: 1px solid red; 
            width: 1000px;
            height:60px;
            position: fixed;
            bottom:5px;
            display:flex;
            padding:5px;
            margin-left:150px;
        }
        .Oder-form > div{
            margin-left:20px;
            background-color:white;
            width: 480px;
            height:50px;
        }
        .Oder-form .buttom-1{
            display:flex;
            padding: 0px;
            font-size:20px;
        }
        .Oder-form .buttom-1 > div{
            /* background-color:red; */
            margin: 10px;
        }
        .Oder-form .buttom-2  >input{
            background-color:red;
            color:white;
            width: 470px;
            text-align:center;
            padding-top:5px;
            font-size:25px;
            height:50px;
            border:none;

        }
        /*  */
        #display-none{
            display:none;
        }
        /*  */
        .block-back{
            height: 100px;
        }
        /*  */
        .show-oder-yet > .block-oder >.box-2 > img{
            width:150px;
            height:180px;
            border:1px solid red;
        }
        .show-oder-yet > .block-oder >.box-2 >.detail{
            width:100%;
            height:180px;
            background: #f6fafb;
            padding: 20px;
            position: relative;
            

        }
        .block-oder >.box-2 >.detail>input{
            position: absolute;
            bottom:30px;
            width: 70px;
            height:40px;
            border-radius:5px;
            border:1px solid #555;
            padding-left:25px;
            font-size:15px

        }
          
    </style>
</head>
<body>
    <!--  -->
    <?php include "../connect/connect_db.php"; ?> 
    <!--  -->

<!--  -->
<a href="home.php">
    <div class="back-to">
        <h3>back</h3>

    </div>
</a>

<!--  -->
<?php try{

   $sql_select_oder= $conn->prepare("SELECT *
   FROM oder_yet_tb ");
   $sql_select_oder->execute();//สั่งให้ sql_select ทำงาน
 
?>
<!--  -->
<form  action="buy-order.php" method = "post">


<div class="show-oder-yet">
<?php  while($row_select_oder = $sql_select_oder->fetch(PDO::FETCH_ASSOC)){ ?>
    <div class="block-oder">
        <div class="box-1">
        <input type="checkbox" name="product_id[]" class="checkbox" value="<?php echo $row_select_oder['oder_yet_product'];?> ">
        </div>
        <?php $get_product_id = $row_select_oder['oder_yet_product'];?>
        <!--  -->
     <?php   try{
    $sql_select= $conn->prepare("SELECT * FROM product_tb 
    LEFT JOIN product_brand_tb ON 
    product_brand_tb.product_brand_id = product_tb.product_brand 
    LEFT JOIN product_type_tb ON product_type_tb.product_type_id = product_tb.product_type 
    LEFT JOIN product_nature_tb ON product_nature_tb.product_nature_id = product_tb.product_nature 
    where product_id=$get_product_id;");//การเขียนคำสั่ง SQL
    $sql_select->execute();//สั่งให้ sql_select ทำงาน
    $row_select = $sql_select->fetch(PDO::FETCH_ASSOC);      
 
 
    }
    catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
        <!--  -->

        <div class="box-2">
        <img src="../admin/product/img/<?php echo $row_select['product_file']; ?>" alt="">
            <div class="detail">
            <p><?php echo $row_select['product_nature_name']; ?></p>
            <p><?php echo $row_select['product_brand_name']; ?></p>
            <p>$<?php echo $row_select['product_price']; ?></p>
            <input type="number" value="1"  name="oder_count" min="1" max="100">
            </div>
        </div>
    </div>
    <?php }?>
    <?php  }catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
               //เคลีย์ค่าในการดึงข้อมูล
                ?>
<!--end new product -->
   
    
    
</div>
<div class="block-back"></div>

<div class="Oder-form">
            <div class="buttom-1 ">
                <div class="">
                ยอดชำระเงินทั้งหมด
                </div>
                <div class="" style="color:red;">
                    <!-- <B>$<?php echo $result;?></B> -->
                </div>
            </div>
            <div class="buttom-2 ">
                
               <input id="display-none" name="file_name" value="oder_yet">
               
                <input id="display-none" type="text" value="1" name="user_id">
           
                <input type="submit" value="คำสั่งซื้อ" > 
               
                        
            </div>
</div>
</form>
    
</body>
</html>