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
<title> Welcome </title>
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
	background:violet;
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
    opacity: 1.0;
}

.b1{
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
	margin-top:5%;
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
	margin-top:-6.5%;
	margin-left:25%;
}

.b2:hover
{
	background:lavender;
}

</style>

<body id="body-color"  style="background:url(pink1.jpg); background-repeat:no-repeat;background-size:100%">



<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
        
            <th>Name of Boy</th>  
            <th>Name of Girl</th>  
            <th>Venue</th>  
            <th>Number of Guests</th>  
			<th>Date</th>
            <th>Address</th>  
			<!--<th>Email</th>  --> 
            <th>Invitations</th>  
			<th>Theme</th>
			<th>Hindu Wedding</th>
			<th>Christain Wedding</th>
            <th>Decorations</th>  
			<th>DJ /Photo</th>  
            <th>Guest Managing</th>  	
            <th>Edit Info</th>		
            <!--<th>Delete Info</th>-->			
        </tr>  
        </thead>  


<legend><h1><mark>Welcome to your profile !!!</mark></h1></legend>

<p><h3><mark>Your details</mark></h3></p>






<?php


/*$id=$_GET['id'];
//echo $id;
  $query = "SELECT * FROM sample WHERE ID='$id'";*/
  
if(isset($_GET['email'])){
      $email = $_GET['email']; 
 }else{
      $email = "Email not set in GET Method";
 }
//$email=$_GET['email'];
echo $email;
  $query = "SELECT * FROM books WHERE Email='$email'";
  $result = mysqli_query ($conn,$query);
  
  //if ($result) {
    while ($row = mysqli_fetch_array ($result)) {
		
		?>
		
		<tr>
	
  <td><?php  echo $row[1];?></td>
   <td><?php   echo $row[2]; ?></td>
    <td><?php  echo $row[3]; ?></td>
     <td><?php echo $row[4]; ?></td>
     <td><?php echo $row[5]; ?></td>
	 <td><?php echo $row[6]; ?></td>
      <!--<td><?php //echo $row[7]; ?></td>-->
      <td><?php echo $row[13]; ?></td>
      <td><?php echo $row[14]; ?></td>
	  <td><?php echo $row[15]; ?></td>
	  <td><?php echo $row[16]; ?></td>
      <td><?php echo $row[17]; ?></td>
      <td><?php echo $row[18]; ?></td>
      <td><?php echo $row[19]; ?></td>


     <td><a href="edit1.php?id=<?php echo $row[0];?>"><i class="fas fa-edit" ></i></a><b>EDIT</b></a></td>
    <!--<td><a href="delt.php?id=<?php echo $row[0];?>"><i class="fas fa-trash" ></i></a><b>Delete</b></a></td>-->


  
  <?php
	
 }
  
   
?>



</table>
</div>
<br/><br/>
<br/><br/>
<!--<a href="book.php"><mark>Add New Data<mark></a><br/><br/>
<a href="icon.php"><mark>Back<mark></a><br/><br/>-->
<button  class="b1" type="submit" name="submit" onclick="load()"><b>Add New Data</b></button><br/><br/>
<button  class="b2" type="submit" name="submit" onclick="go()"><b>Back</b></button><br/><br/><br/>

<script>
 function load()
 {
	 window.location.assign('book.php');
 }

</script>

<script>
function go()
{
	window.location.assign('icon.php');
}
</script>



<!--<form action="" method="POST">
<br/><br/>
 <button type="submit" name="submit" formaction="edit.php" >Edit</button>
 </form>-->

</body>
</html>