<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="welcome.php" name="welcomeform" method="post">
		Name :<input type="text" name="name" placeholder="Please input your name"><span class="error"> <?php echo $nameErr ?></span>	
		<br>
		<br>
		Lớp : <input type="text" name="class"><span class="error"> <?php echo $classErr ?></span>
		<br>
		<br>
		Ngày sinh : <input type="text" name="age">
		<br>
		<br>
		Email : <input type="email" name="email" placeholder="Please input your email">
		<br>
		<br>
		<input type="submit" name="submit">

		<?php
		$nameErr = $emailErr = "";
		$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
		?>
</body>
</html>