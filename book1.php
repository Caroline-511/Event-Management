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
/*$sql3="SELECT Email FROM sample where Email='$email'";
$result=mysqli_query($conn,$sql3);
$row=mysqli_fetch_array($result);
$email=$row['mail'];*/

/*if(isset($_GET['id'])){
      $id = $_GET['id']; 
 }else{
      $id = "id not set in GET Method";
 }*/
 $id=$_GET['id'];

if(isset($_POST['submit']))
{
$invitation=$_POST['invi'];
$theme=$_POST['theme'];
$hw=$_POST['hindu'];
$cw=$_POST['chris'];
$decoration=$_POST['decor'];
$dj=$_POST['dj'];
$guestM=$_POST['host'];

$a="";
$b="";
$c="";
$d="";
$e="";
$f="";
$g="";

  
    foreach($invitation as $chk1)  
       {		   
          $a.= $chk1." , ";  
       }   
    foreach($theme as $chk2)  
       { 
          $b.= $chk2." , ";  
       }  
	   
    foreach($hw as $chk3)  
       {    
          $c.= $chk3." , ";  
       }  
 
    foreach($cw as $chk4)  
       {  
          $d.= $chk4." , ";  
       } 

    foreach($decoration as $chk5)  
       { 
          $e.= $chk5." , ";  
       }  
	   
    foreach($dj as $chk6)  
       {  
          $f.= $chk6." , ";  
       }  

    foreach($guestM as $chk7)  
       {  
          $g.= $chk7." , ";  
       }  
	   
$sql="UPDATE books SET Invitation='$a',Theme='$b',HinduW='$c',ChristainW='$d',Decoration='$e',DJ='$f',GuestM='$g' WHERE id='$id'";
$qry=mysqli_query($conn,$sql);
if(!$qry)
	echo mysqli_error($conn);
else
	echo "Success";
    header("Location:view1.php?ID=".$id);
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
	max-width: 850px;
	padding: 10px 10px;
    background:pink;
	margin: 5px auto;
	padding: 10px;
	background:snow;
	border-radius: 30px;
	font-family:  Georgia, Times New Roman, sans-serif;
	margin-left:18%;
	margin-top:1%;
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
	margin-top:7.5%;
	margin-left:10%;
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
	margin-top:-6.5%;
	margin-left:55%;
}

.b2:hover
{
	background:lavender;
}

.multiselect {
  width: 350px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}

.s2{
	margin-top:5%;
	margin-left:-50%;
}

.s3{
	margin-top:-200%;
	margin-left:100%;
}

.r1{
	margin-top:-9%;
	margin-left:50%;
}

.s4{
	margin-top:-20%;
	margin-left:-50%;
}

</style>
<title>REGISTER-2</title>

</head>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css"
    rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"
    rel="stylesheet" type="text/css" />
<script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"
    type="text/javascript"></script>


<script type="text/javascript">
    $(function () {
        $('#invi').multiselect({
            includeSelectAllOption: true
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#theme').multiselect({
            includeSelectAllOption: true
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#hindu').multiselect({
            includeSelectAllOption: true
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#chris').multiselect({
            includeSelectAllOption: true
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#decor').multiselect({
            includeSelectAllOption: true
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#dj').multiselect({
            includeSelectAllOption: true
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#host').multiselect({
            includeSelectAllOption: true
        });
    });
</script>


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
<form name="form1" method="POST" action="">
<fieldset>
<legend><h1>REGISTER-II</h1></legend>
<table border="0">


<div class="s2">
<h4><b>INVITATIONS</b></h4>
<select name="invi[]" id="invi" multiple="multiple">
    <option value="Traditional">Traditional</option>
    <option value="Funky">Funky</option>
    <option value="Handmade">Handmade</option>
</select>
</div>

<div class="r1">
<h4><b>THEME</b></h4>
<select name="theme[]" id="theme" multiple="multiple" required>
    <option value="Wedding">Wedding</option>
    <option value="Parties">Parties</option>
    <option value="Business Events">Business Events</option>
    <option value="Coorporate Events">Coorporate Events</option>
</select><br/><br/><br/><br/><br/><br/>
</div>

<div class="r1">
<h4><b>HINDU WEDDING</b></h4>
<select name="hindu[]" id="hindu" multiple="multiple">
    <option value="Engagement">Engagement</option>
    <option value="Mehendi/Sangeeth">Mehendi/Sangeeth</option>
    <option value="Wedding">Wedding</option>
</select><br/><br/><br/><br/><br/><br/>
</div>

<div class="r1">
<h4><b>CHRISTAIN WEDDING</b></h4>
<select name="chris[]" id="chris" multiple="multiple">
    <option value="Engagement">Engagement</option>
    <option value="Roce">Roce</option>
    <option value="Wedding">Wedding</option>
</select>
</div>

<div class="s4">
<h4><b>DECORATIONS</b></h4>
<select name="decor[]" id="decor" multiple="multiple">
    <option value="Stage">Stage Decoration</option>
    <option value="Venue">Venue Decoration</option>
    <option value="Stands and Carpets">Stands and Carpets</option>
    <option value="Chair/Tables">Chair and Table Covers</option>
    <option value="Round table">Round Tables</option>
	<option value="LCD Screens">LCD Screens</option>
    <option value="Wedding Cake">Wedding Cake</option>
    <option value="Coolers/AC">Coolers/AC on Stage</option>
    <option value="Mandap">Mandap Decoration</option>
</select><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>

<div class="s4">
<h4><b>DJ/PHOTOGRAPHY</b></h4>
<select name="dj[]" id="dj" multiple="multiple">
    <option value="Cinematic+DJ">Cinematic + DJ</option>
    <option value="Pre-Wedding Photoshoot">Pre-Wedding Photoshoot</option>
    <option value="Photo Album">Photo Album</option>
</select><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>

<div class="s4">
<h4><b>GUEST MANAGEMENT</b></h4>
<select name="host[]" id="host" multiple="multiple">
    <option value="Hosts/Anchor">Hosts/Anchor</option>
    <option value="Security/Parking">Security/Valet Parking</option>
    <option value="Travel/Stay">Travel and Stay Arrangements</option>
</select>
</div>

<button  class="b1" type="submit" name="submit"><b>Book</b></button><br/><br/>


<p><h4>CATERING MENU WILL BE PROVIDED AFTER BOOKING!!!</h4><p><br/><br/><br/><br/>

<!--<tr>
<td><textarea  class="s3" placeholder="Specify Details" name="details" id="details"></textarea></td>
</tr>-->

</form>
</table>
</fieldset>
</div>
</center>


<button  class="b2" type="sub" name="sub" onclick="go()"><b>Back</b></button><br/><br/>


<script>
/* function load()
 {
	 window.location.assign('view1.php');
 }
*/
</script>

<script>
function go()
{
	window.location.assign('book.php');
}
</script>

</body>
</html>

