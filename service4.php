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
  width: 80%;
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
  width: 80%;
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
  width: 75%;
  height: auto;
  margin-left:95%;
  margin-top:-0.01%;
  margin-bottom:10%;
}

.overlay1 {
  position:absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 84%;
  width: 75%;
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

<div class="container">
  <img src="dj2.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><p><b>Not just video and photography we also provide DJ...</b></p></div>
  </div>
  </div>
 
 <table align="left"  class="hi">
  <tr>
    <th>PHOTOGRAPHY</th>
    <th>PRICE</th>
	<th>DJ</th>
  </tr>
<tr>
    <td><b>CINEMATIC VIDEOGRAPHY</b></td>
	 <td><b>Rs.50,000 per day</b></td>
	<td><b>DJ HARP (Rs.40,000-Rs.60,000)</b></td>
</tr>
<tr>
    <td><b>PRE-WEDDING PHOTOSHOOT</b></td>
	 <td><b>Rs.50,000</b></td>
	 <td><b>SUNSHINE DJ (Rs.50,000-Rs.75000)</b></td>
</tr>
<tr>
    <td><b>PHOTO ALBUM</b></td>
	    <td><b>Rs.25,000</b></td>
</tr>
</table>


<div class="container1">
  <img src="host1.jpg" alt="Avatar1" class="image1">
  <div class="overlay1">
    <div class="text1"><p><b>Its your guest that will bring wedding to life..</b></p><p><b>We offer best hospitality to your relatives during the wedding!!</b></p></div>
  </div>
</div>

<table>
  <tr>
    <th>MINIMUM CHARGES</th>
    <th>SPECIFICATIONS</th>
  </tr>
  <tr>
    <td><b>Rs.75,000</b></td>
	<td><b>DETAILS PROVIDED AFTER REGISTRATION</b></tr>
</tr>
</table>

</body>
</html>
