<?php
	SESSION_START();
?>
<html>

 <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 0px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
 </head>
 <body>
    <div class ="container">
	  <h2>HR login</h2>
	  <form action="index.php" method="post">
	    <div class ="inputBox">
		 <input type="text" name="username" placeholder="Username" required="">
		 <label></label>
		</div> 
		<div class="inputBox">
		 <input type="password" name="password" placeholder="Password" required="">
		 <label></label>
		</div> 
		 <input type="submit" name="submit" value="submit"> 
		 <br/>
		 <br/>
		 <!--<a href="http://localhost/Web/HumanPayroll/forgot.html">forgot password?</a>-->
	  </form>
	</div>
 </body>
 
 </html>
 
 <?php

	if(isset($_POST["submit"]))
	{
		$user=$_POST["username"];
		$pass=$_POST["password"];
		$con =mysqli_connect("localhost","root","root","human payroll");
		$query = "select * from admin where Username ='$user' and Password='$pass'";
		$result=mysqli_query($con,$query);
		$row = mysqli_fetch_array($result);
		if($row['username'] == $user && $row['password'] == $pass)
		{
			$_SESSION['username'] =$user;
			header('location:../HRhomepage.html');
	
		}else{
			echo "Failed to login";
		}
	}
?>