<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		$txt = file_get_contents("https://www.olx.com.eg/ad/5-IDbABeM.html");
		$x = explode("<title>", $txt);
		$x2 = explode("</title>" , $x[1]);
		echo $x2[0];
	 ?>
</body>
</html>