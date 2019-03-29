<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dash Board</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  

<?php 
session_start();
if(isset($_SESSION['user'])){
echo '<a href="logout.php">Logout</a>';
echo '<br/>';
echo '<a href="userHome.php">User Home</a>';
if(isset($_POST['title'])&& isset($_POST['descri'])){
	
	$title=$_POST['title'];
	$descri=$_POST['descri'];
	//echo $_SESSION['user_id'];
	//echo $title;
	//echo $descri;
	define ('serverName',"localhost:3308");
	define ('dbName',"mysite");
	define ('userName',"root");
	define ('password',"");

	$connection=new mysqli(serverName,userName,password,dbName);

	$sql_query="insert into post (userId,title,description) values('".$_SESSION['user_id']."','".$title."','".$descri."')";

	if(($connection->query($sql_query))==true){
		echo 'post added';
	}else{
		echo 'db error';
	}

	$connection->close();
	}
}
else{
	header('Location:login1.php');
}
?>

</head>
<body>
<div class="container">
  <h2>DashBoard</h2>
  <form method="POST" action="dashBoard.php"  >
	
    <div class="form-group">
      <label for="email">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Title" name="title">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <input type="text" class="form-control" id="descri" placeholder="Description" name="descri">
    </div>
	
    
    <button type="submit" class="btn btn-default"  >Submit</button>
  </form>
</div>
</body>
</html>