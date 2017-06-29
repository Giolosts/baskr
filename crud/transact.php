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

  //add
if(isset($_POST['submit'])){
		$fname= $_POST['full_name'];
		$lname= $_POST['last_name'];
		$cnum= $_POST['contact_number'];
		$emlad= $_POST['email_address'];
		$dcrt= $_POST['date_created'];
		$dupdt= $_POST['date_updated'];

		echo $sql = "INSERT INTO contacts(full_name, last_name, contact_number, email_address, date_created , date_updated)
		values('{$fname}','{$lname}','{$cnum}','{$emlad}','{$dcrt}','{$dupdt}')";
		$result= mysqli_query($con,$sql);

		header("Location: create.php");
	}
	//DELETE
	if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM contacts WHERE id = {$id}";
	$result= mysqli_query($con,$sql);

	header("Location: create.php");
}
//UPDATE
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$fname= $_POST['full_name'];
	$lname= $_POST['last_name'];
	$cnum= $_POST['contact_number'];
	$emlad= $_POST['email_address'];
	$dcrt= $_POST['date_created'];
	$dupdt= $_POST['date_updated'];

	echo $sql = "UPDATE contacts SET full_name='{$fname}',last_name='{$lname}',contact_number='{$cnum}',email_address='{$emlad}',date_created='
	{$dcrt}',date_updated='{$dupdt}' WHERE id='{$id}'";

	$result= mysqli_query($con,$sql);
	echo count($result);

	header("Location: create.php");
}
?>
