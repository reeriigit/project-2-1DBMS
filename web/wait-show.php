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
  .show-wait{
    background:red;
    width:100%;
    height: 300px;
  }
  .select-but{
    display:flex;
    padding: 10px;
  }
  .select-but a {
    text-decoration:none;
  }
  .select-but a >div{
    border:2px solid red;
    width:660px;
    height: 50px;
    text-align:center;
    color:red;
    padding-top:10px;
    
  }
  .select-but a > .block-2{
    margin-left:10px;

  }
    </style>
</head>
<body>
    <div class="show-wait">
    </div>
    <div class="select-but">
        <a href="home.php">
        <div class="block-1">
            หน้าเเรก
        </div>
        </a>
        <a href="">
        <div class="block-2"></div>
        </a>
    </div>
    <?php include "show_all_product.php"; ?>
    
</body>
</html>