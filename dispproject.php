<?php
	$con =mysqli_connect("localhost","root","root","human payroll");
	$sql = "select * from project ";
	$records=mysqli_query($con,$sql);
?>


<html>

<head>
<title>Employee Project Details</title>
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
margin-left:360px;
font-family:Arial;
font-size:40px;

}
</style>

<body>
<div class="main">
<h1><font color="white">EMPLOYEE PROJECT DETAILS</font></h1>
</div>
<div class="main1">
<table border="2pt solid black" width="50%" border="0" cellpadding="4" cellspacing="4" bgcolor="Wheat">
<tr>
<th>Username</th>
<th>Project Title</th>
<th>Project Description</th>
</tr>
<tr> <td>&nbsp;</td> </tr>
<?php
while($sal=mysqli_fetch_array($records)){
	
	echo "<tr>";
	echo "<td align='center'>".$sal['Uname']."</td>";
	echo "<td align='center'>".$sal['PrTitle']."</td>";
	echo "<td align='center'>".$sal['PrDetails']."</td>";
	echo "</tr>";
}
?>
</div>

</table>


</body>
</html>