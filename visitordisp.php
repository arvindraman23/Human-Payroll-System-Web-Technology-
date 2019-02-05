<?php
	
	SESSION_START();
	
?>

<?php
	$uname=$_SESSION["username"];
	$con =mysqli_connect("localhost","root","root","human payroll");
	$sql = "select * from contact";
	$records=mysqli_query($con,$sql);
?>


<html>

<head>
<title>Employee Project Details</title>
</head>
<style>

body{
background-image:url('blue.jpg');
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
margin-left:390px;
margin-top:200px;
font-family:Arial;
font-size:50px;

}
</style>

<body>
<div class="main">
<h1><font color="white">VISITOR ENQUIRIES</font></h1>
</div>
<div class="main1">
<table border="2pt solid black" width="50%" border="0" cellpadding="4" cellspacing="4" bgcolor="Wheat">
<tr>
<th>Name</th>
<th>Email</th>
<th>Message</th>
</tr>
<tr> <td>&nbsp;</td> </tr>
<?php
while($sal=mysqli_fetch_array($records)){
	
	echo "<tr>";
	echo "<td align='center'>".$sal['name']."</td>";
	echo "<td align='center'>".$sal['email']."</td>";
	echo "<td align='center'>".$sal['message']."</td>";
	echo "</tr>";
}
?>
</div>

</table>


</body>
</html>