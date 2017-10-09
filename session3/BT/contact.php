<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Form đăng nhập PHP</h1>
<form method="post" action="welcome.php">
    Name : <input type="text" name="fullname" id="fullname" value="">
    <?php echo isset($error['fullname']) ? $error['fullname']: '';  ?>
    Class : <input type="text" name="class" id="class" value="">
    Age : <input type="date" name="age" id="age" value="">
    Email :<input type="text" name="email" id="email" value="">
    <?php echo isset($error['email']) ? $error['Email']: '';  ?>
    <input type="submit" name="contact.action" value="Gửi liên hệ"><a href="welcome.php"></a>
</form>
<?php
    //code PHP xử lý validate
$error = array();
$data = array();
if (!empty($_POST['contact.action']))
{   

    // Kiểm tra dữ liệu
    if (empty($data['fullname'])){
        $error['fullname'] = 'bạn chưa nhập Tên';
    }
    if (empty($data['email'])){
        $error['email'] = 'bạn chưa nhập email';
    }

    // Lưu dữ liệu
    if (!$error){
        echo 'Dữ liệu lưu trữ';
    }
    else{
        echo 'Dữ liệu chưa lưu trữ';
    }
}
?>
</body>
</html>