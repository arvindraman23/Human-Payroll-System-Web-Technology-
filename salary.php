<html>
<head>
</head>
 <body>
<a href="http://localhost/Web/HumanPayroll/HRhomepage.html">Back</a>
 </body>
</html>
<?php
$uname=$_REQUEST['uname'];
$designation=$_REQUEST['dsn'];
$salary =$_REQUEST['salary'];
$pay=$_FILES['file']['name'];
$tmp=$_FILES['file']['tmp_name'];

move_uploaded_file($tmp,"upload/".$pay);

$con=mysqli_connect("localhost","root","root","human payroll");
if($con)
{
	//echo"connected";
	//INSERT
	$q="insert into salary values('$uname','$designation','$salary','$pay')";
	$res=mysqli_query($con,$q);
	if($res)
		echo "<script>alert('Inserted')</script>";
	else
		echo "<script>alert('Error/Username does not exist/Only one entry per username')</script>";
}
?>