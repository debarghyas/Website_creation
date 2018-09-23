<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update</title>
</head>
<?php
	session_start();
	include"dbconnection.php";
	if($conn->connect_error){
die ("Connect_Failed".$conn->connect_error);
}
	else if(isset($_SESSION['un'])){
	$user=$_SESSION['un'];
	$passwrd=$_SESSION['pass'];
	}
	?>
<body>
<?php
$sql="select * from userinfo where username='$user' and password='$passwrd'";
$rs=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($row=mysqli_fetch_row($rs)){
	?>
	<form method="POST" name="form1">
	<center>
<table border=1>
<tr>
<th width="335" height="40" bgcolor="#07EEF9"><center><h2><strong>Update Info</strong></h2></center></th>
</tr>
<tr>
  <td height="42" bgcolor="#02FF5E"><strong>FIRST NAME : </strong><input type="text" name="text1" value="<?php echo "$row[0]"; ?>"></td>
</tr>
<tr>
<td height="41" bgcolor="#07EEF9"> <strong>LAST NAME   : </strong>  <input type="text" name="text2"  value="<?php echo $row[1]; ?>"></td>
</tr>
<tr>
<td height="45" bgcolor="#02FF5E"><strong>AGE :</strong>  <input type="text" name="text3"  value="<?php echo $row[2]; ?>"></td>
</tr>
<tr>
<td height="48" bgcolor="#07EEF9"><strong>DATE OF BIRTH : </strong>  <input type="date" name="text4"  value="<?php echo $row[3]; ?>"></td>
</tr>
<tr>
<td height="43" bgcolor="#02FF5E"><strong>MOBILE NO. : </strong>  <input type="text" name="text5"  value="<?php echo $row[4]; ?>"></td>
</tr>
<tr>
<td height="39" bgcolor="#07EEF9"><strong>COUNTRY : </strong>  <input type="text" name="text6"  value="<?php echo $row[5]; ?>"></td>
</tr>
<tr>
  <td height="44" bgcolor="#02FF5E"><strong>E-MAIL : </strong><input type="email" name="text9"  value="<?php echo $row[6]; ?>"></td>
</tr>
<tr>
	<td height="43" bgcolor="#07EEF9"><center><input type="submit" name="Update" value="Update"></center></td>
</tr>
</table>
		</center>
</form>
<?php
}
?>
	<?php
$fname="";
$lname="";
$ag=0;
$dob="";
$mobno=0;
$count="";
$email="";
	if($conn->connect_error){
die ("Connect_Failed".$conn->connect_error);
}
else if(isset($_POST['text1'])){
$fname=$_POST['text1'];
$lname=$_POST['text2'];
$ag=$_POST['text3'];
$dob=$_POST['text4'];
$mobno=$_POST['text5'];
$count=$_POST['text6'];
$email=$_POST['text9'];
$sql1="update userinfo set fname='$fname', lname='$lname', age=$ag, dob='$dob', mobileno=$mobno, country='$count', email='$email'  where username='$user'";
$rs1=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
	header("location:update2.php");
}
	?>
</body>
</html>