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
        .inter-login{
            display:flex;
            background:#fff;
            width: 900px;
            height: 400px;
            position: fixed;
            left:225px;
            top:125px;
        }
        .inter-login > div{
           
            width: 450px;
            height: 400px;
            border:1px solid white;
        }
        .log-in-user{
            display:flex;
            flex-direction:column;
            /* background:red; */
      
        }
        .log-in-user > div{
            /* background:blue; */
           
            width: 400px;
            height: 100px;
        
            margin: 15px auto 0px 40px;
            

        }
        .log-in-user > div > input{
            width: 400px;
            height: 40px;
            border-radius:5px;
            border:1px solid #555;
            color: #555;
            padding-left:10px;
          
        }
        /* right */
        .log-in-sof{
            /* background:blue; */
            display:flex;
            flex-direction:column;
            padding:20px ;

        }
        .log-in-sof > div{
            margin-top:110px;
            margin-left:40px;
        }
        .log-in-sof > div>div,.log-in-sof > div>input{
            /* background:red; */
            width: 300px;
            height: 40px;
            border-radius:5px;
            /* border:1px solid #555; */
            margin:10px auto 5px 0px;
            text-align:center;
            padding-top:5px;
            font-size:20px;
            color:white;
            opacity:.8;
            border:none;
           
        }
        .log-in-sof > div>input{
            background:orange;
        }
        .Face-book{
            background:blue;
        }
        .Google{
            background:red;
        }
        .diplay-none{
            display:none;
        }

        

    </style>
</head>
<body>
<form action="check-user.php" method = "post">
    <div class="inter-login">
        <div class="log-in-user">
            <div class="">
                <h3>Welcome! Please Login to continue.</h3>
                <a href="">New member? Register here.</a>

            </div>
            <div class="">
                
                <p>Phone Number or Email</p>
                <input type="gmail" value="Please Enter your Phone Number or Email "name="user">
            </div>
            <div class="">
                <p>Password</p>
                <input type="password" value="Please Enter your PassWord " name="password">
            </div>
        </div>
        <div class="log-in-sof">
            <div class="">
                <input type="submit" value="log-in">
                
                <p>Or, login with</p>
                <div class="Face-book">
                <h3>Face book</h3>
                </div>
                <div class="Google">
                <h3>Google</h3>
                </div>
            </div>

        </div>
    </div>
    </form>
    
</body>
</html>