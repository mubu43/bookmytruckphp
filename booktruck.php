<?php

	session_start();
	require("showandinsert.php");
	
	$object= new DB_FUNCTIONS;
	$date= new DateTime();
	
	$usr=$tid=$bf=$bo=$cn="";
	
	
	$usr=$_SESSION["UName"];
	$tid=$_POST["hidtid"];
	$cn=$_POST["hidcname"];
	$bo=$date->format('Y-m-d');
	$bf=$_POST["wantdate"];
	
	
	$object->booktruck($usr,$tid,$bf,$bo,$cn);

?>
