<!DOCTYPE html>
<html>
    <head>
        <title></title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
<?php
   if( $_GET["name"] || $_GET["age"] || $_GET["school"] || $_GET["gender"])
   {
      echo  $_GET['name']. "<br />";
      echo "Bạn ". $_GET['age']. " tuổi."."<br />";
      echo "Bạn học ". $_GET['school']. "<br />"." trường.";
      echo "Giới tính ". $_GET['gender']. "<br />";
      exit();
   }
?>
 <h3>Danh sách lớp PHP09</h3>
      <form class="form1" method="GET">
         Họ tên: <input type="text" name="name" /><br><br>
         Tuổi: <input type="number" name="age" /><br><br>
         Giới tính : <input type="text" name="gender" /><br><br>
         Trường : <input type="text" name="school"><br><br>
         <input type="submit" />
    </div>
      <?php
         $name = array(' Lê Tùng Lâm ','Nam Nguyễn ',' Đỗ Thế Trung ',' Quý Nguyễn ',' Qúy Nhạn ',);
        $gender = array(' Male ',' Female ');
        $school = array(' FPT ',' Bách Khoa ',' Đi làm ',' Duy Tân ',' Duy Tân ');
        ?>
   </body>
</html>