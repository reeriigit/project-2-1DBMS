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
        .purchase{
            /* background:green; */
            height:700px;
            width: 1200px;
            margin:70px 70px auto 70px;
            display: grid;
            grid-template:
            'block-img block-pd block-detail ';
            /* border: 1px solid red; */
            background:#fff;
          
        }
        .block-img{
            grid-area:block-img;
            /* background:red; */
            width: 350px;
            height: 500px;
            padding:15px;
            position: relative;
            
        }
        .block-img .block-1{
            /* background:green; */
            position: absolute;
            width: 320px;
            height: 70px;
            bottom: 50px;
            display:flex;
            padding:10px;
            border-radius:5px ;
            border:1px solid #555;
            overflow-x:auto;
         
        }
        .block-img .block-1 img{
            margin-left:5px;
            width: 50px;
            height: 50px;
         
        }
        .pdimg{
            background:gray;
            width: 320px;
            height: 300px;
            overflow:hidden;

        }
        .pdimg .mySlides{
            /* position: relative; */
            /* background:red; */
            width: 320px;
            height: 300px;
        }
       
    
        .pdimg .mySlides img{
           
            width: 320px;
            height: 300px;
           
        }
       
       
        .block-pd{
            grid-area:block-pd;
            /* background:yellow; */
            width: 490px;
            height: 100%;
            border-bottom:1px solid #555;
 
        }
        .block-pd .block-pd-1{
            /* background:red; */
            width: 490px;
            height: 30%;
        }
        .block-pd .block-pd-2{
            position: relative;
            /* background:blue; */
            width: 490px;
            height: 20%;
            border-bottom:1px solid #555;
        }
        .block-pd .block-pd-2 .block-1{
            /* background:red; */
            width: 300px;
            height: 40px;
            position: absolute;
            bottom: 5px;
            left:20px;
        }
        .block-pd .block-pd-2 .block-1 #quantity{
            position: absolute;
            border-radius:5px;
            padding-left: 30px;
            margin-left:190px;
            width: 70px;
            height: 40px;
            font-size:20px;
            border:1px solid #555;
        }
        .block-pd .block-pd-2 .block-1  #quantity-input{
            position: absolute;
            opacity:0;
        }
        .block-pd .block-pd-3{
            width: 490px;
            /* background:blue; */
            /* border-bottom:1px solid #555; */
        }
        .block-detail{
            grid-area:block-detail;
            background:#F8F8FF;
            width: 350px;
            height: 500px;
            display:flex;
            flex-direction:column;
            border-bottom:1px solid #555;

        }
        .block-detail div{
            /* background:blue; */
            width: 350px;
            height: 100px;
            margin-top:10px;
            justify-content:center;
            padding-left:30px;
            padding-top:30px;
            /* border:1px solid #555; */
        }
        .block-pd-4{
            /* background:red; */
            width: 490px;
            height: 100px;
            display:flex;
            padding-top:10px;
        }
        .block-pd-4 .button{
            margin-left:10px;
            width: 230px;
            height: 50px;
           
            color:white;
            border-radius:5px;

        }
        .block-pd-4 .button-1{
            background:red;

        }
        .block-pd-4 .button-1 input{
            background:red;
            width: 230px;
            height: 50px;
            font-size:20px;
            color:white;
            border-radius:5px;
            border:none;

        }
        .block-pd-4 .button-2{
            background:orange;

        }
        .block-pd-4 .button-2 >form >input{
            width: 230px;
            height: 50px;
            background:orange;
            padding-left: 55px;
            padding-top: 5px;
            color:white;
            font-size:20px;
            border-radius:5px;
            border:none;
        }
      

       .bar-comment{
        margin-top:75px;
        margin-left:75px;
        background:white;
        width: 1000px;
        height: 400px;
       }
       .bar-comment div{
        margin-top:10px;
        background:white;
        width: 1000px;
        height: 120px;
        padding: 15px;
       }
       #noneform{
        display:none;
       }
       #width-none{
        display:none;
       }
       .deatail-pd{
        /* border:1px solid #555; */
        height:120px;
        overflow:hidden;
       }


    </style>
    <?php include "../connect/connect_db.php"; ?> 
</head>
<body>

<?php 
$get_update_id=$_REQUEST['product_id'];
 
 try{
    $sql_select= $conn->prepare("SELECT * FROM product_tb 
    LEFT JOIN product_brand_tb ON 
    product_brand_tb.product_brand_id = product_tb.product_brand 
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
<!--  -->

<?php
try{ $sumslide = 1;
                    
                    $sql_select_img= $conn->prepare("SELECT * FROM milti_img_tb WHERE product_id = $get_update_id");
                    $sql_select_img->execute();//สั่งให้ sql_select ทำงาน
                   
            ?>


<?php include "barmenu.php"; ?> 
    <div class="purchase container">
        <div class="block-img">
            <div class="pdimg">
                
                <!--  -->
                       <?php  while($row_select_img = $sql_select_img->fetch(PDO::FETCH_ASSOC)){ ?>
                    <div class="mySlides fade" >
                            <img src="../admin/product/uploads/<?php echo $row_select_img['milti_img']; ?>">
                    </div>
                 
                        <?php $sumslide =$sumslide +1; }?>
                        <!--  -->
                        <?php if($row_select_img==NULL){?>
                    <div class="mySlides fade" >
                        <img src="../admin/product/img/<?php echo $row_select['product_file']; ?>" >
                    </div>
                        <?php }?>
                         <a class="prev" onclick="plusSlides(-1)">❮</a>
                         <a class="next" onclick="plusSlides(1)">❯</a>
                       
                    <div class="buttom-slide">
                        <?php $i = 1; while($i<=$sumslide){ ?>
                        <span class="dot" onclick="currentSlide(<?php echo $i; ?>)"></span> 
                        <?php $i = $i+1; } ?>
                    </div>

                    <?php  }catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
               //เคลีย์ค่าในการดึงข้อมูล
          // $conn = null;      ?>
<!--end new product -->


          
            
                 <!--  -->
                 <?php 
 try{ 
                    
  $sql_selects= $conn->prepare("SELECT * FROM milti_img_tb  WHERE product_id =  $get_update_id limit 5 ");
  $sql_selects->execute();//สั่งให้ sql_select ทำงาน
 

?>

                 <!--  -->
            <div class="block-1">
            <?php  while($row_selects = $sql_selects->fetch(PDO::FETCH_ASSOC)){ ?>
                <img src="../admin/product/uploads/<?php echo $row_selects['milti_img']; ?>">
                <?php }?>
                <?php if($row_selects==NULL){?>
                    <img src="../admin/product/img/<?php echo $row_select['product_file']; ?>" >
              <?php  }?>
   

            </div>
             <?php  }catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
               //เคลีย์ค่าในการดึงข้อมูล
                ?>

            </div>
        </div>
        <div class="block-pd">
            <div class="block-pd-1">
                <div class="deatail-pd"><h3><?php echo $row_select['product_details']; ?></h3></div>
                <br>
                <h2><?php echo $row_select['product_nature_name']; ?></h2>
                <br>
                <h2><?php echo $row_select['product_brand_name']; ?></h2>
            </div>
            <hr>
            <div class="block-pd-2">
                <h1 style="color:orange;">$<?php echo $row_select['product_price']; ?></h1>
                
                <div class="block-1">
                <form action="buy-order.php">
                    <input id="noneform" name="product_id" value="<?php echo $get_update_id?>">
                    <input id="noneform" name="user_id" value="">
                    <input id="noneform" name="file_name" value="buy_oder">
                    <input type="number" id="quantity" value="1" name="oder_count" min="1" max="100">
           
                </div>
            </div>
            <hr>
            <div class="block-pd-3">

            </div>
            <div class="block-pd-4">
                <div class="button-1 button">
                <input type="submit"  value="BUY NOW" id="quantity-input"  >
                 </form>
                </div>
                <div  class="button-2 button">
                    <form  action="oder-yet-insert.php">
                    <input id="noneform" name="product_id" value="<?php echo $get_update_id?>">
                    <input id="noneform" name="file_name" value="oder_yet">
                    <input id="noneform" name="user_id" value="1">
                    <input id="display-b" type="submit" value="Add To Cart">

                    </form>
                    
                
                </div>

            </div>
        </div>
        <div class="block-detail">
            <div class="block-detail-1">
            Delivery Options <br>	
            ปทุมวัน/ Pathum Wan in กรุงเทพมหานคร/ <br> Bangkok, 10110
            </div>
            <div class="block-detail-2">
                <p>
                Standard Delivery <br>Get by 20-24 Oct
                </p>
            </div>
            <div class="block-detail-3">
                <p>
                7 days return to seller
Change of <br> mind is not applicable <br>
Warranty not available
                </p>
            </div>
            <div class="block-detail-4">
            jukjikshop1
            </div>
        </div>
    </div>
    <div class="bar-comment container">
        <div class="block-c-1">
        Jelly Fiber 🍒 เจลลี่ไฟเบอร์

<br>
วิธีทาน ชงดื่มวันละ 1ซอง ก่อนเข้านอน

เลย อย. 11-2-02363-5-0003
<br>

1 กล่อง บรรจุ 5 ซอง



#JellyFiber #TheCharmingGarden
<br>

#เจลลี่ไฟเบอร์ # เจลลี่ #ไฟเบอร์ #Jelly #Fiber

        </div>
        <div class="block-c-2">
        Specifications of Jelly Fiber 🍒 เจลลี่ไฟเบอร์ ลดราคาพิเศษ
        <br>
        BrandCharmingSKU4112761517_
        <br>
         TH-16102318763Product FormSachet

        </div>
        <div class="block-c-3">
        Product details of Jelly Fiber 🍒 เจลลี่ไฟเบอร์ ลดราคาพิเศษ

        </div>
    </div>



    <div class="bar-comment container">
        <div class="block-c-1">
        Jelly Fiber 🍒 เจลลี่ไฟเบอร์

<br>
วิธีทาน ชงดื่มวันละ 1ซอง ก่อนเข้านอน

เลย อย. 11-2-02363-5-0003
<br>

1 กล่อง บรรจุ 5 ซอง



#JellyFiber #TheCharmingGarden
<br>

#เจลลี่ไฟเบอร์ # เจลลี่ #ไฟเบอร์ #Jelly #Fiber

        </div>
       
        <div class="block-c-2">

        </div>
    </div>

    
    <?php include "show_all_product.php"; ?>
</body>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</html>