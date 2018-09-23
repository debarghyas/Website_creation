<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PASSWORD CHANGE</title>
</head>

<body>
	<form method="POST" name="form2">
	<table width="348" border="2" align="center">
  <tbody>
    <tr>
      <td width="336" height="149" align="center" bgcolor="#1EF1DA"><p><strong>USERNAME</strong> :
<input type="text" name="text1">
      </p>
        <p><strong>PASSWORD</strong> :
<input type="password" name="text2"></p>
      <p>
        <input type="submit" name="submit" id="submit" value="Submit">
      </p></td>
    </tr>
	  <?php
	  session_start();
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
		header("location:password_correction.php");
	}		
	else{
		echo "Username or Password is not matched.";
	}
		  
	  }
	  ?>
  </tbody>
</table>
	</form>
</body>
</html>