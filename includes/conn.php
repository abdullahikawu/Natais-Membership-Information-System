<?php
	$conn = new mysqli('localhost', 'root', '', 'nataisnew');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>