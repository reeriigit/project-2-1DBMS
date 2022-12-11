 <?php include "barmenu-admin.php"; ?> 
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>เเสดงข้อมูลสินค้าทั้งหมด</title>
        <!-- <link href= "../../css/style.css" rel = "stylesheet">   -->
        
       <style>
            .bar-button{
                display:flex;
            }
            .bar-button div{
                width: 150px;
                border: 1px solid black;
                margin-left:10px;
                border-radius:20px;
                text-align:center;
                background:#555;
                color:white;
                border-color: #96D4D4;
            }
            .bar-button div:hover{
                background:#96D4D4;
            }
            th, td {
                 border-color: #96D4D4;
                }
                .huako{
                    position: absolute;
                    background:linear-gradient(30deg,#000,#555);
                    width:500px;
                    height: 100px;
                    left:400px;
                    border-radius:250px;
                    padding: 15px;
                    text-align:center;
                    color:white;
                    font-size:50px;
                    
                }
            .tab-huako{
                margin: 10px;
                position: relative;
                height: 100px;
            }
         
         /* body{
            min-height: 100vh;
            background: linear-gradient(#2b1055,#7597de);
        } */
  

            
        </style>
    </head>
    
    <body>
  
    
        <div class="tab-huako"><div class="huako">PRODUCT TABLE</div></div>
        
  
    
   <center> 
        
        <table border = "1" class="table table-dark table-striped">
         <thead >
            
            <tr>
                <th>TABLE NAME</th>        
            </tr>
            </thead>
            <tbody style = "">
          
            <tr>
                <td>
                    <a href="product_brand_select.php"  >
                    <div>PRODUCT BRAND</div>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="product_nature_select.php"  >
                    <div>PRODUCT NATURE </div>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="product_type_select.php"  >
                    <div>PRODUCT TYPE</div>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="product_select.php"  >
                    <div>PRODUCT</div>
                    </a>
                </td>
            </tr>
            
            
            

            </tbody>
          
   
        </table>
        
        </center>
      
   
    </body>

</html>
