<?php 
declare(strict_types=1);
echo "<pre>";
 require 'admin/functions/connect.php';

// $sel = "SELECT * FROM users WHERE id = 1";



// try {
// 	$query  = $conn -> query($sel);
// 	if(!$query){
// 		throw new Exception($conn -> error);
// 	} else {
// 		$row = $query -> fetch_assoc();
// 		print_r($row);
// 	}
	

// } catch(Exception $e){

// 	print_r($e -> getMessage());

// } catch(TypeError $e){

// 	print_r($e -> getMessage());
// } finally {
// 	echo " form finally ";
// }


// function sum(int $x) :bool {

// 	return !$x ;

// }

// echo sum('sda');











 // $sel = "SELECT  UPPER(name) AS bigName , sum(id) AS counter FROM products";


 // $query = $conn -> query($sel);

 // var_dump($query);

 // while ($pro = $query -> fetch_assoc()) {
 // 	// echo $pro['bigName'] . "<br>";
 // 	// echo $pro['counter'];
 // 	var_dump($pro);
 // }

 // foreach ($query as $pro){
 // 	echo $pro['bigName'] . "<br>";
 // 	echo $pro['counter'];
 // }

// $join = "
// ";

// $query = $conn -> query($join);

// foreach($query as $pro){
// 	print_r($pro);
// }

//  $sel = "SELECT * FROM users ORDER BY RAND() LIMIT 1";
// $quer = $conn -> query($sel);
// $user = $quer -> fetch_assoc();

// print_r($user);