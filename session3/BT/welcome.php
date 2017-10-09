<?php
	$fullname = $_POST['fullname'];
     $class = $_POST['class'];
     $age = $_POST['age'];
     $email = $_POST['email'];
     echo "Your name : ".$fullname."<br />";      
     echo "Your Class : ".$class. "<br />";
     echo "Your age :". $age. "<br />";
     echo "Your email" .$email. "<br/>";

//csdl-localhost
    $host="localhost"; // luôn luôn là localhost
	$fullname="root"; // name của mysql
	$class="root"; // Mysql class
	$age="root"; // Mysql age
	$email="root"; // Mysql email
	$db_name="bt1"; // tên database
	$tbl_name="sinhvien"; // tên table
 
// kết nối cơ sở dữ liệu
mysql_connect("$host", "$fullname", "$class", "$age", "$email")or die("Không thể kết nối");
mysql_select_db("$db_name")or die("cannot select DB");


//dang nhap
if (isset($_SESSION['fullname']) && $_SESSION['fullname']){
    echo 'Bạn đã nhập với tên là'. $_SESSION['fullname'];
}
if (isset($_SESSION['class']) && $_SESSION['class']){
    echo 'Bạn đã nhập với tên lớp là'. $_SESSION['class'];
}
if (isset($_SESSION['age']) && $_SESSION['age']){
    echo 'Bạn đã nhập tuổi là'. $_SESSION['age'];
}
if (isset($_SESSION['email']) && $_SESSION['email']){
    echo 'Bạn đã nhập email là'. $_SESSION['email'];
}
?>