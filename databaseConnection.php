<?php
	$servername = "localhost:3307";
	//for hosted website
	//$username = "id15232115_bbassignment";
	//$password = "[kUw&-|oo[6{)lF%";
	//$database="id15232115_bloodbank";
	//for local site
	$username = "root";
	$password = "";
	$database="bloodbank";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$database);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
?>