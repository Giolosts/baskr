<?php
$hostname = "localhost";
	$username = "root";
	$passowrd = "";
	$database = "phonebook";
	$tblname = "contacts";



	//Database connection String
	$con=mysqli_connect($hostname,$username,$passowrd,$database);


	// Check connection
	if (mysqli_connect_errno()) {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
       echo "<br>";
	}
	else{
			echo "Successfully connected to MySQL...<br>";
	}
 ?>
