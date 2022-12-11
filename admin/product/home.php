<?php include('barmenu-admin.php'); ?>
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
        a{
            text-decoration:none;
        }

 
        .parent-oder{
            margin:20px auto auto 150px;
            /* background:red; */
            width: 1000px;;
            display:grid;
            grid-template-columns:1fr 1fr 1fr 1fr;
            



        }
        .parent-oder>a>div{
            margin:20px;
            /* background:blue; */
            width: 200px;
            height:200px;
            border-radius:25px;
            overflow:hidden;
            position: relative;
            border:1px solid #555;
        }
        .parent-oder>a>div>img{
            width: 200px;
            height:100px;
            /* background:yellow; */
           
        }
        .parent-oder>a>div>.block-deatail{
            width: 200px;
            height:100px;
            background:#F5F5F5;
          
            
        }
        .parent-oder>a>div>div>div{
            /* background:green; */
            width: 200px;
            height:100px;
            padding-top:25px;
            padding-left:15px;
            background:linear-gradient(90deg,#555,#fff);
            color:white;
            

        }
        .cont-oder{
            position: absolute;
            width: 200px;
            height:50px;
            background:white;
            left:60px;
            bottom:70px;
            text-align:center;
            font-size:25px;
            border:1px solid #555;
            border-radius:25px;
            color:#555;
            padding-top:10px;
            
        }

    </style>
</head>
<body>
<?php try{

$sql_select_oder= $conn->prepare("SELECT *
FROM oder_tb ");
$sql_select_oder->execute();//สั่งให้ sql_select ทำงาน

?>
    <div class="parent-oder">
    <?php  while($row_select_oder = $sql_select_oder->fetch(PDO::FETCH_ASSOC)){ ?>
        <!--  -->
        <?php $get_product_id = $row_select_oder['Oder_product_id'];?>
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

        <!--  -->
        <a href="">
        <div class="">
        <img src="img/<?php echo $row_select['product_file']; ?>" alt="">
            <div class="block-deatail">
                <div class="">
                <?php echo $row_select['product_brand_name']; ?>
                </div>
                
            </div>
            <div class="cont-oder">
                <?php echo $row_select_oder['oder_cont_product']; ?>
            </div>
        </div>
        </a>
        <?php }?>
    <?php  }catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
               //เคลีย์ค่าในการดึงข้อมูล
                ?>
<!--end new product -->

       
        
    </div>

    
</body>
</html>