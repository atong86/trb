<?php

//MySQLi Procedural
$conn = mysqli_connect('localhost','root','','trb_db_master');
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>
