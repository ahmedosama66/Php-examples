<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	for ($i=1; $i < 20; $i++) { 
		$g = file_get_contents("https://www.olx.com.eg/jobs/it-telecom/?page=$i");
		$a = explode('class="ads__item__ad--title">', $g);
		for ($y=1; $y < count($a); $y++) { 
			$a2 = explode('</a>', $a[$y]);
			echo $a2[0]."<br>";
			file_put_contents("jobs.txt",$a2[0],FILE_APPEND);
		}
		
	}

?>
</body>
</html>