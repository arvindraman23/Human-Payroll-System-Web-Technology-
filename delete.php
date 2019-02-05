<?php
require("manage.html");
$uname=$_REQUEST['uname'];
?>

<?php
//connect to the external dba_close
$con=mysqli_connect("localhost","root","root","human payroll");
if($con)
{
	//echo"connected";
	$q="delete from registration where Uname='$uname'";
	$r=mysqli_query($con,$q);
	if($r)
		echo "<script>alert('DELETED')</script>";
	else
		echo "<script>alert('Wrong input')</script>";
	
	
}
?>

