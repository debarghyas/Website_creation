<html>
<head>
<title>User Information</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
	<style>a{text-decoration: none; color:darkgreen; border:1 solid black;} </style>
<body>
	<center>
		<div>
<table align="center" border="2 solid black">
<tr><th width="70" height="43" bgcolor="#07F857"><strong>First Name</strong></th>
<th width="70" height="43" bgcolor="#FBE734"><strong>Last Name</strong></th>
<th width="60" height="43" bgcolor="#07F857"><strong>Age</strong></th>
<th width="80" height="43" bgcolor="#FBE734"><strong>Date of Birth</strong></th>
<th width="70" height="43" bgcolor="#07F857"><strong>Mobile No.</strong></th>
<th width="70" height="43" bgcolor="#FBE734"><strong>Country</strong></th>
<th width="70" height="43" bgcolor="#07F857"><strong>E-mail</strong></th>
<th width="70" height="43" bgcolor="#FBE734"><strong>Username</strong></th>
<th width="70" height="43" bgcolor="#07F857"><strong>Password</strong></th></tr>
<?php
session_start();
include"dbconnection.php";
if($conn->connect_error){
die ("Connect_Failed".$conn->connect_error);
}
else if(is_null($_SESSION['un'])|| is_null($_SESSION['pass'])){
	$u=$_SESSION['un'];
	$p=$_SESSION['pass'];
		header("location:login.php");
	}
else if(isset($_SESSION['un'])){
	$u=$_SESSION['un'];
	$p=$_SESSION['pass'];
	//echo $u."--".$p;
$sql="select * from userinfo where username='$u' and password='$p'";
$rs=mysqli_query($conn,$sql) or die(mysqli_error($conn));
while($row=mysqli_fetch_row($rs)){
	echo "<tr><td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td>$row[4]</td>";
	echo "<td>$row[5]</td>";
	echo "<td>$row[6]</td>";
	echo "<td>$row[7]</td>";
	echo "<td>$row[8]</td></tr>";
}	
}
	session_unset();
	session_destroy();
?>
</table>
			</div>
<p>
	  <h3><b><a href="logout.php" style="border:1 solid black;">Logout</a></b></h3>
</p>
</center>
</body>
</html>