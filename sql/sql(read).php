<?php
	echo "<pre>";
//define Database connect variables
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	//connect to MYSQL Database
	$connect = new mysqli($host,$user,$pass);
	//create new Database with SQL command
	//$create = "CREATE DATABASE before2 COLLATE utf8_general_ci";

	//$connect -> query($create);

	$connect -> query('USE before2');

	//read from database
	$read = "SELECT * FROM users";

	$query = $connect -> query($read);

	//$row = $query -> fetch_assoc();

	while ($row = $query -> fetch_assoc()) {
		print_r($row);
	}
?>