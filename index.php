<?php

$host = 'database';
$username = 'ananya';
$password = 'ananya44';

$connection = new mysqli($host, $username, $password);

if($connection->connect_error){
	die("Connection failed: " . $connection->connect_error);
} else {
	echo "MySQL version: ",$connection->server_info;
}

?>
