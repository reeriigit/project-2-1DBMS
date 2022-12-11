<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "../connect/connect_db.php"; ?> 
    <title>Document</title>
    <style>
        *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  }
 
  /*.blocks{
    position: absolute;
    width: 400px;
    height: 100px;
    background-color:;
    margin :100px auto auto 900px;
    transform: rotate(130deg);
    color:white;

  }*/
  .blocks-1{
    position: absolute;
    width: 400px;
    height: 500px;
    animation-name:blockwell1;
    animation-duration:4s;
	border-top: 550px solid transparent;
	border-right: 500px solid #555;
	border-bottom: 0px solid transparent;
    margin :60px auto auto 840px;
  }
  .blocks-2{
    position: absolute;
    width: 400px;
    height: 500px;
    animation-name:blockwell2;
    animation-duration:4s;
	border-top: 550px solid transparent;
	border-right: 500px solid #555;
	border-bottom: 0px solid transparent;
    margin :10px auto auto 10px;
    transform: rotate(180deg);
  }
  
  .wellcome{
    background-color:red;
    position: absolute;
    width: 400px;
    height: 100px;
    animation-name:wellcome;
    animation-duration:2s;
    padding: 14px;
    text-align:center;
    margin :250px 500px auto 500px;
  }
  .wellcome h1{
    animation-name:h1well;
    animation-duration:7s;
    color:white;
  }
  @keyframes h1well{
    from{
      opacity: 0;

    }
    to{
      opacity: 1;
    }
  }
  @keyframes wellcome{
    from{
      width:0px;

    }
    to{
      width: 400px;
    }
    
  }
  @keyframes blockwell1{
    from{
      margin :10px 500px auto 350px;
    }
    to{
      margin :60px auto auto 840px;
    }
  }
  @keyframes blockwell2{
    from{
      margin :100px 50px auto 300px;
    }
    to{
      margin :10px auto auto 10px;
    }

  }
   /**start pho on bar  */
  #onbar img{
    width:100%;
    height: 100%;
    opacity:.4;
  }
  #onbar{
    background-color:black;
    overflow:hidden;
    
  }
   /**end pho on bar  */

  
  .headder-bar{
    flex-direction:row;
    display: grid;
    grid-template:
    'data data data data' 20px
    'loco menu menu advert'60px;
    background-color:#000;
    position: sticky;
    top:0;
    z-index: 3;
    

}
.data{
    grid-area:data;
    background:red;
    height: 12px;
}
.loco{
    grid-area:loco;
    justify-content: center;
    background-color:;
}
.menu{
    background-color:;
    grid-area:menu;
    padding-left:1.4rem;
    padding: 14px;

}
.advert{
    background-color:;
    grid-area:advert;
    justify-content: center;
}
.menu ul{
    display: flex;
    list-style-type: none;
    
}
.menu ul li a{
    background:;
    margin: 10px;
    padding: 14px;
    width: 200px;
    height: 200px; 
    text-decoration: none;
    color:white;
}
.menu ul li a:hover{
  background-color:  #555;
  animation-name:bttslid;
  animation-duration:2s;
}
.headder-bar .menu form{
           position: relative;
           left: 600px;
           top:-70px;
           width: 450px;
           height: 40px;
       }
       .headder-bar .menu form input{
           top:0px;
           width: 400px;
           height: 40px;
           border-radius:10px;
           padding-left:10px;

       }
       .headder-bar .menu form button{
           position: absolute;
           top:0px;
           right:5px;
           width: 40px;
           height: 40px;
           border-radius:10px;
       }
/* end bar menu  */
/** stat introduce */
@keyframes bttslid{
  from{
    width: 0;
  }
  to{
    width: 100%;
  }
}
.back-introduce{
  background-image: linear-gradient(180deg,#000,#555);
  width:100%;
  height: 500px;
  opacity:1;

}
.back-introduce{
  display: grid;
    grid-template:
    'introduce-1 introduce-2';
  padding: 50px 100px 50px 100px;

}


.introduce-1{
  position: absolute;
  grid-area:introduce-1;
  background-color:;
  width: 600px;
  height:300px;
  margin:50px auto auto 210px;
  z-index: 1;
  transition: margin 1s ease-in 0s; 

}
.introduce-1 #photonew{
  background-color:;
  width: 300px;
  height:300px;
  border-radius:250px;
  overflow:hidden;
  z-index: 1;
}

.introduce-1:hover{
  
  margin:50px auto auto -100px;


  z-index: 1;
}
.introduce-1 img{
  width: 300px;
  height: 300px;
}


.masege-1{
  display:absolute;
  width: 300px;
  height: 200px;
  background-color:;
  margin:100px auto auto 250px;
  color:white;
  overflow:hidden;
}

.introduce-2{
  position: relative;
  grid-area:introduce-2;
  background-color:;
  width: 300px;
  height:300px;

  justify-content:center;
  text-align:center;

  margin:50px auto auto  100px;
  z-index: 1;
  transition: width 1s ease-in 0s; 
 

}
.introduce-2:hover{
  border-radius:20px;
}
.introduce-2 .block{
  position: absolute;
  background-color:;
  border-radius:25px;
  margin: 20px;
  width: 120px;
  height:120px;
  transition:  width 1s ease-out 0s;
  background-image: linear-gradient(180deg,#555,#fff);
  overflow:hidden;
}
.introduce-2 .block-2{
  margin: 150px;
}
.introduce-2 .block-3{
  margin-left: 150px;
}
.introduce-2 .block-4{
  margin-top: 150px;
}

.introduce-2 .block-1:hover{
  margin: -40px;
  width: 350px;
  height:250px;
  z-index: 1;
}
.introduce-2 .block-2:hover{
  margin-left:80px ;
  margin-top:80px;
  width: 350px;
  height:250px;
  z-index: 1;
}
.introduce-2 .block-3:hover{
  margin-left:80px ;
  margin-top:-40px;
  width: 350px;
  height:250px;
  z-index: 1;
}
.introduce-2 .block-4:hover{
  margin-left:-40px ;
  margin-top:80px;
  width: 350px;
  height:250px;
  z-index: 1;
}

.introduce-2 .block img{
  width: 350px;
  height:250px;
}

.masege-2{
  display:absolute;
  width: 300px;
  height: 200px;
  background-color:;
  margin-left:300px ;
  margin-top:-280px;
  color:white;
  overflow:hidden;

}
.introduce-2{
  grid-area:introduce-2;
  background-color:;

}
/** entroduce */

.back-indreverse{
  background-image: linear-gradient(180deg,#555,#fff);
  width:100%;
  height: 500px;

}
.newproduct{
  /* background-image: linear-gradient(0deg,#555,#fff); */
  background:;
  display:flex;
  height: 500px;
  padding:20px;
  padding-top:200px;
  position:relative;
  border-bottom:5px solid red;

}

#section-pdn{
  background:;
  top: 15px;
  left: 0px;
  width:500px;
  height: 60px;
  position:absolute;
  color:white;
  background:linear-gradient(90deg,#555,#fff);
  padding-left:15px;
  border-bottom:5px solid red;

}
.time-shale{
  background:white;
  position:absolute;
  top: 120px;
  left: 0px;
  width: 100%;;
  height: 60px;
  border: 1px solid #555;
  display:flex;
  
}
.time-shale div{
  margin:5px;

  width: 150px;;
  height: 50px;
  padding: 1px;
}
.time-shale div:first-child{
  padding:8px;
}
.time-shale div:last-child{
  padding:5px;
}
.time-shale div:nth-child(2){
  padding:8px;
}
.time-shale a div{
  padding:5px;
  position:absolute;
  text-align:center;
  height: 40px;
  top: 5px;
  right: 5px;
  color:red;
  border: 3px solid red;
  transition:background-color 2s ease 0s;


}
.time-shale a div:hover{
  background-color:red;
  color:white;
}
#time-shale-block{
  display:flex;
  justify-content:center;
  
}

#time-shale-block div{
  /* background:red;  background:red; */
  width:35px;
  height: 35px;
  border-radius:5px;
  color:white;
  padding: 5px;
}

.product-n{
  /* background:yellow; */
  width: 250px;
  height: 250px;
  margin: 12px;
  border-radius:15px;
  overflow:hidden;
  position:relative;
  
  
}

.product-n img {
  width: 250px;
  height: 250px;
}
.product-n #block-mess{
  position:absolute;
  background:;
  width: 250px;
  height: 50%;
  bottom:0;
  opacity:0;
  transition:  opacity 0.8s ease-out 0s;
  

}

.product-n #block-mess:hover{
  opacity:1;
  color:white;
  padding: 15px;
  background:#555
}


.pdtype div div{
    background-color:#ffff;
    border: 0.5px solid #ccc;
    height: 120px;
    
  }

  /* laz malll */
  .block-laz-1{
    display:flex;
    background:white;
    width:200px;
    height:250px;
    flex-direction:column;
    position: relative;
    margin: 10px;
    border:1px solid #555;
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
  /* hover shadow */
  #hovershadow:hover{
  box-shadow:0 3px 3px 0 rgb(119, 113, 113);
  z-index: 1;
}
/* start */
.backgrond-buety{
  position: relative;
  width: 100%;
  height: 450px;
  background:#555;

  z-index: 1;
}
.backgrond-buety .block-1{
  position: absolute;
    width: 400px;
    height: 400px;
	border-top: 450px solid transparent;
	border-right: 400px solid #000;
	border-bottom: 0px solid transparent;
  margin :0px auto auto 940px;
  opacity:.2;

}
.backgrond-buety .block-2{
  position: absolute;
    width: 400px;
    height: 400px;
	border-top: 450px solid transparent;
	border-right: 400px solid #000;
	border-bottom: 0px solid transparent;
  margin :25px auto auto 20px;
  opacity:.2;
  transform: rotate(90deg);
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
/*  */
.introduc-buety{
  position: absolute;
  width:300px;
  height: 80px;
  background:red;
  color:white;
  bottom: 20px;
  left: 20px;
  padding-top: 20px;
  padding-left: 80px;
 
}
.parent-block-near-flash{
  position: relative;
  left:0px;
  width: 1400px;;
  height: 500px;
  background:linear-gradient(90deg,#555,#fff);
  z-index: -1;
  opacity:.5;
  /* opacity:.8; */
}
.block-near-flash{
  opacity:.1;
}
.block-near-flash-1{
  position: absolute;
    width: 400px;
    height: 400px;
	border-top: 450px solid transparent;
	border-right: 400px solid #555;
	border-bottom: 0px solid transparent;
  margin :50px auto auto 940px;


}


.block-near-flash-2{
  position: absolute;
  width: 400px;
  height: 400px;
	border-top: 450px solid transparent;
	border-right: 400px solid #555;
	border-bottom: 0px solid transparent;
    margin :10px auto auto 0px;
    transform: rotate(180deg);


}


.block-near-flash-3{
  position: absolute;
  width: 400px;
  height: 400px;
	border-top: 450px solid transparent;
	border-right: 400px solid #555;
	border-bottom: 0px solid transparent;
    margin :50px auto auto 200px;
    transform: rotate(0deg);


}

.block-near-flash-4{
  position: absolute;
  width: 400px;
  height: 400px;
	border-top: 450px solid transparent;
	border-right: 400px solid #555;
	border-bottom: 0px solid transparent;
    margin :10px  auto auto 800px;
    transform: rotate(180deg);
;

}
footer{
  height: 500px;
  background:#000;
}
a{
  text-decoration:none;
}





   
    </style>
</head>
<body >
<div class="wellcome" id="home">
    <h1>WELL COME</h1>
</div>
<div class="blocks-1"></div>
<div class="blocks-2"></div>
<div class="blocks-3"></div>
<div id="onbar"><img src="sam01.jpg" alt=""></div>

<div class="headder-bar" >
    <div class="data"></div>

   <div class="loco">
  
   </div>
   <div class="menu">
   <ul>
    <li><a class="" href="#home" >Home</a></li>
    <li><a href="#newproduct">newproduct</a></li>
    <li><a href="#brand">type product</a></li>
    <li><a href="#footer">footer</a></li>
    <li><a href="oder-yet-select.php">Cart</a></li>
   </ul>
   <li>
    <form action="action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    </li>

   </div>
   <div class="advert">
    
  </div>
</div>

<!-- start data in body-->

<div class="back-introduce">
  <div class="introduce-1 ">
    <div id="photonew"><img src="sam01.jpg" alt=""></div>

    <p></p>
  </div>
  <div class="masege-1">
    <h3>product</h3>
    <p>lorew you need buy lore2 Lorem <br> ipsum dolor sit amet,
       consectetur adipisicing elit. Itaque a quis in <br> cumque? 
       Consectetur sapiente <br> animi sint facere earum <br> voluptatum
       iste natus eveniet <br> deleniti dolorem ut architecto.
       </p>

  </div>
  

  <div class="introduce-2">
  
    <div class="block-1 block">
    
    <img src="../admin/product/img/PRADA.jpg" alt="">
    </div>
  
    
    <div class="block-2 block">
   
    <img src="../admin/product/img/ADIDAS.jpg" alt="">
    </div>
    <div class="block-3 block">
    
    <img src="../admin/product/img/GUCCI.jpg" alt="">
    </div>
    <div class="block-4 block">
   
    <img src="../admin/product/img/off-white.jpg" alt="">
    </div>
  </div>

  
</div>



<?php 
 try{ $i = 0;
                    
  $sql_select= $conn->prepare("SELECT *
  FROM product_tb
      LEFT JOIN product_brand_tb ON product_brand_tb.product_brand_id = product_tb.product_brand 
      LEFT JOIN product_type_tb ON product_type_tb.product_type_id = product_tb.product_type 
      LEFT JOIN product_nature_tb ON product_nature_tb.product_nature_id = product_tb.product_nature
  limit 5");
  $sql_select->execute();//สั่งให้ sql_select ทำงาน

?>
<div id="newproduct"></div>

<!-- Fals sel  -->

<div  class="newproduct container">
    <div id="section-pdn"><h1>Flash Sale</h1></div>
    <div class="time-shale">
      <div>On shale  </div>
      <div align="right">indin in</div>
      <div id="time-shale-block">
        <div >12</div>
        <div>00</div>
        <div>11</div>
      </div>
      <a href="flashsale.php"><div>Shop all product</div></a>
    </div>
    <?php  while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){ ?>
    <div class="product-n" id ="hovershadow">
      <img src="../admin/product/img/<?php echo $row_select['product_file']; ?>" alt="">
      <a href="purchase.php?product_id=<?php echo $row_select['product_id'];  ?>">
      <div id="block-mess">
        <p><?php echo $row_select['product_nature_name']; ?></p>
        <p><?php echo $row_select['product_brand_name']; ?></p>
        <p>$<?php echo $row_select['product_price']; ?></p>
      </div>
      </a>
    </div>
    <?php }?>
    <?php  }catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
               //เคลีย์ค่าในการดึงข้อมูล
                ?>
<!--end new product -->

</div>
<!-- typr -->
<div><br><br></div>
<!-- ตกเเต่ง -->





<!-- กเเต่ง  -->


<!-- -------------------------------------------------------------------------------- -->

<div class="backgrond-buety">
  <div class="block-radius">
    <img src="sam01.jpg" alt="">
    
  </div>
  <div class="animation-buety">
    <h2>WELCOME TO MY PRODUCT</h2>
  </div>
  <div class="introduc-buety">
    <h2>BUY NOW</h2>

  </div>
  <div class="block-1">

  </div>
  <div class="block-2">

  </div>
  
</div>
<!-- ----------------------------------------------------------------------------------- -->
<!--start type -->



<div><br></div>
<!-- start LAZ MALL -->

<?php 
 try{ $i = 0;
                    
  $sql_select= $conn->prepare("SELECT *
  FROM product_brand_tb LIMIT 5 ");
  $sql_select->execute();//สั่งให้ sql_select ทำงาน
 

?>


<div id="brand" class="lazmall-block newproduct container">
<div id="section-pdn"><h1>SAM MALL</h1></div>
<div class="time-shale">
      <a href="product_type.php"><div>Shop More </div></a>
    </div>
  <?php  while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){ ?>
  <a href="product_type_show.php?col=<?php echo $row_select['product_brand_id']; ?>&table=product_brand">
  <div class="block-laz-1" id ="hovershadow">
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
  </a>
  <?php }?>
    <?php  }catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
               //เคลีย์ค่าในการดึงข้อมูล
                ?>
<!--end new product -->
</div>
<div><br><br></div>

<!--start type -->


<!--end type -->
<!---------------------------------------------------------- -->
<!-- -->
<!-- start backgrond back sud -->
<div class="parent-block-near-flash">
<div class="block-near-flash-1 block-near">1</div>
<div class="block-near-flash-2 block-near">2</div>
<div class="block-near-flash-3 block-near">3</div>
<div class="block-near-flash-4 block-near">4</div>

</div>

<div><br><br></div>
<!-- end backgrond back sud -->

<?php
                try{ $i = 0;
                    
                    $sql_select= $conn->prepare("SELECT * FROM product_nature_tb ORDER BY product_nature_id  LIMIT 4");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                   
            ?>
<!---------------------------------------------------------- -->
<div id="type" class="container pdtype">
  <div class="row">
   <?php  while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){ ?>
   
    <div class="col-sm-3" id ="hovershadow">
    <a href="product_type_show.php?col=<?php echo $row_select['product_nature_id']; ?>&table=product_nature">
      <h4 class=""><?php echo $row_select['product_nature_name']; ?></h4>
      </a>
    </div>
  
    
    <?php }?>

  </div>
</div>

<?php  }catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
               //เคลีย์ค่าในการดึงข้อมูล
                ?>

<div><br><br></div>
<!--end type -->
<!---------------------------------------------------------- -->


</body>
<!-- scripe -->
<!-- footer -->
<footer id="footer">

</footer>

</html>
