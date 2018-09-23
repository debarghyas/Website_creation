<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LOGOUT</title>
</head>

<body>
	<?php
	session_start();
	include"dbconnection.php";
	if($conn->connect_error){
die ("Connect_Failed".$conn->connect_error);
}
	else{
		$u=$_SESSION['un'];
		if(isset($u)){
			header("location:logout2.php");
		}
		else{
		session_unset();
		session_destroy();
			header("location:Website1.php");
		}
	
	}
	?>
</body>
</html>