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
	
	$ln=$lp="";
	
	$ln=$_POST["UName"];
	$lp=$_POST["Pwd"];
	
	
	$sql = "SELECT * FROM t4a WHERE (UName='$ln' AND Pwd='$lp')";
	
	$res = mysqli_query($conn, $sql);
	
	$rowcount = mysqli_num_rows($res);
	

	if ($rowcount>0) {
		$_SESSION["UName"]=$ln;
		header("location: index.php");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	

?>