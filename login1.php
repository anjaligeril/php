<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
<?php

if(isset($_SESSION['user'])){
	 header('Location:dashBoard.php');
}else{
if(isset($_POST['email'])&& isset($_POST['pwd'])){
	session_start();
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	define ('serverName',"localhost:3308");
	define ('dbName',"mysite");
	define ('userName',"root");
	define ('password',"");
	$connection=new mysqli(serverName,userName,password,dbName);

	// Check connection
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	} 
	$sql_query = "SELECT * FROM user where email='$email' && password='$pwd'";

	$result = $connection->query($sql_query);
	//var_dump($result);
 
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$userType=$row["Type"];
        $_SESSION['user']=$row["name"];
		 $_SESSION['email']=$row["email"];
		 $_SESSION['user_id']=$row["id"];
    }
	if($userType=="user"){
		header('Location:dashBoard.php');
	}else{
		header('Location:AdminPanel.php');
	}
} else {
    echo "0 results";
}
$connection->close();
}
}

?>
</head>
<body>

<div class="container">
  <h2>Registration Form</h2>
  <form method="POST" action="login1.php"  >
	
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
    </div>
	
    
    <button type="submit" class="btn btn-default"  >Login</button>
  </form>
</div>

</body>
</html>
