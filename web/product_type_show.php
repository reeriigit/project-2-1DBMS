

<?php include "../connect/connect_db.php"; ?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link href= "../css/home.css" rel = "stylesheet">  -->
<style>

body{
  background:rgb(228, 228, 228);
}
/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
 
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
/* =============================== */
.bar-time-shale{
  display:flex;
  /* background:red; */
  height: 60px;
  padding-left:20px;
  border: 1px solid black;
  border-radius:5px;
}
.bar-time-shale .block-time{
  margin-left:15px;
  width:350px;
  height: 60px;
  display:flex;
  overflow:hidden;
}
.block-time-1 div{
  margin-left:12px;
  width:200px;
  height: 60px;
  display:flex;
  text-align:center;
  justify-content:center;
  

}
#mess{
  padding: 20px;
  color:red;
  
}
.block-time-1 #time-shale{
  display:flex;
  padding:5px;
  height: 50px;
  justify-content:center;
  padding-top:10px;
  
}
#time-shale div{
  background:red;
  justify-content:center;
  padding-bottom:5px;
  width: 40px;
  height: 40px;
  border-radius:10px;
  color:white;
  
}
.block-product{
  /* background:red; */
  margin:50px 80px auto 80px;
  display:grid;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr ;
  
}
.block-product .block-card{
  width:200px;
  height:350px;
  /* border:2px solid black; */
  margin-top:100px;
  background:white;
  position: relative;
}
.block-product .block-card img{
  width:196px;
  height:175px;
}
#detail-sale{
  width:196px;
  height:120px;
  padding: 10px;
  /* background:green; */

}
#botton-sale{
  width: 80px;
  height:40px;
  position: absolute;
  bottom:10px;
  left: 60px;
  border: 2px solid red;
  color:red;
  font-size:12px;
  padding:8px;
}
/* product */
.bar-time-shale{
  position: sticky;
  top: 90px;
  background:white;
  z-index: 1;
}
#hovershadow:hover{
  box-shadow:0 3px 3px 0 rgb(119, 113, 113);
  z-index: .2;
}
</style>
</head>
<body>
<?php include "barmenu.php"; ?>

<?php 


$col_name = $_REQUEST['col'];
$table_name = $_REQUEST['table'];
 $table_name = "WHERE $table_name  = $col_name ";

                    try{ $sumslide = 1;
                    
                        $sql_select= $conn->prepare("SELECT *
                        FROM product_tb
                            LEFT JOIN product_brand_tb ON product_brand_tb.product_brand_id = product_tb.product_brand 
                            LEFT JOIN product_type_tb ON product_type_tb.product_type_id = product_tb.product_type 
                            LEFT JOIN product_nature_tb ON product_nature_tb.product_nature_id = product_tb.product_nature
                            $table_name
                        ");
                        $sql_select->execute();//สั่งให้ sql_select ทำงาน
                       
                ?>
<div class="block-product">
<?php  while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){ ?>
  <div class="block-card" id="hovershadow">
  <img src="../admin/product/img/<?php echo $row_select['product_file']; ?>" >
    <div id="detail-sale">
     <h3><?php echo $row_select['product_nature_name']; ?></h3>
     <h3><?php echo $row_select['product_brand_name']; ?></h3>
     <h3>$<?php echo $row_select['product_price']; ?></h3>
    </div>
    <a href="purchase.php?product_id=<?php echo $row_select['product_id'];  ?>">
      <div id="botton-sale"><p>BUY NOW</p></div>
    </a>
  </div>
  <?php }?>

</div>
<?php  }catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
               //เคลีย์ค่าในการดึงข้อมูล
          // $conn = null;      ?>
<!--end new product -->

  




</script>

</body>
</html> 

