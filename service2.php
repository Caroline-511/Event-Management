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
  width: 78%;
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
  width: 78%;
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
  margin-left:105%;
  margin-top:-0.01%;
}

.overlay1 {
  position:absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 75%;
  opacity: 0;
  transition: .5s ease;
  background-color:pink;
  margin-left:105%;
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
.des{
	margin-left:50%;
	margin-top:-12%;
	font-family:"Tangerine",cursive, serif;
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

.im1{
	margin-left:55%;
	margin-top:-25%;
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
mark{
	background:white;
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

<i class="fa fa-cutlery"></i>

<a href="service2.php"><b>Budget and Catering</b></a>
<a href="service3.php"><b>Invitations and Decorations</b></a>
<a href="service4.php"><b>DJ and Hosting</b></a>
<a href="summary.php"><b>Summary</b></a><div class="dropdown">
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
  <img src="budget.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><p><b>Turn your wedding budget into a spending plan that works for you.</b></p><p><b>We will help you set a realistic budget according to your status and requirements and stick to it till the end</b></p></div>
  </div>
  </div>

  <div class="des"><h2><p><mark>WE GIVE A WIDE RANGE OF BUDGETS</mark></p></h2><h2><p><mark>FOR THE CONVINIENECE OF THE USERS</mark></p></h2></div>

<div class="container1">
  <img src="cater.jpg" alt="Avatar1" class="image1">
  <div class="overlay1">
    <div class="text1"><p><b>We do far more than just prepare your wedding menu</b></p><p><b>We also supply tableware , stock the bar and bake the cake!!!</div>
  </div>
</div>

<table>
  <tr>
    <th>PER PLATE BUDGET</th>
    <th>FOOD POLICY</th>
  </tr>
  <tr>
    <td>LESS THAN Rs.500</td>
	 <td>OUTSIDE CATERING IS ALLOWED</td>
</tr>
<tr>
    <td>Rs.500-Rs.1000</td>
	    <td>OUTSIDE ALCHOHOL IS ALLOWED</td>
</tr>
<tr>
	<td>Rs.1000-Rs.1500</td>
	</tr>
	<tr>
    <td>Rs.1500 & ABOVE</td>
  </tr>
</table>
	
</body>
</html>
