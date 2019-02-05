<html>
<head>
</head>
 <body>
<a href="#">Back</a>
 </body>
</html>
<?php
require("layt.html");
$name=$_REQUEST['Name'];
$email=$_REQUEST['Email'];
$msg=$_REQUEST['Message'];
//connect to the external dba_close
$con=mysqli_connect("localhost","root","root","human payroll");
if($con)
{
	//echo"connected";
	$q="insert into contact values('$name','$email','$msg')";
	$r=mysqli_query($con,$q);
	if($r)
		echo "<script>alert('MESSAGE SENT')</script>";
	else
		echo "<script>alert('ERROR')</script>";
	
	
}
?>