<html>
<head>
</head>
 <body>
<a href="http://localhost/Web/HumanPayroll/HRhomepage.html">Back</a>
 </body>
</html>
<?php

$fn =$_REQUEST['fname'];
$ln =$_REQUEST['lname'];
$dob =$_REQUEST['dob'];
$gen =$_REQUEST['gen'];
$add =$_REQUEST['add'];
$phno =$_REQUEST['phno'];
$email =$_REQUEST['email'];
$pin =$_REQUEST['pin'];
$uname=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];

?>
<?php
$con=mysqli_connect("localhost","root","root","human payroll");
if($con)
{
	//echo"connected";
	//INSERT
	$q="insert into registration values('$fn','$ln','$dob','$gen','$add','$phno','$email','$pin','$uname','$pass')";
	$res=mysqli_query($con,$q);
	if($res)
		echo "<script>alert('Inserted')</script>";
	else
		echo "Error";
}
?>