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
	
	$usr=$tb=$tw=$te=$ts="";
	
	
	$usr=$_SESSION["UName"];
	$tb=$_POST["TBrand"];
	$tw=$_POST["TWheels"];
	$te=$_POST["TEngine"];
	$tn=$_POST["TStorage"];


	$sql = "INSERT INTO t4b (UName, TBrand, TWheels, TEngine, TStorage)
	VALUES ('$usr', '$tb', '$tw', '$te', '$tn')";

	if ($conn->query($sql) === TRUE) {
		header("location: index.php");
	} else {
		$_SESSION['tr_inserted']=false;
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
