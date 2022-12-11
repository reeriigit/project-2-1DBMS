<?php
echo $user = $_REQUEST['user'];
echo $pass = $_REQUEST['password'];
if($user=="admin"){
    echo "<script>window.location.href='../admin/product/';</script>";
}elseif($user=='user'){
    echo "<script>window.location.href='../web/home.php';</script>";
}

?>