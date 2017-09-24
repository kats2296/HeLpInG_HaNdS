<?php
session_start();


mysql_connect('localhost','root','');
mysql_select_db('helping hands');
$serno=$_POST['b'];
$result=mysql_query("select * from services where CONTACT ='$serno';");
$row=mysql_fetch_array($result);
$pin=$_SESSION["pincode"];
$_SESSION["uc4"]=$_SESSION["uc3"];
$_SESSION["ses4"]=$_SESSION["ses3"];
$no=$_SESSION["uc3"];
$result1=mysql_query("select * from sign_up where CONTACT ='$no';");
$row1=mysql_fetch_array($result1);

$n=$row['NAME'];
$c=$row['CONTACT'];
$l=$row['LOCATION'];
$g=$row['GENDER'];
$pr=$row['PAST_RATING'];
$p=$row['PRICE'];
$fn=$row1['FIRST_NAME'];


$result2=mysql_query("SELECT * from availability where CONTACT='$c';");
$row2=mysql_fetch_array($result2);





echo "<html>
<title>helping hands</title>
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
<body backgroundimage='hhlogo.jpg'>";


if( $_SESSION['ses3'])
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
			  <a href='home.php'>Home</a></li>
			  <li><a href='home.php#services'>Services</a></li>
			  <li><a href='home.php#aboutus'>About Us</a></li>
			  <li><a href='home.php#contactus'>Contact Us</a></li>
			  <li><a href='boot1.php'><span class='glyphicon glyphicon-user'></span>".$_SESSION["ses3"]."</a></li>
			  <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Logout</a></li>
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
			  <li><a href='boot1.php'> Login/Signup</a></li>
			</ul>
			</div>
		</nav>";
		}

echo "
<br><br><br>
<div class='A'>
<div class='q'>

   <div class='q1'>
 
	 <div id='d1'>

 <center> <img src ='1.jpg' id='d2'></img></center>
   </div id='d1'>
   <ul><br><br>
    <li>NAME:".$n."</li><br>
	<li>CONTACT:".$c."</li><br>
	<li> LOCATION:".$l." </li><br>
	<li> GENDER:".$g."</li><br>
	<li>PAST-RATING:".$pr."</li><br>
	<li>PRICE: Rs. ".$p."/-</li><br>
	</ul>
	</div>";
   
   $_SESSION['sc'] = $row['CONTACT'];
   
   
   
   echo "
    <div class='q2'>

     <div class='q2b'>
       <form action='bk.php' method='POST' autocomplete='on' id='f1'>          
          <legend><strong><i class='fa fa-bars'></i> INFORMATION OF USER </strong></legend>
          <i class='glyphicon glyphicon-time'></i>	  
		  <select name='slot' autofocus='on'  placeholder='SLOT' id='f2' class='btn btn-primary' data-toggle='tooltip' title='SELECTED SLOT' value='0' required>";
							if($row2['slot1'])
							{
							echo"
							<font color='black'><option value='1'>SLOT 1 : 10AM - 12PM</option></font>";
							}
							if($row2['slot2'])
							{
							echo"
							<font color='black'><option value='2'>SLOT 2 : 2PM - 4PM</option></font>";
							}
							if($row2['slot3'])
							{
							echo"
							<font color='black'><option value='3'>SLOT 3 : 5PM - 7PM</option></font>";
							}
						echo "</select> 
		  <br><br><br><br>
		  <i class='glyphicon glyphicon-user'></i>
          <input type='text' name='name' autofocus='on'  value=".$_SESSION['ses3']." placeholder='Name' required='on' id='f2' class='btn btn-primary' data-toggle='tooltip' title='ENTER THE NAME' value=".$fn."><br><br>
          
          <i class='glyphicon glyphicon-phone'></i>
          <input type='number' name='phone_no' value=".$_SESSION['uc3']." autofocus='on' placeholder='Phone Number' required='on' id='f2' class='btn btn-primary' data-toggle='tooltip' title='ENTER YOUR MOB NO' ><br><br>
          <i class='glyphicon glyphicon-envelope'></i>
          <input type='number' name='pincode'  autofocus='on' value=".$pin." readonly required='on' id='f2' class='btn btn-primary' data-toggle='tooltip' title='ENTER THE PINCODE'><br><br>
          <i class='glyphicon glyphicon-home'></i>
          <input type=textarea rows='2' cols='22' name='address' autofocus='on' placeholder='Address' required='on' id='f2' class='btn btn-primary' data-toggle='tooltip' title='ENTER THE ADDRESS'></textarea><br>
         <br><br>
          <i class='fa fa-file'></i>
            <textarea name='comnt' rows='5' cols='22' autofocus='on' placeholder='PROBLEM IN DETAIL' required='on' id='f2' class='btn btn-primary' data-toggle='tooltip' title='ENTER YOUR PROBLEM IN DETAILS'></textarea><br><br>
          <input type='submit' name='book' value='Book' id='f3' class='btn btn-primary' data-toggle='tooltip' title='press to book'>
          <input type='reset' name='submit' id='f3' class='btn btn-primary' data-toggle='tooltip' title='press to reset'>
          
      </form>
	  <script>
	  if(!document.getElementById('f2').value)
	  {
		  alert('NO TIME SLOT AVAILABLE');
	  }
	  </script>

    </div>
  </div>

</div>
</div>
<style>
.foot
{
	height: 50px;
	background-color: #2f2f2f;/* Black Gray */
      color: #fff;
}
</style>

<footer class=' foot container-fluid text-center'>
<a class='up-arrow' href='#hh' data-toggle='tooltip' title='TO TOP'>
    <span class='glyphicon glyphicon-chevron-up'></span>
  </a>
  <p>THANKS FOR VISITING HELPING HANDS</p> 
</footer>

</body>
</html>";
?>