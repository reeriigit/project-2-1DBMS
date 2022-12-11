<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การซื้อ</title>
    <?php include "../connect/connect_db.php"; ?> 
    
    <style>
             *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  }
        body{
    background:#DCDCDC;
  }
        .oder-parent{
            display:flex;
            flex-direction:column;
  
            width: 1000px;
            margin: 100px 150px auto 150px ;
        }
      
        .oder-parent .oder-detail,.oder-product{
            background-color:white;
            width: 1000px;
            height:220px;
            margin-top:10px;
            display:flex;
        }
        .bottom-from{
            display:flex;
            padding: 15px;
        }
        .bottom-from input{
            margin-left:50px;
            border:none;
            width: 800px;
            text-align:right;
            opacity:.5;
            padding-right:10px;
        }
        .count-number{
            width: 800px;
            padding: 15px;
            position: relative;
        }
        .count-number h3{
            position: absolute;
            right: 25px;
            top: 15px;
            color:red;

        }
        .oder-parent  .oder-product img{
            background-color:white;
            margin-left:20px;
            margin-top:20px;
            width: 200px;
            height:170px;
        }
        .oder-parent  .oder-product .block{
            margin-top:30px;
            background-color:#DCDCDC;
            margin-left:20px;
            width: 700px;
            height:150px;
            padding: 20px;
            

        }
      
        .oder-parent .oder-transport{
            background-color:white;
            width: 1000px;
            height:300px;
            margin-top:10px;
        }
        .oder-parent .oder-code,.oder-pay{
            background-color:white;
            width: 1000px;
            height:100px;
            margin-top:10px;
            display:flex;
            flex-direction:column;
        }
      
       
        .oder-parent .oder-sum{
            margin-top:10px;
            display:flex;
            flex-direction:column;
            width: 1000px;
            height:150px;
        }
        .oder-parent .oder-transport{
            display:flex;
            flex-direction:column;

        }
        .oder-parent .oder-transport div{

            width: 1000px;
            height:60px;
            border-bottom:1px solid #DCDCDC;
        }
        .oder-parent .oder-transport a div{
            background-color:#E0FFFF;
            padding: 10px;
        }
        .oder-parent .oder-transport a {
            text-decoration:none;
        }
        .oder-parent .oder-code div,.oder-pay div{
            margin-top:2px;
            background-color:white;
            width: 1000px;
            height:50px;
            border-bottom:1px solid #DCDCDC;
        }
         .code-1 {
            display:flex;
        }
         .code-1 .cod-block-1,.cod-block-2,#pad-text{
            padding-top: 10px;
            padding-left: 20px;

        }
        .oder-parent  .oder-sum div{
            margin-top:2px;
            background-color:white;
            width: 1000px;
            height:50px;
        }
        .count-number{
            display:flex;
        }
        .Oder-form{
            background-color:white;
            border: 1px solid red; 
            width: 1000px;
            height:60px;
            position: fixed;
            bottom:5px;
            display:flex;
            padding:5px;
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
        .Oder-form .buttom-2 > form >input{
            background-color:red;
            color:white;
            width: 470px;
            text-align:center;
            padding-top:5px;
            font-size:25px;
            height:50px;
            border:none;

        }
        #display-none{
            display:none;
        }
      
    </style>
</head>
<body>
    <?php 
    $get_file_name =$_REQUEST["file_name"];
    if($get_file_name=='buy_oder'){
        $get_product_id=$_REQUEST['product_id'];
        $get_oder_count=$_REQUEST['oder_count'];
        

    }else{
        $get_product_id =$_POST["product_id"];
        $get_product_id = $get_product_id[0];
        $get_oder_count=$_POST['oder_count'];
       
        print_r($get_product_id);
        echo($get_oder_count);

    }
    

    
    // $get_product_id=$_REQUEST['product_id'];
    // $get_user_id=$_REQUEST['user_id'];
   ?>
    
   <?php 
 try{
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
//$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
?>
    <div class=" oder-parent">
        <div class="oder-detail">

        </div>
        <div class="oder-product">
        <img src="../admin/product/img/<?php echo $row_select['product_file']; ?>" >
        <div class="block">
            <h3><?php echo $row_select['product_details']; ?> <?php echo $row_select['product_nature_name']; ?></h3>
            
            <h3><?php echo $row_select['product_brand_name']; ?></h3>
            <h2>$<?php echo $row_select['product_price']; ?></h2>
        </div>
        </div>
        <?php  $result = floatval($get_oder_count)*floatval($row_select['product_price']);?> 
        <div class="oder-transport">
            <div class=""> โค็ดส่วนลดร้านค้า</div>
            <a href="">
            <div class="">ตัวเลือกการจัดส่ง</div>
            <div class="">Standard Delivery - ส่งธรรมดาในประเทศ</div>
            </a>
            <div class="bottom-from">หมายเหตุ <input type="text" value="ฝากข้อความถึงผู้ขาย"></div>
            <div class="count-number">คำสั่งซื้อ  <p>(<?php echo $get_oder_count;?>)</p><h3>฿<?php echo $result ?></h3></div>
            
        </div>
        <div class="oder-code">
            <div class="code-1">
                <div class="cod-block-1">โค้ดส่วนลดของ SAM</div>
                <div class="cod-block-2">เลือกโค้ดส่วนลด</div>
            </div>
            <div class="Sampay" id="pad-text">
                <p>ไม่สามารถใช้ Shopee Coins ในคำสั่งซื้อนี้</p>

            </div>
        </div>
        <div class="oder-pay">
            <div class="code-1">
                <div class="cod-block-1">วิธีการชำระเงาน</div>
                <div class="cod-block-2">เก็บเงินปลายทาง</div>
            </div>
            <div class=""></div>
        
        </div>
        <div class="oder-sum">
            <div class="" id="pad-text">ข้อมูลการชำระ</div>
            <div class="" >
                <div class="">รวมการสั่งซื้อ การจัดส่ง</div>
               
           
            </div>
            <div class="code-1" >
                <div class="cod-block-1">
                <b class="">ยอดชำระเงินทั้งหมด</b>
                </div>
                <div class="">
                <h3 class="cod-block-2">฿<?php echo$result;?></h3>
                </div>
                </div>
        </div>
        <div class="Oder-form">
            <div class="buttom-1 ">
                <div class="">
                ยอดชำระเงินทั้งหมด
                </div>
                <div class="" style="color:red;">
                    <B>$<?php echo $result;?></B>
                </div>
            </div>
            <div class="buttom-2 ">
                <form  action="oder-insert.php">
                <input id="display-none" type="text" value="<?php echo $get_product_id;?>" name="product_id">
                <input id="display-none" type="text" value="<?php echo $get_oder_count;?>" name="oder_count">
                <input id="display-none" type="text" value="<?php echo 1;?>" name="user_id">
           
                <input type="submit" value="คำสั่งซื้อ"> 
                </form>
                        
            </div>
        </div>

    </div>
</body>
</html>