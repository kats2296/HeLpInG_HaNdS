<?php
session_start();
if($_SESSION["ses2"])
{
$_SESSION["ses3"] = $_SESSION["ses2"];
$_SESSION["uc3"]=$_SESSION["uc2"];
if($_SESSION['choice']=='0')
{
	$_SESSION['choice']='0';
}
else
{
	$_SESSION['choice']='1';
}
}
else
{
	$_SESSION["ses2"]='0';
	$_SESSION["ses3"]='0';	
	if($_SESSION['choice']=='0')
{
	$_SESSION['choice']='0';
}
else
{
	$_SESSION['choice']='1';
}
}
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'helping hands';
$_SESSION['flag']='1';
$conn= new mysqli($servername , $username , $password , $dbname);
$ser= $_POST['service'];
$pcode= $_POST['pcode'];
$pcode_cpy= $pcode;
$pcode1= $pcode-$pcode%100 ; 
$pcode2=$pcode+10;
$_SESSION["pincode"]=$pcode;

if($ser && $pcode && $_SESSION["choice"]=='0')
{	
/*$sql="SELECT s.NAME , s.CONTACT , s.LOCATION , s.PRICE , s.PAST_RATING , a.slot1 from services s , availability a where a.CONTACT=s.CONTACT and s.SERVICE='$ser' AND s.LOCATION BETWEEN '$pcode1' AND '$pcode2'";*/
$sql="SELECT * from services where SERVICE='$ser' and LOCATION BETWEEN '$pcode1' and '$pcode2'";
	$_SESSION['choice']='1';
	$result=$conn->query($sql);
    $row=$result->fetch_assoc();

}

else{
	$s=$_POST['z'];
	if($s=="1")
	{	

		$result = mysqli_query($conn, 
		"CALL oname('$ser' , '$pcode1', '$pcode2')") or die("Query fail: " . mysqli_error($conn));

		$row = mysqli_fetch_array($result);
	
	}
	if($s=="2")
	{
			$result = mysqli_query($conn, 
		"CALL op('$ser' , '$pcode1', '$pcode2')") or die("Query fail: " . mysqli_error($conn));

		$row = mysqli_fetch_array($result);
	}
	
	if($s=="3")
	{
			$result = mysqli_query($conn, 
		"CALL orate('$ser' , '$pcode1', '$pcode2')") or die("Query fail: " . mysqli_error($conn));

		$row = mysqli_fetch_array($result);
	}
	if($s=="4")
	{
						$result = mysqli_query($conn, 
		"CALL avst1('$ser' , '$pcode1', '$pcode2')") or die("Query fail: " . mysqli_error($conn));

		$row = mysqli_fetch_array($result); 
		
	 }
		if($s=="5")
	{
			$result = mysqli_query($conn, 
		"CALL avst2('$ser' , '$pcode1', '$pcode2')") or die("Query fail: " . mysqli_error($conn));

		$row = mysqli_fetch_array($result);
	}
	if($s=="6")
	{
			$result = mysqli_query($conn, 
		"CALL avst3('$ser' , '$pcode1', '$pcode2')") or die("Query fail: " . mysqli_error($conn));

		$row = mysqli_fetch_array($result);
	}
}



echo "

<html>
<head>

<style> 

.c
{
	height: 100%;
	width: 100%;
}


.c2
{
	height :250%;
	width : 100%;
}

.c21
{
	text-align:center;
	height: 100%;
	width: 20%;
	float: left;
	background-color:#B993D6;
		font-family: 'Times New Roman', Times, serif; 
	 font-style: oblique;
	 font-weight: bold;
	font-size: 20px;
	color : black;
}

input[type='text']
{
	text-align:center;
	background-color:#B993D6;
}

.c22
{
	height: 100%;
	width: 80%;
	float: right;
	text-align:center;
	font-family: 'Times New Roman', Times, serif; 
	 font-style: oblique;
	 font-weight: bold;
	font-size: 20px;
	color : black;
	background-color:#5f2c82;

}

.d1
{
	text-align:center;
	height: 18%;
	width: 100%;
	float: right;
	font-family: 'Times New Roman', Times, serif; 
	 font-style: oblique;
	 font-weight: bold;
	font-size: 20px;
	color : Chartreuse ;

}

.d11
{
	text-align:center;
	height: 100%;
	width: 33%;
	float: right;
	
}

.foot
{
	background-color:grey;
}

</style>
<meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
  <link rel='stylesheet' href='xyz.css'>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
	
</head>

<body>";


if( $_SESSION['ses2'])
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
			  <li><a href='boot1.php'><span class='glyphicon glyphicon-user'></span>".$_SESSION["ses2"]."</a></li>
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
<div class='c'>


<div class='c2'>
		<br><br>
		<div class='c21'>
		<form action='test3.php' method='post'>
		<br>
		<input type='text' style='border : none;' name='service' value='$ser' readonly/>
		<input type='text' style='border : none;' name='pcode' value='$pcode' readonly/>
			<h3> <u> SORT BY </u> </h3>
			<br>
			
			<div class='radio'>
  <label><input type='radio' name='z' value='1'>NAME </label>
</div>
			<div class='radio'>
  <label><input type='radio' name='z' value='2'>PRICE</label>
</div>
			<div class='radio'>
  <label><input type='radio' name='z' value='3'>RATING</label>
</div>
			<button type='submit' class='btn btn-primary btn-lg'>SORT</button>
			
			<br><br><br>
			
			<h3> <u> FILTER BY </u> </h3>
			<br>
<form action='test3.php' method='post'>			
<select name='z' id='tm'>
  <option value='4'>10AM-12PM</option>
  <option value='5'>2PM-4PM</option>
  <option value='6'>5PM-7PM</option>
</select>
<input type='submit'>
</form>
<script>
document.getElementById('tm').selectedIndex=-1;

</script>
			
			</form>
		</div>
	
	<div class='c22'>
	
  <h1><u>".$ser."</u></h1>";
		
		while($row)
		{
			echo " <div class='d1'>
			<div class='d11'>
				<br>";
				if( $_SESSION['ses2'])
				{echo "
				<form action='bookinghh.php' method='post'>
				<button type='submit' name='b' class='btn btn-primary btn-lg' value=".$row['CONTACT']."  >BOOK</button>
				</form>";
				}
				else
				{
					echo"
					<form action='boot1.php' method='post'>
					<button type='submit' name='b' class='btn btn-primary btn-lg' onclick='boot1.html' >BOOK</button>
					</form>";
				}
			echo "		
			</div>

			<div class='d11'>
			<br>
				<p> NAME : " .$row['NAME']." <br>
				
					CONTACT :" .$row['CONTACT']." <br>

					LOCATION :" .$row['LOCATION']." <br>
					
					PAST_RATING :" .$row['PAST_RATING']." <br>
					
					PRICE :" .$row['PRICE']."
				</p>
			</div>
			
			<br>
			<div class='d11'>
				<div class='media'>
					<div class= 'media-top'>
					<img src='1.jpg' class='media-object' style='width:60px'>
					</div>
				</div>
			</div>

		</div>";

			$row=$result->fetch_assoc();
		}
		

		
		echo "
		
		</div>
		
		</div> 


</div>

</body>
</html>";

$conn->close();
?>

