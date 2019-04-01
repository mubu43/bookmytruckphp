<?php

	require("showandinsert.php");
	
	$object= new DB_FUNCTIONS;
	
	$tid="";
	
	
	$tid=intval($_GET['q']);
	
	
	$data=$object->showbookedtruck($tid);
	echo '<table><tr><th>TID</th><th>TBrand</th><th>TWheels</th><th>TEngine</th><th>TStorage</th></tr><tr>';
	
	foreach($data as $re){
		foreach($re as $a){
		echo '<td>'.$a.'</td>';
		}
	}
	echo '</tr></table>';
	
?>
