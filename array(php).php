<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
#$cars = array("nissan","kia" ,"bmw","volvo","volex");
#$y = count($cars);
#for ($x = 0; $x < $y; $x++){
#	echo $cars[$x] . "</br>";
#}

$x = "akkjazhj";

$arr = str_split($x);



	if (in_array("z", $arr)){
		$num = array_search("z", $arr);

		unset($arr[$num]);

		$txt = implode("", $arr);
		echo $txt;
		}


?>



</body>
</html>