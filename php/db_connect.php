<?php
	//make connection with database
	$link = mysqli_connect("db4free.net","sahil12","password","credit12");
	// Check connection
	if($link === false) {
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>
