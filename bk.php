<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('helping hands');

	$p_no = $_POST['phone_no'];
	$n = $_POST['name'];
	$add = $_POST['address'];
	$p = $_POST['pincode'];
	$c=$_POST['comnt'];
	$sc=$_SESSION['sc'];
	$uc=$_SESSION['uc4'];
	$slot=$_POST['slot'];
	
	if($slot=='1')
	{
		$slot='1';
		mysql_query("UPDATE availability set slot1=0 where CONTACT='$sc'");
		
	}
	if($slot=='2')
	{
		$slot='2';
		mysql_query("UPDATE availability set slot2=0 where CONTACT='$sc'");
	}
	if($slot=='3')
	{
		$slot='2';
		mysql_query("UPDATE availability set slot3=0 where CONTACT='$sc'");
	}
	
	
	/*
	mysql_query("UPDATE TABLE availibilaty set ")*/

if($n && $p_no && $add && $p)
{
	$result=mysql_query("INSERT INTO booking(NAME,PHONE_NO,ADDRESS,PINCODE,COMMENT,SERMAN_CONTACT,USER_CONTACT,SLOT) VALUES('$n','$p_no','$add', '$p','$c','$sc','$uc','$slot');");
	
	echo "<a href=hh.html><center>Click to login</center></a>";
}
else
{
	echo "<center>Enter all the credentials</center>";
}

echo "<html>
<title>helping hands </title>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<link rel='stylesheet' href='book.css'>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
<link rel='stylesheet' type='text/css' href='book.css'>
</head>
<body backgroundimage='hhlogo.jpg'>
";


if( $_SESSION['ses4'])
	{ echo"
		<nav class='navbar navbar-inverse navbar-fixed-top'>
		  <div class='container-fluid '>
			<div class='navbar-header'>
			    	<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
					  <span class='icon-bar'></span>
					  <span class='icon-bar'></span>
					  <span class='icon-bar'></span>                        
				    </button>

			  <a class='navbar-brand' href='#'><b>HELPING HANDS</b></a>
			</div>
			<ul class='nav navbar-nav navbar-right'>
			  <li class='active'>
			  <a href='home.php#'>Home</a></li>
			  <li><a href='home.php#services'>Services</a></li>
			  <li><a href='home.php#aboutus'>About Us</a></li>
			  <li><a href='home.php#contactus'>Contact Us</a></li>
			  <li><a href='boot1.php'><span class='glyphicon glyphicon-user'></span>".$_SESSION["ses4"]."</a></li>
			  <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'> Logout</span></a></li>
			</ul>
			</div>
		</nav>
		"; 
	}

		else {
			echo"

		<nav class='navbar navbar-inverse navbar-fixed-top'>
		  <div class='container-fluid '>
			<div class='navbar-header'>
			    	<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
					  <span class='icon-bar'></span>
					  <span class='icon-bar'></span>
					  <span class='icon-bar'></span>                        
				    </button>

			  <a class='navbar-brand' href='#'><b>HELPING HANDS</b></a>
			</div>
			<ul class='nav navbar-nav navbar-right'>
			  <li class='active'>
			  <a href='home.php#'>Home</a></li>
			  <li><a href='home.php#services'>Services</a></li>
			  <li><a href='home.php#aboutus'>About Us</a></li>
			  <li><a href='home.php#contactus'>Contact Us</a></li>
			  <li><a href='boot1.php'> login/signup</a></li>
			</ul>
			</div>
		</nav>";
		}

echo "
<br><br><br>

<center><span class='glyphicon glyphicon-ok-sign' style='color:green;font-size:6em;'> </span> <br><h1> BOOKING SUCCESSFUL</h1></center>

 ";
echo '<meta http-equiv="refresh" content="3; URL=home.php" />';


?>
