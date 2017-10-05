<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Form đăng nhập PHP</h1>
<form method="post" action="contact.php">
    Name : <input type="text" name="fullname" id="fullname" value="">
    Class : <input type="text" name="class" id="class" value="">
    Age : <input type="date" name="age" id="age" value="">
    Email :<input type="text" name="email" id="email" value="">
    <input type="submit" name="contact.action" value="gửi liên hệ">
</form>
<?php
    //code PHP xử lý validate
$error = array();
$data = array();
if (!empty($_POST['contact.action']))
{
    // Lấy dữ liệu
    $data['fullname'] = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';

    // Kiểm tra dữ liệu
    if (empty($data['fullname'])){
        $error['fullname'] = 'bạn chưa nhập Tên';
    }
}
?>
</body>
</html>