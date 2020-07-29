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


<!DOCTYPE html>
<html>

<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">

<head>
<title> Summary </title>
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

</head>


<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
	td, th {
  border: 2px solid black;
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color:;
}

mark{
	background:white;
}

.fa-edit fa-trash{
margin-top:%;
margin-left:;
color:blue ;
font-size:;
background:;
}
th,td,tr{
    background-color:white;
    filter:alpha(opacity=10); /* IE */
    -moz-opacity:0.9; /* Mozilla */
    opacity:1.0;
}
table{
	position:absolute;
	margin-left:1%;
	margin-top:5%;
}
.a2{
	position:absolute;
	margin-top:40%;
	margin-left:30%;
}
.topnav {
  overflow: hidden;
  background-color:;
  margin-left:16%;
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
.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: pink;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:LightGray;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color:PaleVioletRed;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.move{
	margin-top:30%;
	font-size:45px;
}

</style>

<body id="body-color"  style="background:url(pink1.jpg); background-repeat:no-repeat;background-size:cover">
<div id="Register" class="topnav"><a href="#">

<a href="service2.php"><b>Budget and Catering</b></a>
<a href="service3.php"><b>Invitations and Decorations</b></a>
<a href="service4.php"><b>DJ and Hosting</b></a>
<a href="summary.php"><b>Summary</b></a>
<div class="dropdown">
<button class="dropbtn"><b>Options</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="register.php">Login/Signup</a>
      <a href="book.php">Already logged in? Book</a>
	  	  <a href="icon.php">Icon Page</a>

    </div>
  </div> 
<!--<a href="register.php"><b>Login/Signup</b></a>-->
</div>


<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
            <th>Service</th>  
            <th>Minimum Amount</th>  
            <th>Maximum Amount</th>  
            <th>Details</th> 
        </tr>  
        </thead>  

<?php


/*$id=$_GET['id'];
//echo $id;
  $query = "SELECT * FROM sample WHERE ID='$id'";*/

//$email=$_GET['email'];
//echo $email;
  $query = "SELECT * FROM services";
  $result = mysqli_query ($conn,$query);
  
  //if ($result) {
    while ($row = mysqli_fetch_array ($result)) {
		
		?>
		
		<tr>
	
  <td><?php  echo $row[1];?></td>
   <td><?php   echo $row[2]; ?></td>
    <td><?php  echo $row[3]; ?></td>
     <td><?php echo $row[4]; ?></td>
     
  <?php
 }   
?>

</table>
</div>
<br/><br/>
<br/><br/>

<marquee direction="left" class="move" ><b>The staff details will be mailed to you once the registration is done</b></marquee>

<!--<form action="" method="POST">
<br/><br/>
 <button type="submit" name="submit" formaction="edit.php" >Edit</button>
 </form>-->

</body>
</html>