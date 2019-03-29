<?php
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
 var_dump($result);
if ($result->num_rows > 0) {
    
   header('Location:dashBoard.php');
} else {
    echo "0 results";
}
$connection->close();
?>
