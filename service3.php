<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position:relative;
  width: 50%;
}

.image {
  display: block;
  width: 73%;
  height: auto;
  margin-left:10%;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 73%;
  opacity: 0;
  transition: .5s ease;
  background-color:pink;
  margin-left:10%;
}

.container:hover .overlay {
  opacity: 0.7;
}

.text {
  color:black;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.container1 {
  position:absolute;
  width: 50%;
}

.image1 {
  display: block;
  width: 70%;
  height: auto;
  margin-left:95%;
  margin-top:-0.09%;
}

.overlay1 {
  position:absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 70%;
  opacity: 0;
  transition: .5s ease;
  background-color:pink;
  margin-left:95%;
}

.container1:hover .overlay1 {
  opacity: 0.8;
}

.text1 {
  color:black;
  font-size: 20px;
  position:relative;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.b1{
	margin-left:90%;
	margin-top:25%;
	background-color:purple;
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  font-size: 15px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.b2{
	position:relative;
	margin-right:90%;
	margin-bottom:25%;
	background-color:purple;
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  font-size: 15px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
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
table, th, td {
  border: 1px solid black;
  margin-left:5%;
  margin-top:10%;
  background-color:white;
  filter:alpha(opacity=10); /* IE */
  -moz-opacity:0.9; /* Mozilla */
  opacity: 1.0;
}

table.hi,table.hi th,table.hi td{
	margin-top:-9%;
	margin-left:50%;
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
</style>
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

</head>
<body  id="body-color" style="background:url(pink1.jpg); background-repeat:no-repeat;background-size:100%" >

<center>
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
</center>

<div class="container">
  <img src="invi1.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><p><b>Your wedding invitation gives glimpse at your wedding theme...</b></p><p><b>So make them count!!!!! </b></p></div>
  </div>
  </div>
  
  <table align="left"  class="hi">
  <tr>
    <th>PRICE</th>
    <th>SPECIALITY</th>
  </tr>
  <tr>
    <td><b>Rs.200-Rs.1000</b></td>
	 <td><b>TRADITIONAL INVITATIONS</b></td>
</tr>
<tr>
    <td><b>Rs.500-Rs.1500</b></td>
	    <td><b>FUNKY INVITATIONS</b></td>
</tr>
<tr>
    <td><b>Rs.350-Rs.1000</b></td>
	    <td><b>HANDMADE CARDS</b></td>
</tr>
</table>
	

<div class="container1">
  <img src="dec.jpg" alt="Avatar1" class="image1">
  <div class="overlay1">
    <div class="text1"><p><b>Its amazing what a decoration can do.</b></p><p><b>Our creative team brings you latest designs which are elegant!!!</b></p></div>
  </div>
</div>

<table>
  <tr>
    <th>MINIMUM CHARGES</th>
    <th>DECORATIONS OFFERED</th>
  </tr>
  <tr>
    <td><b>Rs.1,00,000</b></td>
	 <td><b>STAGE DECORATIONS</b></td>
</tr>
<tr>
        <td> </td>
	    <td><b>VENUE DECORATIONS</b></td>
</tr>
<tr>
	<td> </td>
	<td><b>LIGHTINGS AND LANTERNS(Night Events)</b></td>
	</tr>
</table>
	

</body>
</html>
