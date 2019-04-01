<?php
	session_start();
	require("showandinsert.php");
	
	$object= new DB_FUNCTIONS;
	
	$usr=$tb=$tw=$te=$ts="";
	
	
	$usr=$_SESSION["UName"];
	$tb=$_POST["TBrand"];
	$tw=$_POST["TWheels"];
	$te=$_POST["TEngine"];
	$tn=$_POST["TStorage"];
	
	$object->inserttruckdata($usr,$tb,$tw,$te,$tn);

?>
