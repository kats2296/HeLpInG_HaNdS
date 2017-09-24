

<?php
session_start();
?>

<?php


$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'helping hands';

$conn= new mysqli($servername , $username , $password , $dbname);

$ser= $_POST['service'];
$pcode= $_POST['pcode'];
$pcode_cpy= $_POST['pcode'];

$pcode= $pcode-$pcode%100 ; 

$pcode2=$pcode+10;
if($ser && $pcode && $pcode_cpy==$pcode )
{
$sql="SELECT NAME , CONTACT , LOCATION , PRICE , PAST_RATING from services where SERVICE='$ser' AND LOCATION BETWEEN '$pcode' AND '$pcode2'";
$pcode_cpy++;
}
if($ser && $pcode && $pcode_cpy!=$pcode)
{
	$s=$_POST['ch'];
	if($s=="1")
	{
	$sql="SELECT NAME , CONTACT , LOCATION ,PRICE , PAST_RATING from services where SERVICE='$ser' AND LOCATION BETWEEN '$pcode' AND '$pcode2' ORDER BY NAME";
	}
	if($s=="2")
	{
	$sql="SELECT NAME , CONTACT , LOCATION , PRICE , PAST_RATING from services where SERVICE='$ser' AND LOCATION BETWEEN '$pcode' AND '$pcode2' ORDER BY PRICE";
	}
	
	if($s=="3")
	{
	$sql="SELECT NAME , CONTACT , LOCATION ,PRICE , PAST_RATING from services where SERVICE='$ser' AND LOCATION BETWEEN '$pcode' AND '$pcode2' ORDER BY PAST_RATING DESC";
	}
}
$result=$conn->query($sql);
$row=$result->fetch_assoc();

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
	height :100%;
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
	height: 30%;
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

<body>

<nav class='navbar navbar-inverse navbar-fixed-top'>
  <div class='container-fluid '>
    <div class='navbar-header'>
      <a class='navbar-brand' href='#'>WebSiteName</a>
    </div>
    <ul class='nav navbar-nav navbar-right'>
      <li class='active'><a href='home2.html'>Home</a></li>
      <li><a href='home2.html#services'>SERVICES</a></li>
      <li><a href='home2.html#aboutus'>ABOUT US</a></li>
      <li><a href='home2.html#contactus'>CONTACT US</a></li>
	  <li><a href='boot1.html'><span class='glyphicon glyphicon-user'></span> Login/Signup</a></li>
    </ul>
  </div>
</nav>


<div class='c'>


<div class='c2'>

		<div class='c21'>
		<form action='test3.php' method='post'>
		<br>
		<input type='text' style='border : none;' name='service' value='$ser' readonly/>
		<input type='text' style='border : none;' name='pcode' value='$pcode' readonly/>
			<h3> <u> SORT BY </u> </h3>
			<br>
			
			<div class='radio'>
  <label><input type='radio' name='ch' value='1'>NAME </label>
</div>
			<div class='radio'>
  <label><input type='radio' name='ch' value='2'>PRICE</label>
</div>
			<div class='radio'>
  <label><input type='radio' name='ch' value='3'>RATING</label>
</div>
			<button type='submit' class='btn btn-primary btn-lg'>SORT</button>
			
			<br><br><br>
			
			<h3> <u> Time-Availability </u> </h3>
			<br>
			
<select name='a' id='time' placeholder='time-availability'>
  <option value='4'>10AM-12PM</option>
  <option value='5'>2PM-4PM</option>
  <option value='6'>5PM-7PM</option>
</select>
<script>
	document.getElementById('time').selectedIndex=-1;
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
				if( $_SESSION["fname"] )
				{echo "
				<form action='bookinghh.php' method='post'>
				<button type='submit' name='b' class='btn btn-primary btn-lg' value=".$row['CONTACT']."  >BOOK</button>
				</form>";
				}
				else
				{
					echo "
					<button type='submit' name='b' onclick='boot1.html' class='btn btn-primary btn-lg'   >BOOK</button>";
				}
			echo "</div>

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


<footer class='foot container-fluid text center'><P></p></footer>
</body>
</html>";

$conn->close();
?>

