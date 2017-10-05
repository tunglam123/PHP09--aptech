<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	function reverseName($name) {
	$arrName = explode(" ", $name);
	$lengName = count($arrName);
	$lastNamePosition = $lengName;
	$lastName = $arrName[$lastNamePosition -1];
	$middleName = $arrName[$lastNamePosition -2];
	$othername = "";
	for ($i = 0; $i < $lengName -2; $i++){
		$othername .= $arrName[$i];
	}
	echo $othername.$lastName. ''.$middleName;
}
	reverseName("Lê Tùng Lâm")
?>
</body>
</html>