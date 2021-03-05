<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	if (isset($_COOKIE["lan"])) {

		if ($_COOKIE["lan"] == "ar") {
			echo "مرحبا";
		}else{
			echo "hello";
		}
		
	}else{
		echo 'ختر اللغة
		<a href="ar.php">arabic</a>
		<a href="en.php">english</a>';
	}
?>
</body>
</html>