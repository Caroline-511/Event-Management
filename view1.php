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
     $email=$_POST['email'];
	 //$id=$_GET['id'];

     //$phone=$_POST['psw'];
if($email!='')
 {
   $query=mysqli_query($conn,"select * from customer where email='".$email."'") or die(mysqli_error());
   echo $email;
   $res=mysqli_fetch_row($query);
   if($res)
   {
    //$_SESSION['search']=$email;
	
    header("location:profile.php?email=".$email);
   }
   else
   {
    echo "Entered Username is incorect";
   }
 }
 else
 {
  echo'Enter  username ';
 }
}
?>



<!--if (isset($_POST['submit'])){
        // removes backslashes
	$email = stripslashes($_REQUEST['umail']);
        //escapes special characters in a string
	$email = mysqli_real_escape_string($conn,$email);
	$password = stripslashes($_REQUEST['psw']);
	$password = mysqli_real_escape_string($conn,$password);
	//Checking is user existing in the database or not
	$email = trim($_POST['umail']);
    $password = trim($_POST['psw']);
        $query = "SELECT * FROM `my3` WHERE Email='$email'
and Password='".md5($password)."'";
	$result = mysqli_query($conn,$query) or die(mysqli_error());
	$rows = mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
        if($rows==1){
	    $_SESSION['umail']=$row['umail'];
            // Redirect user to c2.php
	    header("Location: c2.php");
}else{
	echo 
"<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='c3.php'>Login</a></div>";
	}
    }
?>


<!--extract($_POST);
$email=$_POST['umail'];
$password=$_POST['psw'];
$sql="INSERT into my values('$email','$password')";


$qry=mysqli_query($conn,$sql);
if(!$qry)
	echo mysqli_error($conn);
else
	echo "Success";
!-->




<html>
<head>



<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}


.topnav {
  overflow: hidden;
  background-color:;
}

.topnav a {
  float: left;
  color:white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.a1{
	position:absolute;
	margin-top:5%;
	margin-left:34%;
}

fieldset{
    background-color:white;
    filter:alpha(opacity=10); /* IE */
    -moz-opacity:0.9; /* Mozilla */
    opacity:1.0;
}

.hi{
	max-width: 650px;
	padding: 10px 10px;
    background:pink;
	margin: 5px auto;
	padding: 10px;
	background:snow;
	border-radius: 30px;
	font-family:  Georgia, Times New Roman, sans-serif;
	margin-left:22%;
	margin-top:10%;
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

.b1{
	position:absolute;
	display: block;
	padding:8px 5px 2px 5px;
	color: black;
	margin: 0 auto;
	background: snow;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 15%;
	border: 1px solid black;
	border-width: 2px 2px 5px;
	margin-bottom:10px;
	margin-top:-3%;
	margin-left:5%;
}

.b1:hover
{
	background:lavender;
}

.b2{
	position:relative;
	display: block;
	padding:8px 5px 2px 5px;
	color: black;
	margin: 0 auto;
	background: snow;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 15%;
	border: 1px solid black;
	border-width: 2px 2px 5px;
	margin-bottom:10px;
	margin-top:-8.5%;
	margin-left:55%;
}

.b2:hover
{
	background:lavender;
}

</style>
<title>EXISTING</title>
</head>

<center>

<body id="body-color"  style="background:url(pink1.jpg); background-repeat:no-repeat;background-size:100%">

<!--<div id="Register" class="topnav"><a href="#">

<a href="c7.php"><b>Home</b></a>
<a href="c6.php"><b>Services</b></a>
<a href="c10.php"><b>Sign-up</b></a>
<a href="c3.php"><b>Login</b></a>
<a href="a1.php"><b>Contact Us</b></a>
</div>!-->
<form action="" method="post">
  <div id="login" class="hi">
<fieldset><legend><h1>View Profile</h1></legend><br/><br/><br/>
  
  <tr>
<td><input type="email" placeholder="Email" name="email" id="umail" required><br/><br/></td>
</tr>

	<p><h3>Please enter the email used in Signup</h3></p><br/><br/><br/><br/><br/>
	<button  class="b1" type="submit" name="submit"><b>Login</b></button><br/><br/>


</form>
</fieldset>
</center>
</div>

<button  class="b2" type="sub" name="sub" onclick="go()"><b>Back</b></button><br/><br/>

   
<script>
/*function load()
{
	window.location.assign("profile.php");
}*/
</script>
   
<script>
function go()
{
	window.location.assign("icon.php");
}
</script>

</body>
</html>








