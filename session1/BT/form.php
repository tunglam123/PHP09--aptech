<!DOCTYPE html>
<html>
    <head>
        <title></title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
         $name = array(' Lê Tùng Lâm ','Nam Nguyễn ',' Đỗ Thế Trung ',' Quý Nguyễn ',' Qúy Nhạn ',);
        $gender = array(' Male ',' Female ');
        $school = array(' FPT ',' Bách Khoa ',' Đi làm ',' Duy Tân ',' Duy Tân ');
        ?>
        <h1>Danh sách lớp PHP09</h1>
        <form method="POST">
            Username: <input type="text" name="username" value=""/> <br/><br/>
            Gender: <input type="password" name="gender" value=""/><br/><br/>
            Tìm tên : <input type="text" name="username"><br>
            School : <input type="text" name="school">
            <input type="submit" name="form_click" value="Gửi Dữ Liệu"/><br/><br/>

            <?php
                if (isset($_POST['form_click'])){
                    echo 'Tên là: ' . $_POST['username'];
                    echo '<br/>';
                if (isset($_POST['form_click'])){
                    echo 'Giới tính là: ' . $_POST['gender'];
                }
                if (isset($_POST['form_click'])){
                    echo 'Trường học: ' . $_POST['school'];
                }
                if (isset($_POST['form_click'])){
                    echo 'Tìm tên: ' . $_POST['username'];
                }
           ?>
        </form>
    </body>
</html>