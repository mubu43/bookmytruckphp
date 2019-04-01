<?php

	session_start();
	require("showandinsert.php");
	
	$object= new DB_FUNCTIONS;
	
	$n=$un=$p="";
	
	$n=$_POST['Name'];
	$un=$_POST['UName'];
	$p=$_POST['Pwd'];
	$t=$_POST['Type'];
	
	
	$object->signup($n,$un,$p,$t);
	
?>
	