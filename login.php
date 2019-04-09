<?php
include ('connect.php');
include('header.php');

$msg = '';

if(isset($_REQUEST["userName"]) && isset($_REQUEST["password"]))
{
	$q ="SELECT * from user where UserName='" . $_REQUEST["userName"] . "' and Password='" . $_REQUEST["password"]. "'";
	$mq = mysqli_query($cn,$q);
	if(mysqli_num_rows($mq) > 0)
	{
		$row = mysqli_fetch_array($mq);
		$_SESSION['name'] = $_REQUEST["userName"];
		$_SESSION['type'] = $row['Type'];
		header("Location: index.php");
	}
	else
	{
		$msg = "Invalid Username or password";
	}
}
?>
<div="amar_hack">	
<h2 > Login </h2>
            <h4 > Don't have an account? <a href="sign.html" target="_blank"color:blue> Sign Up</a></h4>
             
    <div class="form-row">
   
    <div class="col-md-6">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="username2" type="text" class="form-control" name="username" placeholder="Username">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <br>
    <input type="submit" value="Login">
    <h4 > Forget Password? <a href="change.php" target="_blank"color:blue> Change Password</a></h4>
</div>
<?php
include('footer.php');
?>