<html>
<head>
</head>
 <body>
<a href="http://localhost/Web/HumanPayroll/HRhomepage.html">Back</a>
 </body>
</html>
<?php
$uname=$_REQUEST['uname'];
$title=$_REQUEST['title'];
$disc =$_REQUEST['disc'];
?>
<?php
$con=mysqli_connect("localhost","root","root","human payroll");
if($con)
{
	//echo"connected";
	//INSERT
	$q="insert into project values('$uname','$title','$disc')";
	$res=mysqli_query($con,$q);
	if($res)
		echo "<script>alert('Inserted')</script>";
	else
		echo "<script>alert('Error/Username does not exist/Only one entry per username')</script>";
}
?>