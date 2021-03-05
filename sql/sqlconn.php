<?php

	//define Database connect variables
	$host = 'localhost:8888';
	$user = 'root';
	$pass = '';
	//connect to MYSQL Database
	$connect = new mysqli($host,$user,$pass);
	//create new Database with SQL command
	$create = "CREATE DATABASE before1 COLLATE utf8_general_ci";

	//Running Command
	//$connect -> query($create);

	if ($connect -> query($create)) {
		echo 'The Database is created';
	}else{
		echo 'error';
	}

	$connect -> query('USE before1');

	$table = "CREATE TABLE users (

		id int AUTO_INCREMENT primary key,
		name varchar(255),
		age int,
		mobile varchar(11) 

	)";


	if ($connect -> query($table)) {
		echo 'Table created';
	}else{
		echo 'error';
	}
?>