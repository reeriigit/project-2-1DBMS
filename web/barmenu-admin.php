<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href= "../css/home.css" rel = "stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "../connect/connect_db.php"; ?> 
    <title>Document</title>
    <style>
        .headder-bar .menu form{
           
            position: relative;
            left: 300px;
            top:-10px;
            width: 450px;
            height: 40px;
        }
        .headder-bar .menu form input{
            top:0px;
            width: 400px;
            height: 40px;
            border-radius:10px;


        }
        .headder-bar .menu form button{
            position: absolute;
            top:0px;
            right:5px;
            width: 40px;
            height: 40px;
            border-radius:10px;
        }


    </style>
</head>
<body>
<div class="headder-bar" >
    <div class="data"></div>

   <div class="loco">
  
   </div>
   <div class="menu">
   <ul>
    <li><a class="active" href="home.php">Home</a></li>
    <li><a href="flashsale.php">newproduct</a></li>
    <li><a href="product_type.php">type product</a></li>
    <li><a href="home.php#footer">footer</a></li>
    <li>
    <form action="action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    </li>
   </ul>

   </div>
   <div class="advert">
    
  </div>
</div>

</body>
</html>