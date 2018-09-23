<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<center>
     <form method="POST" name="form3">
	<table width="407" border="2">
  <tbody>
    <tr>
      <td width="395" height="65" align="center" valign="middle" bgcolor="#66E7FC"><strong><h2>Delete Account</h2></strong></td>
    </tr>
    <tr>
		<td height="58" bgcolor="#F6FC94"><blockquote><p><strong>Enter Username : <input type="text" name="text1"></strong></p></blockquote></td>
    </tr>
    <tr>
      <td height="58" bgcolor="#F9DD67"><blockquote>
        <p><strong>Enter Password : <input type="password" name="text2"></strong></p></blockquote></td>
    </tr>
    <tr>
      <td height="49" bgcolor="#F6FC94"><center><input type="submit" name="Delete" value="Delete"></center></td>
    </tr>
  </tbody>
</table>
		 </form>
</center>
	<?php
	session_start();
	$uu="";
	$pp="";
	include"dbconnection.php";
	if($conn->connect_error){
die ("Connect_Failed".$conn->connect_error);
}
	else if(isset($_POST['text1'])){
	$u=$_SESSION['un'];
	$p=$_SESSION['pass'];
	$uu=$_POST['text1'];
	$pp=$_POST['text2'];
	$sql="delete from userinfo where username='$u'";
	$rs=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	header("location:delete2.php");
		}
	?>
</body>
</html>