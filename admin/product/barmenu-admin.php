<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href= "../../css/home.css" rel = "stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "../../connect/connect_db.php"; ?> 
    <title>Document</title>
    <style>
        .headder-bar .menu form{
           
            position: relative;
            left: 200px;
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
        /*  */
        .advert>div{
            position: absolute;
            /* background:red; */
            right:30px;
            width: 50px;
            height:50px;
            border-radius:25px;
            border:1px solid #555;
            
        }
        .advert>div:hover .bar-select{
            display:block;
        }
        .bar-select{
            /* background:green; */
            position: absolute;
            background:white;
            width: 300px;
            height:auto;
            left:-220px;
            display:none;
            padding-left:30px;
        }
        .bar-select > ul>li{
            width: 300px;
            height:50px;
            border-bottom:1px solid #555;
            padding-top:20px;
        }
        a{
            text-decoration:none;
        }
        /*  */


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
    <li><a href="show-table.php">table</a></li>
    <li><a href="product_type.php"></a></li>
    <li><a href="home.php#footer"></a></li>
    <li><a href="oder-yet-select.php"></a></li>
    
   
   </ul>

   </div>
   <div class="advert">
        <div class="">
            <div class="bar-select">
                <ul>
                    <li><a class="active" href="../../registeration/index.php">LOG-IN</a></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
            </div>

        </div>
    
  </div>
</div>

</body>
</html>
<!--  -->
