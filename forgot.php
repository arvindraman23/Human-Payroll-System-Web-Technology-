<html>
<head>
</head>
 <body>
<a href="#">Back</a>
 </body>
</html>
<?php
require("forgot.html");
$uname=$_REQUEST['uname'];
$ucode=$_REQUEST['ucode'];
$upass=$_REQUEST['upass'];
?>

<?php
//connect to the external dba_close
$con=mysqli_connect("localhost","root","root","human payroll");
if($con)
{
	//echo"connected";
	$q="update admin SET password='$upass' WHERE code='$ucode' AND username='$uname'";
	$r=mysqli_query($con,$q);
	if($r)
		echo "<script>alert('UPDATED SUCCESSFULLY')</script>";
	else
		echo "<script>alert('WRONG CODE/USERNAME')</script>";
	
	
}
?>