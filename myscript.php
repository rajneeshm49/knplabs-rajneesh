<?php
require_once 'vendor/autoload.php';

$client = new \Github\Client();
$repos = $client->api('user')->repositories('KnpLabs');
// print_r($repositories);exit;



	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	// Create database
	$sql = "CREATE DATABASE rajneesh";
	if ($conn->query($sql) === TRUE) {
		echo "Database created successfully\n";
	} else {
		echo "Error creating database: " . $conn->error;
	}

    $mysqli = new mysqli("localhost", "root", "", "rajneesh");
	if($mysqli) {
		echo "Database connected successfully";
		$result = $mysqli->query("CREATE TABLE IF NOT EXISTS repositories (id INT NOT NULL AUTO_INCREMENT, name VARCHAR(255) , full_name VARCHAR(255) , size INTEGER(11), updated_at DATE, git_url VARCHAR(255), PRIMARY KEY ( id ))");
		$mysqli->query("TRUNCATE table repositories");
		$cnt = 0;
		foreach($repos as $repo) {
			$cnt++;
			$mysqli->query('INSERT INTO repositories(name, full_name, size, updated_at, git_url) VALUES("'.$repo['name'].'", "'. $repo['full_name'].'", "'.$repo['size'].'", "'.$repo['updated_at'].'", "'.$repo['git_url'].'")');
		}
		echo "\nTotal $cnt records inserted";
	} else {
		echo "coudnt connect to database";
	}


?>
