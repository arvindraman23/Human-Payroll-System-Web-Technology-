<?php
	$con =mysqli_connect("localhost","root","root","human payroll");
	$sql = "select * from registration ";
	$records=mysqli_query($con,$sql);
?>


<html>

<head>
<title>Employee Details</title>
</head>
<style>

body{
background-image:url('grey.jpeg');
background-size:100% 100%;
}
.main
{
height:80px;
width:100%;
border:0px solid white;
text-align:center;
}
.main1
{
height:100%;
width:100%;
border:0px solid white;
margin-left:150px;
font-family:Arial;
}
</style>

<body>
<div class="main">
<h1><font color="white">EMPLOYEE DETAILS</font></h1>
</div>
<div class="main1">
<table border="2pt solid black" width="70%" border="0" cellpadding="4" cellspacing="4" bgcolor="Wheat">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Dob</th>
<th>Gender</th>
<th>Address</th>
<th>Phone No</th>
<th>Email</th>
<th>Pincode</th>
<th>Username</th>
<th>Password</th>
</tr>
<tr> <td>&nbsp;</td> </tr>
<?php
while($employee=mysqli_fetch_array($records)){
	
	echo "<tr>";
	
	echo "<td align='center'>".$employee['FName']."</td>";
	echo "<td align='center'>".$employee['LName']."</td>";
	echo "<td align='center'>".$employee['DOB']."</td>";
	echo "<td align='center'>".$employee['Gender']."</td>";
	echo "<td align='center'>".$employee['Address']."</td>";
	echo "<td align='center'>".$employee['Phno']."</td>";
	echo "<td align='center'>".$employee['Email']."</td>";
	echo "<td align='center'>".$employee['Pin']."</td>";
	echo "<td align='center'>".$employee['Uname']."</td>";
	echo "<td align='center'>".$employee['Password']."</td>";

	echo "</tr>";
}
?>
</div>

</table>


</body>
</html>