<html>
<head>
</head>
 <body>
<a href="http://localhost/Web/HumanPayroll/Emphomepage.html">Back</a>
 </body>
</html>


<?php
	
	SESSION_START();
	
?>
<?php
$uname=$_SESSION["username"];
$fn =$_REQUEST['fname'];
$ln =$_REQUEST['lname'];
$dob =$_REQUEST['dob'];
$gen =$_REQUEST['gen'];
$add =$_REQUEST['add'];
$phno =$_REQUEST['phno'];
$email =$_REQUEST['email'];
$pin =$_REQUEST['pin'];
$pass=$_REQUEST['pass'];

?>
<?php
$con=mysqli_connect("localhost","root","root","human payroll");
if($con)
{
	//echo"connected";
	$q="update registration SET FName='$fn',LName='$ln',DOB='$dob',Gender='$gen',Address='$add',Phno='$phno',Email='$email',Pin='$pin',Password='$pass' WHERE Uname='$uname'"; 
	$res=mysqli_query($con,$q);
	if($res)
		echo "<script>alert('Updated')</script>";
	else
		echo "Error";
}
?>