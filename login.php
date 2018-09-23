<html>
<head>
<title>LOGIN</title>
</head>
<body>
<form method="post" name="form1">
	<center>
<table border="2" style="border:solid; margin:100px;">
<tr>
<th width="261" height="35" bgcolor="#92FB08"><center><h3>LOGIN</h3></center></th>
</tr>
<tr>
<td height="40" bgcolor="#DEFB0A"><strong>USERNAME </strong>  <input type="text" name="text1"></td>
</tr>
<tr>
<td height="41" bgcolor="#92FB08"><strong>PASSWORD   
  </strong>  <input name="text2" type="password"></td>
</tr>
<tr>
<td height="44"  bgcolor="#DEFB0A"><center><button>Login</button></center></td>
</tr>
</table>
		</center>
</form>
<?php
session_start();
$un="";
$pass="";
include"dbconnection.php";
if($conn->connect_error){
die ("Connect_Failed".$conn->connect_error);
}
else if(isset($_POST['text1'])){
	$un=$_POST['text1'];
	$pass=$_POST['text2'];
	$sql="select * from userinfo where username='$un' and password='$pass'";
	$rs=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if((mysqli_num_rows($rs))>0){
		$_SESSION['un']=$un;
        $_SESSION['pass']=$pass;
		header("location:user_information.php");
	}		
	else{
		echo "Username or Password is not matched.";
	}
}
?>
</body>
</html>