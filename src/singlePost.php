<!DOCTYPE html>
<html>
<head>
<title>Single Post</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="js/bootstrap.min.js" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>
<?php
	//Setting the credentials for the database
		$servername = "mysql";
		$username = "root";
		$password = "toor";
		$dbname = "gothamDB";
	
	//creating connections
		$conn = new mysqli($servername, $username, $password, $dbname);

	//checking connections
		if($conn->connect_error)
		{
			die ("Connection failed: " . $conn->connect_error);
		}

		$post_id = $_GET['post'];

		$sql = "
			SELECT blogtitle, blogcontent FROM gothamcity
			WHERE id=$post_id";
		$result = $conn->query($sql);

		$post = $result->fetch_assoc();


?>
<body>
	<div class="container">
		<div class="row" style="padding:20px 20px">
			<h1 style="color:#32cd32"><?php echo $post['blogtitle']; ?></h1>
		</div>
		<hr style="border:1px solid #f5f5f5">
		<div class="row">
			
				<p><?php echo $post['blogcontent']; ?></p>
			
		</div>
		<br>
		<a href ="#"><button class="button">Previous post</button></a>
		<a href ="#"><button class="button" style="float:right">Next post</button></a>
	</div>
</body>
</html>