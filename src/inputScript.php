<!DOCTYPE html>
<html>

	<?php
		$servername ="mysql";
		$username ="root";
		$password ="toor";
		$dbname = "gothamDB";

		//more connections
		$conn = new mysqli($servername, $username, $password, $dbname);
		if($conn->connect_error)
		{
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO gothamcity (blogtitle, blogcontent)
		VALUES ('$title', '$content')";

		if($conn->query($sql) === TRUE)
		{
			echo "New record created successfully. Last inserted id is: " . $last_id;
		}
		else
		{
			echo "Error: " . $sql . "br>" . $conn->error;
		}

		$conn->close();
	?>

</html>