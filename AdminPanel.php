<?php 
session_start();
if(isset($_SESSION['user'])){
echo '<h1>Admin Panel</h1>';
echo 'welcome '.$_SESSION['user'];
echo '<a href="logout.php">Logout</a>';
}else{
	header('Location:login1.php');
}
?>