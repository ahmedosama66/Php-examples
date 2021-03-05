<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
	
	for ($i=1; $i < 101; $i++) { 
		
		mkdir("newf $i");

		for ($x=1; $x < 101 ; $x++) { 
			mkdir("newf $i/child $x");
		}
	}

?>
</body>
</html>