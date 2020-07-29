<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"event");
if($db)
{
	//echo "connected succesfully";
}
else{
	echo "not connected";
}
?>


<?php
session_start();

if (isset($_POST['submit']))
{
//$id=$_POST['lid'];
$name=$_POST['uname'];
$email=$_POST['umail'];
$phone=$_POST['uphone'];
$password=$_POST['psw'];
$confirm=$_POST['cpsw'];
 $sql="INSERT into customer(Name,Email,Phone,Password,Confirm_P) values('$name','$email','$phone','$password','$confirm')";
 $qry=mysqli_query($conn,$sql);
 if(!$qry)
	echo mysqli_error($conn);
else
	echo "Success";  
     header('Location: login.php');  
}
?>
 

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
          function Validate() {
            var password = document.getElementById("psw").value;
            var confirmPassword = document.getElementById("cpsw").value;
            if (password != confirmPassword) {
                alert("You first Passwords is not similar with 2nd password. Please enter same password in both");
                return false;
            }
            return true;
        }
    </script>

<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:;
  margin-left:65%;
}

.topnav a {
  float: left;
  color:black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color:pink;
  color: black;
}

mark{
	background:white;
}

mark1{
	background:snow;
}
fieldset{
    background-color:white;
    filter:alpha(opacity=10); /* IE */
    -moz-opacity:0.9; /* Mozilla */
    opacity:1.0;
}

.hi{
	max-width: 450px;
	padding: 10px 10px;
    background:pink;
	margin: 5px auto;
	padding: 10px;
	background:snow;
	border-radius: 30px;
	font-family:  Georgia, Times New Roman, sans-serif;
	margin-left:60%;
	margin-top:-35%;
}

.hi h1
{
	text-shadow: 2px 2px red;
}

.hi fieldset{
	border: none;
}
.hi legend {
	font-size: 1.5em;
	margin-bottom: 8px;
}

.hi button{
	position: relative;
	display: block;
	padding:8px 5px 2px 5px;
	color: black;
	margin: 0 auto;
	background: snow;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 50%;
	border: 1px solid black;
	border-width: 2px 2px 5px;
	margin-bottom: 10px;
}

.hi button:hover
{
	background:lavender;
}

.plan
{
color:black;
margin-left:15%;
margin-top:22%;
font-family:"Tangerine", serif;
font-size:110%;
}
	
.a3{
	position:absolute;
	margin-top:5%;
	margin-left:10%;
}



</style>

<title>Signup</title>
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

</head>
<center>

<body  id="body-color" style="background:url(pink1.jpg); background-repeat:no-repeat;background-size:100%" >

<!--<a href="login.php"><b>LOGIN</b><i class="fas fa-heart"></i></a>-->

<div id="Register" class="topnav"><a href="#">
<a href="service2.php"><b>Services</b><i class="fas fa-gift"></i></a>
<a href="login.php"><b>Login</b><i class="fas fa-heart"></i></a>
<a href="icon.php"><b>Icon-Page</b><i class="fas fa-edit"></i></a>


<!--<a href="register.php"><b>Home</b></a>
<a href="service2.php"><b>Services</b></a>
<!--<a href="register.php"><b>Sign-up</b></a>
<a href="a1.php"><b>Contact Us</b></a>-->
</div>
</center>

<div class="plan">
<h1><p>Plan Your Dream Events With Us</p></h1>
<h1><p>Because What You Need Is A Event</p></h1>
<h1><p>To Remember For A Lifetime</p></h1>

</div>

<center>
<div class="hi">
<form action=""  method="post">

  <div  id="signup">
<fieldset>
<legend><h1>SIGN-UP</h1></legend><br/><br/><br/>
<table border="0">

<tr>
     <!--<td> <label for="uname"><b>Name</b></label></td>-->
    <td><input type="text" placeholder="Your name" name="uname" id="uname" required><br/><br/></td>
	</tr>
</div>

<tr>
  <!-- <td> <label for="uname"><b>Email</b></label></td>-->
    <td><input type="text" placeholder="Email" name="umail" id="umail" required><br/><br/></td>
	</tr>
	
	<tr>
   <!--<td> <label for="uname"><b>Phone</b></label></td>-->
    <td><input type="text" placeholder="Contact No" name="uphone" id="uphone" required><br/><br/></td>
	</tr>
	
	<tr>
 <!-- <td> <label for="psw"><b>Password</b></label></td>-->
   <td> <input type="password" placeholder="Password" name="psw" id="psw" required><br/><br/></td>
	</tr>
	
	<tr>
	<!--<td><label for="psw"><b> Confirm Password</b></label></td>-->
   <td> <input type="password" placeholder="Confirm Password" name="cpsw" id="cpsw" required ><br/><br/></td>
	</tr>
</table>

    <button type="submit" name="submit" onclick="return Validate()" ><b>Sign up</b></button>

  <!-- <button type="button" class="cancelbtn"><b>Cancel</b></button><br/><br/>-->
   
	<p><b><mark>Already Registered?</mark></b> <a href="login.php"><mark1>Login here</mark1></a></p>
	</fieldset>
	</div>
  </form>
</div>
</center> 



</body>
</html>