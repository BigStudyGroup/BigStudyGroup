<?php
include("config.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($conn,"select * from registration where user_email='$user_email' and user_password='$user_password'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$user_email;
	}
}
if (isset($_SESSION["login"]))
{
echo "<h1 align=center>Hye you are sucessfully login!!!</h1>";
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
            <header>
                <center><h1>WELCOME TO  <span>BigStudyGroup</span></h1></center>
            </header>
</head>
<body>
<center>
<div class="floating-box">

<form ACTION="home.php" name="form1" method="post" >


   <label for="uname">User Email</label>
   <input type="text" id="loginid2" name="user_email"><br><br>

   <label for="pwd">Password</label>
   <input type="password" id="pass2" name="user_password"><br><br>
   <input name="submit" type="submit" id="submit" value="Login"><br>

<p>New User <a href="signup.html">Register Here</a></p>
<?php
		  if(isset($found))
		  {
		  	echo '<p class="w3-center w3-text-red">Invalid user id or password<br>Please try again</p>';
		  }
		  ?>
 </center>
</form>

</div>
<center>
</body>
</html>