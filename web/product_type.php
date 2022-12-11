<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href= "../css/home.css" rel = "stylesheet">  
    <style>
        .product-brand{
            /* background:red; */
            display:grid;
            grid-template-columns:repeat(5,250px);


        }
        .item-brand{
            
            /* background:green; */
            margin: 10px;
            width:200px;
            height: 250px;
            position: relative;
    margin: 10px;
    border:1px solid #555
        }
     

  
  .block-laz-1 #img-laz{
    /* background:red; */
    width:200px;
    height:65%;
  }
  .block-laz-1 #img-laz img{
    width:200px;
    height:100%;
  }
  .block-laz-1 #detail-laz{
    text-align:center;
    padding-top:30px;
   
    width:200px;
    height:35%;
  }
  .block-laz-1 #loco-laz{
    position: absolute;
    /* background:blue; */
    top:135px;
    left:70px;
    width:60px;
    height:60px;
    
  }
  .block-laz-1 #loco-laz img{
    width:60px;
    height:60px;
  }
  /* end laz mall */
  /* start slide */
  /* start */
.backgrond-buety{
  position: relative;
  width: 100%;
  height: 450px;
  background:#555;

  z-index: 1;
}
.block-radius{
  position: absolute;
  left: 1000px;
  width: 250px;
  height: 250px;
  background:#000;
  border-radius:250px;
  animation:block-radius 3s infinite alternate;
  overflow:hidden;


}
.block-radius img{
  width: 250px;
  height: 250px;
}
@keyframes block-radius{
  0%{
    border-radius:250px;
    left:0;
    top:0;
  }
  50%{
    border-radius:25px;
    animation-delay:5s;
    left:300;
    top: 15px;

  }
  100%{
    border-radius:25px;
    left:700;
    top: 15px;

  }

  
}
.animation-buety{
  position: absolute;
  top:100px;
  left: 500px;
  color:white;
  width: 450px;
  height: 200px;
  /* background:#000; */
  padding:15px;
  
  

}
.animation-buety h2{
  align-items:center;
  font-size:60px;
  animation:font-block 3s infinite alternate;
}
@keyframes font-block {
  0%{
    width:450px;
    opacity:0.1;
 

  }
  100%{
    width:450px;
    opacity:1;
   
    
  }
  
}


  

    </style>
    <title>Document</title>
</head>
<body>
<?php include "barmenu.php"; ?>
<!-- -------------------------------------------------------------------------------- -->

<div class="backgrond-buety">
  <div class="block-radius">
    <img src="sam01.jpg" alt="">
    
  </div>
  <div class="animation-buety">
    <h2>WELCOME TO MY PRODUCT</h2>
  </div>
  
</div>
<div><br><br></div>
<!-- ----------------------------------------------------------------------------------- -->
<!--start type -->
    <!-- start LAZ MALL -->
    <?php 
 try{ $i = 0;
                    
  $sql_select= $conn->prepare("SELECT *
  FROM product_brand_tb ");
  $sql_select->execute();//สั่งให้ sql_select ทำงาน
 

?>

<div class="container product-brand">
   
    <?php  while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){ ?>
      <a href="product_type_show.php?col=<?php echo $row_select['product_brand_id']; ?>&table=product_brand">
  <div class="block-laz-1 item-brand">
    <div id="img-laz">
      <img src="../admin/product/brand-img/<?php echo $row_select['product_brand_img']; ?>" alt="">
    </div>
    <div id="detail-laz">
    <?php echo $row_select['product_brand_name']; ?>
    </div>
    <div id="loco-laz">
      <img src="../admin/product/brand-img/<?php echo $row_select['product_brand_img']; ?>" alt="">
    </div>
  </div>
  <?php }?>
    <?php  }catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
               //เคลีย์ค่าในการดึงข้อมูล
                ?>
<!--end new product -->
</a>
</div>

</body>
</html>