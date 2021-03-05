<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>

<div></div>
<?php
$txt = "hezllzoz";
$arr = str_split($txt);

if (in_array("z" , $arr)){
	$x = str_replace("z", '', $arr) ;
	$t = implode("", $x);
	echo $t;
}

##if(in_array("z",$arr)){
	##$z = array_search( "z" , $arr);
	## unset ($arr[$z]);
    ## $t = implode("", $arr);
    ## echo $t;
##}


?>
</body>
</html>