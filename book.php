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
$sql3="SELECT id FROM books order by id desc";
$result=mysqli_query($conn,$sql3);
$row=mysqli_fetch_array($result);
$id=$row['id']+1;

if(isset($_POST['submit']))
{
$boy=$_POST['gname'];
$girl=$_POST['bname'];
$venue=$_POST['ven'];
$guests=$_POST['guest'];
$date=$_POST['date'];
$address=$_POST['adr'];
$email=$_POST['mail'];
$cateringb=$_POST['cater'];
$invitationb=$_POST['invib'];
$decorationb=$_POST['decob'];
$djb=$_POST['djb'];
$hostb=$_POST['hostb'];
$sql="INSERT into books(BoyName,GirlName,Venue,Guests,Date,Address,Email,CateringB,InvitationB,DecorationB,DJB,HostB) values('$boy','$girl','$venue','$guests','$date','$address','$email','$cateringb','$invitationb','$decorationb','$djb','$hostb')";
echo $id;

$qry=mysqli_query($conn,$sql);
if(!$qry)
	echo mysqli_error($conn);
else
	echo "Success";
    header('Location:book1.php?id='.$id);
}
?>

<!DOCTYPE html>
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

fieldset{
    background-color:white;
    filter:alpha(opacity=10); /* IE */
    -moz-opacity:0.9; /* Mozilla */
    opacity:1.0;
}

.hi{
	max-width: 600px;
	padding: 10px 10px;
    background:pink;
	margin: 5px auto;
	padding: 10px;
	background:snow;
	border-radius: 30px;
	font-family:  Georgia, Times New Roman, sans-serif;
	margin-left:26%;
	margin-top:0.2%;
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
	margin-top:-2%;
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
	margin-top:-4%;
	margin-left:54%;
}

.b2:hover
{
	background:lavender;
}


</style>
<title>REGISTER</title>

</head>

<center>
<body id="body-color" style="background:url(pink1.jpg); background-repeat:no-repeat;background-size:100%" >

<!--<div id="Register" class="topnav"><a href="#">

<a href="c7.php"><b>Home</b></a>
<a href="c6.php"><b>Services</b></a>
<a href="c10.php"><b>Sign-up</b></a>
<a href="c3.php"><b>Login</b></a>
<a href="a1.php"><b>Contact Us</b></a>

</center>!-->

<center>
<div class="hi">
<form name="form1" method="POST" action="book.php">
<fieldset>
<legend><h1>REGISTER-I</h1></legend>
<table border="0">
<tr>
 <td><input type="text" placeholder="Name of the Boy" name="gname" id="gname" ><br/></br></td>
 </tr>
<tr>
<td><input type="text" placeholder="Name of the Girl" name="bname" id="bname" ><br/><br/></td>
</tr>
<tr>
<td><input type="text" placeholder="Venue" name="ven" id="ven" required><br/><br/></td>
</tr>
<tr>
<td><input type="text" placeholder="Number of Guests" name="guest" id="guest" required><br/><br/></td>
</tr>
<tr>
<td><input type="date" placeholder="Date of Event" name="date" id="date" required><br/><br/></td>
</tr>
<tr>
<td><textarea placeholder="Address/Contact" name="adr" id="adr" required></textarea><br/><br/></td>
</tr>
<tr>
<td><input type="email" placeholder="Email" name="mail" id="mail" required><br/><br/></td>
</tr>
<tr>
<!--<td><input type="text" placeholder="Catering Budget" name="cater" id="cater" required><br/><br/></td>
</tr>
<tr>
<td><input type="text" placeholder="Invitation Budget" name="inv" id="inv" required><br/><br/></td>
</tr>
<tr>
<td><input type="text" placeholder="Decoration Budget" name="mail" id="mail" required><br/><br/></td>
</tr>
<tr>
<td><input type="text" placeholder="DJ Budget" name="dj" id="dj" required><br/><br/></td>
</tr>
<tr>
<td><input type="email" placeholder="Host Budget" name="host" id="host" required><br/><br/><br/><br/><br/><br/><br/></td>
</tr>-->

<table>
<tr>
<td><b>BUDGET</b></td>
</tr>
<td><input type="text" placeholder="Catering" name="cater" id="cater" required></td>
</tr>
<tr>
<td><input type="text" placeholder="Invitation" name="invib" id="invib"required></td>
</tr>
<tr>
<td><input type="text" placeholder="Decoration" name="decob" id="decob" required></td>
</tr>
<tr>
<td><input type="text" placeholder="DJ/Photography" name="djb" id="djb" required></td>
</tr>
<tr>
<td><input type="text" placeholder="host" name="hostb" id="hostb" required><br/><br/><br/></td>
</tr>
</table>

<!--<tr>
<td><textarea placeholder="Message" name="message" id="message" required></textarea><td>-->
<button  class="b1" type="submit" name="submit" ><b>Book</b></button>
</form>
</table>
</fieldset>
</div>
</center>

<!--<input class="b1" id="button" type="submit" name="submit" value="Book">-->


<button  class="b2" type="sub" name="sub" onclick="go()"><b>Back</b></button>


<script>
 /*function load()
 {
	 window.location.assign('book1.php');
 }*/

</script>

<script>
 function go()
 {
	 window.location.assign('icon.php');
 }

</script>

</body>
</html>

