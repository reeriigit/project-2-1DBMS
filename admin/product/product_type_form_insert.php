<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href= "../../css/style.css" rel = "stylesheet">     
<title>เเบบฟอร์มกรอกประเภทข้อมูลสินค้า</title></head>
<body>
    <div class="container">
    <form action="product_type_insert.php" method="post">
    <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลประเภทสินค้า</h1></td>
                </tr>
                <tr>
                    <td>ชื่อประเภทข้อมูลสินค้า</td>
                    <td><input type="text" name="ftype"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูลสินค้า" id ="btn-success"></td>
                </tr>
            </table>
 
    </form>
    </div>
</body>
</html>
