<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
<?php
session_start();
echo '<h1>Post</h1>';
$id=$_GET['id'];
define ('serverName',"localhost:3308");
define ('dbName',"mysite");
define ('userName',"root");
define ('password',"");
$connection=new mysqli(serverName,userName,password,dbName);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

$sql_query = "SELECT * FROM post where id='".$id."'";

$result = $connection->query($sql_query);
 //var_dump($result);
 
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$post_id=$row["id"];
		$title=$row["title"];
		$description=$row["description"];
		echo '<h2>Title</h2>';
		echo '<h2>'.$title.'</h2><br/>';
		echo '<h2>Description</h2>';
		echo '<h4>'.$description.'</h4><br/>';
    }
	
} else {
    echo "0 results";
}
$connection->close();


?>
</head>
<body>

<div class="container">
  
</div>

</body>
</html>
