<?php 

	//connect 
	$con = new mysqli("localhost" ,"root" ,"" ,"i_g");

	//write query
	$queryb = "SELECT * FROM category WHERE delete_cat_id = 1";

	//exacute query
	$resultb = $con->query($queryb);
	



	
 ?>
