<?php
	session_start();
	require("showandinsert.php");
	
	$object= new DB_FUNCTIONS;
	
	$ln=$lp="";
	
	$ln=$_POST["UName"];
	$lp=$_POST["Pwd"];
	
	$object->login($ln,$lp);	

?>