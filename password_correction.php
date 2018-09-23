<html>
<head>
<title>Change Password</title>
</head>
	<style>a{text-decoration: none;}</style>
<body>
<form method="POST" name="form2" >
	<center>
		<div  style="border:1px solid black; width:350px;margin:70px;padding:5px;">
<table border="1px solid black">
<tr>
	<th width="374" height="73" align="center" valign="middle" bgcolor="#0CD8F1"><h2>CHANGE PASSWORD</h2></th>
</tr>
<tr>
<td height="60" bgcolor="#02FF4E"><strong>Current Password </strong>   <input type="password" name="text3"></td>
</tr>
<tr>
<td height="61" bgcolor="#0CD8F1"><strong>New Password</strong>  <input type="password" name="text4"></td>
</tr> 
<tr>
<td height="60" bgcolor="#02FF4E"><strong>Re-type New Password</strong>  <input type="password" name="text5"></td>
</tr>
<tr>
<td height="64" bgcolor="#0CD8F1"><center><input name="submit" type="submit" autofocus="autofocus"></center></td>
</tr>
</table>
			</div>
		</center>
</form>
<?php
session_start();
include"dbconnection.php";
$currentpass="";
$newpass="";
$renewpass="";
if($conn->connect_error){
die ("Connect_Failed".$conn->connect_error);
}
else if(isset($_POST["text3"])){
	$u=$_SESSION['un'];
	$p=$_SESSION['pass'];
	$currentpass=$_POST['text3'];
	$newpass=$_POST['text4'];
	$renewpass=$_POST['text5'];
	if($newpass==$renewpass && $currentpass==$p){
	$sql="update userinfo set password='$renewpass' where username='$u'";
	$rs=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	$p=$_SESSION['pass']=$newpass;
	header("location:password_correction2.php");
		
	}
	else{
		echo"<p><center><h3>Password is not matched.</h3></center></p>";
	}
}
?>
</body>
</html>