<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style type="text/css">
body,td,th {
	font-size: 16px;
}
	</style>
</head>

<body>
	<center>
	<div style="border:1px solid black; width:350px; height: 200px;  margin:100px; background-color: aqua; align:center;">
		<p><center><h2>Account deleted.</h2></center></p>        
	  <p><center><h3>Back to Home Page : <a href="Website1.php" style="text-decoration: none; color: palevioletred;">Click Here</a></h3></center></p>
	</div>
		</center>
	<?php
	session_start();
	include"dbconnection.php";
	if($conn->connect_error){
die ("Connect_Failed".$conn->connect_error);
}
	else {
	session_unset();
	session_destroy();
	}
	?>
</body>
</html>