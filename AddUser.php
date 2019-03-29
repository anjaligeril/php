<?php
$name=$_POST['firstName'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$type=$_POST['userType'];


define ('serverName',"localhost:3308");
 define ('dbName',"mysite");
 define ('userName',"root");
 define ('password',"");

$connection=new mysqli(serverName,userName,password,dbName);

$sql_query="insert into user (name,Type,phone,email,password) values('".$name."','".$type."','".$phone."','".$email."','".$pwd."')";

if(($connection->query($sql_query))==true){
	echo 'user added';
}else{
	echo 'db error';
}

$connection->close();
 


?>