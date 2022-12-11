
<?php include "../connect/connect_db.php"; ?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


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
</style>
</head>
<body>
<?php include "barmenu.php"; ?> 



<?php 


                    try{ $sumslide = 1;
                    
                        $sql_select= $conn->prepare("SELECT *  
                        FROM product_tb
                        LEFT JOIN product_type_tb
                        ON product_tb.product_type = product_type_tb.product_type_id 
                        LIMIT 4");
                        $sql_select->execute();//สั่งให้ sql_select ทำงาน
                       
                ?>

<div class="slideshow-container">
<?php  while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){ ?>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../admin/product/img/<?php echo $row_select['product_file']; ?>" style="width:100%; height: 600px;">
  <div class="text">Caption Text</div>
</div>
<?php $sumslide =$sumslide +1; }?>




<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
<?php $i = 1; while($i<=$sumslide){ ?>
  <span class="dot" onclick="currentSlide(<?php echo $i; ?>)"></span> 
  <?php $i = $i+1; } ?>
</div>

  

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

</body>
</html> 
<?php  }catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
               //เคลีย์ค่าในการดึงข้อมูล
          // $conn = null;      ?>
<!--end new product -->
