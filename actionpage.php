<?php
include ('connect.php');
include('header.php');
?>
<div id="main_content">
		<div id="body_content">
<?php
/*echo "First Name:" . $_REQUEST["firstName"] . "<br>";
echo "Last Name:" . $_REQUEST["lastName"] . "<br>" ;
echo "Age:" . $_REQUEST["age"] ;
*/
$q ="INSERT INTO user (username, email, password, type)
VALUES ('". $_REQUEST["username"] ."', '". $_REQUEST["email"] ."', '". $_REQUEST["password"] ."', '". $_REQUEST["type"] ."')";

//echo $q;

$mq = mysqli_query($cn,$q);
if ( !$mq)
{
	echo "Could not inserted data".mysql_error();
}
else
{
	echo "data inserted successfuly";
	
	<script type="text/javascript">
  <?php echo "alert('Sign In Successful');"; ?>
</script>

}
mysqli_close($cn);

?>
</div>
		
</div>
<?php
include('footer.php');
?>
