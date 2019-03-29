<?php
	$name=$_GET['firstname'];
	$age=$_GET['age'];
	if($age>18){
		echo $name." allowed to drink";
	}else{ 
		echo $name." not allowed to drink";
	}
	
	

?>