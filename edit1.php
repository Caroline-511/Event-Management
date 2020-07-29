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
if(isset($_POST['submit']))
{    
    $id = $_GET['id'];
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
    $invitation=$_POST['invi'];
    $theme=$_POST['theme'];
    $hw=$_POST['hindu'];
    $cw=$_POST['chris'];
    $decoration=$_POST['decor'];
    $dj=$_POST['dj'];
    $guestM=$_POST['host'];
	
    /*$boy=$_POST['name'];
    $girl=$_POST['name1'];
    $venue=$_POST['ven'];
    $date=$_POST['date'];
    $address=$_POST['adr'];
    $email=$_POST['mail'];
    $budget=$_POST['be'];
    $comments=$_POST['message'];
	$func=$_POST['Functions'];
    $venueD=$_POST['vd'];
    $guestM=$_POST['gm'];
    $others=$_POST['oe'];
    $details=$_POST['mess'];*/

    // checking empty fields
    /*if(empty($boy) || empty($age) || empty($email)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        } */       
         
        //updating the table
       $result = mysqli_query($conn, "UPDATE books SET BoyName='$boy',GirlName='$girl',Venue='$venue',Guests='$guests',Date='$date',Address='$address',Email='$email',CateringB='$cateringb',InvitationB='$invitationb',DecorationB='$decorationb',DJB='$djb',HostB='$hostb',Invitation='$invitation',Theme='$theme',HinduW='$hw',ChristainW='$cw',Decoration='$decoration',DJ='$dj',GuestM='$guestM' WHERE id='$id'");
        
        //redirectig to the display page. In our case, it is index.php
      header("Location: profile.php?email=$email");
    
}
?>

<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM books WHERE id='$id'");
 
while($res = mysqli_fetch_array($result))
{
	$boy=$res['BoyName'];
$girl=$res['GirlName'];
$venue=$res['Venue'];
$guests=$res['Guests'];
$date=$res['Date'];
$address=$res['Address'];
$email=$res['Email'];
$cateringb=$res['CateringB'];
$invitationb=$res['InvitationB'];
$decorationb=$res['DecorationB'];
$djb=$res['DJB'];
$hostb=$res['HostB'];
$invitation=$res['Invitation'];
$theme=$res['Theme'];
$hw=$res['HinduW'];
$cw=$res['ChristainW'];
$decoration=$res['Decoration'];
$dj=$res['DJ'];
$guestM=$res['GuestM'];
	
	
	
	/*$boy=$res['BoyN'];
    $girl=$res['GirlN'];
    $venue=$res['VenueG'];
    $date=$res['Date'];
    $address=$res['Address'];
    $email=$res['Email'];
    $budget=$res['Budget'];
    $comments=$res['Comments'];
	$func=$res['Functions'];
    $venueD=$res['VenueDec'];
    $guestM=$res['GuestMang'];
    $others=$res['Others'];
    $details=$res['Details'];*/

    //header("Location:edit.php?email=".$email);
}

?>

<style>
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
	margin-top:0.9%;
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

fieldset{
    background-color:white;
    filter:alpha(opacity=10); /* IE */
    -moz-opacity:0.9; /* Mozilla */
    opacity:1.0;
}

.b1{
	position:absolute;
	display: block;
	padding:5px 2px 2px 3px;
	color: black;
	margin: 0 auto;
	background: snow;
	font-size: 15px;
	text-align: center;
	font-style: normal;
	width: 10%;
	border: 1px solid black;
	border-width: 2px 2px 3px;
	margin-bottom:10px;
	margin-top:1%;
	margin-left:-3%;
}

.b1:hover
{
	background:lavender;
}



</style>

<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body id="body-color" style="background:url(pink1.jpg); background-repeat:no-repeat;background-size:100%" >

  <!--  <a href="search.php">Home</a>-->
    <div class="hi">
    <form name="form1" method="post" action="">
	<center>
	<fieldset>
	<legend><h1>EDIT</h1></legend>
        <table border="0">
            <tr> 
                <td>Name of the Boy</td>
                <td><input type="text" name="gname" value="<?php echo $boy;?>"></td>
            </tr>
            <tr> 
                <td>Name of the Girl</td>
                <td><input type="text" name="bname" value="<?php echo $girl;?>"></td>
            </tr>
            <tr> 
                <td>Venue</td>
                <td><input type="text" name="ven" value="<?php echo $venue;?>"></td>
            </tr>
			<tr> 
                <td>Number of Guests</td>
                <td><input type="text" name="guest" value="<?php echo $guests;?>"></td>
            </tr>
			<tr> 
                <td>Date of Event</td>
                <td><input type="text" name="date" value="<?php echo $date;?>"></td>
            </tr>
			<tr> 
                <td>Address/Contact</td>
                <td><input type="text" name="adr" value="<?php echo $address;?>"></td>
            </tr>
			<tr> 
                <td>Email Id</td>
                <td><input type="text" name="mail" value="<?php echo $email;?>"></td>
            </tr>
			<tr> 
                <td>Catering Budget</td>
                <td><input type="text" name="cater" value="<?php echo $cateringb;?>"></td>
            </tr>
			<tr> 
                <td>Invitation Budget</td>
                <td><input type="text" name="invib" value="<?php echo $invitationb;?>"></td>
            </tr>
			<tr> 
                <td>Decoration Budget</td>
                <td><input type="text" name="decob" value="<?php echo $decorationb;?>"></td>
            </tr>
			<tr> 
                <td>DJ Budget</td>
                <td><input type="text" name="djb" value="<?php echo $djb;?>"></td>
            </tr>
			<tr> 
                <td>Host Budget</td>
                <td><input type="text" name="hostb" value="<?php echo $hostb;?>"></td>
            </tr>
			<tr> 
                <td>Invitation</td>
                <td><input type="text" name="invi" value="<?php echo $invitation;?>"></td>
            </tr>
			<tr> 
                <td>Theme</td>
                <td><input type="text" name="theme" value="<?php echo $theme;?>"></td>
            </tr>
			<tr> 
                <td>Hindu Wedding</td>
                <td><input type="text" name="hindu" value="<?php echo $hw;?>"></td>
            </tr>
			<tr> 
                <td>Christain Wedding</td>
                <td><input type="text" name="chris" value="<?php echo $cw;?>"></td>
            </tr>
			<tr> 
                <td>Decoration</td>
                <td><input type="text" name="decor" value="<?php echo $decoration;?>"></td>
            </tr>
			<tr> 
                <td>DJ</td>
                <td><input type="text" name="dj" value="<?php echo $dj;?>"></td>
            </tr>
			<tr> 
                <td>Guest Management</td>
                <td><input type="text" name="host" value="<?php echo $guestM;?>"></td>
            </tr>
                <td><input type="hidden" name="ID" value=<?php echo $_GET['id'];?>></td>
                <td><input class="b1" type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
		</fieldset>
		</center>
		</div>
    </form>
</body>
</html>