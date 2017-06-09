<!DOCTYPE html>
<html>
<head>
	<title>Create Post</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="js/bootstrap.min.js" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>
<?php
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

	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);

	$sql = "Insert into gothamcity (blogtitle, blogcontent) values ( '".$title. "', '".$content. "' )";

	echo $sql;

	if(mysqli_query($conn, $sql))
	{
		echo "Tpost created successfully"; 
	}
	else
	{
		echo "Error inserting data: ". $conn->error;
	}

	mysqli_close($conn);
?>
<body>
	<form  method="post">
		<div class="container">
			<div class="row">
				<center><textarea name="title" style="margin-top:20px; border:none; outline:none; font-weight:bold; font-size:40px; text-align:center; width:100%">Insert cheesy catchphrase here</textarea></center>			
			</div>
		</div>
		
		<div>
			<textarea name="content" style="border:none; outline:none; font-size:16px; width:100%; height:400px; text-align:left;">
				Type in some really entertaining blog post about Nightwing and Harley Quinn
				Be sure to be as cheesy as possible
				You can type as much as you want, there's no max-length or what not
			</textarea>
		</div>



	<br>

	<center><h6>Done already? 'atta boy! Click the button below, why don't ya</h6></center>

	<center><button style="border-radius:4px; background-color:#fffff0; color:a0522d" type="submit">Submit</button></center>

</form>

</body>
</html>
