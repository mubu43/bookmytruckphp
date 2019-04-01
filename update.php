<!doctype html>
<html>
<body>
<?php

	session_start();
	require("showandinsert.php");
	
	$object= new DB_FUNCTIONS;
	
	$utb=$utw=$ute=$uts=$uth="";
	
	
	$uth=$_POST['hidden'];
	$utb=$_POST['mTBrand'];
	$utw=$_POST['mTWheels'];
	$ute=$_POST['mTEngine'];
	$uts=$_POST['mTStorage'];
	
	
	
	$object->updatetruck($uth,$utb,$utw,$ute,$uts);
	
?>
</body>
</html>