<!DOCTYPE html>
<html>
	<?php
	//Setting the credentials for the database
		$servername = "mysql";
		$username = "root";
		$password = "toor";
		$dbname = "gothamDB";
	
	//creating connections
		$conn = new mysqli($servername, $username, $password);

	//checking connections
		if($conn->connect_error)
		{
			die ("Connection failed: " . $conn->connect_error);
		}

	//creating a database
		$sql = "CREATE DATABASE gothamDB";
		if($conn->query($sql)===TRUE)
		{
			echo "Database created successfully";
		}
		else
		{
			echo "Error creating database: " . $conn->error;
		}
		$conn->close();

		$conn = new mysqli($servername, $username, $password, $dbname);

	//creating a table
		$sql = "CREATE TABLE gothamcity
		(
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			blogtitle VARCHAR(225) NOT NULL,
			blogcontent TEXT NOT NULL,
			posttime TIMESTAMP
		)";
	
		if(mysqli_query($conn, $sql))
		{
			echo "Table gothamcity created successfully"; 
		}
		else
		{
			echo "Error creating table: " .mysqli_error($conn) . " ". $conn->error;
		}

		mysqli_close($conn);

	?>

</html>