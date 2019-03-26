<?php

	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "formdb";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$n=$un=$p="";
	
	$n=$_POST['Name'];
	$un=$_POST['UName'];
	$p=$_POST['Pwd'];

	$sql = "INSERT INTO t4a (UName, Pwd, Name)
	VALUES ('$un', '$p', '$n')";

	if ($conn->query($sql) === TRUE) {
		echo "Signed Up successfully";
		$_SESSION['UName']=$un;
		header("location:index.php");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>