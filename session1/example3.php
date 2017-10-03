<?php
	$name ="Le Tung Lam";
	echo strlen($name);
	echo "<br>";
	echo str_word_count("$name");
	echo "<br>";
	echo strrev("$name");
	echo "<br>";
	echo strpos("$name","a");
	echo "<br>";
	echo str_replace("Tung", "PHP09", $name);
?>