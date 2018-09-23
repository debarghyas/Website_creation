<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Info</title>
</head>
<style>a{text-decoration: none; color:green;}</style>
<body>
	<center>
<div style="border:1px solid black; width:350px;margin:100px;padding:10px; background-color: aqua;">
	<p><center><h2> Successfully updated.</h2></center></p>
	<?php
	session_start();
	include"dbconnection.php";
	if($conn->connect_error){
die ("Connect_Failed".$conn->connect_error);
}
else if(isset($_SESSION['pass'])){
	$p=$_SESSION['pass'];
	$u=$_SESSION['un'];
}	
	?>
	<h3><center>View Update : <a href="user_information.php" style="border: 1 solid black">GO</a></center></h3></p>
	</div>
	</center>
</body>
</html>