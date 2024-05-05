<?php
$conn = new mysqli('localhost', 'root', '', 'boxing');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Error: " . $conn->connect_error);
}
?>