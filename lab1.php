
<?php
session_start();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helping hands";

/*mysql_connect($servername,$username,$password);
mysql_select_db($dbname);*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

/*
echo "<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet'href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js'></script>";*/

$_SESSION["ses1"]=$lname=$phone=$pincode=$email=$dob=$pass=$gen=$rpass = "";
/*
$fname=$_POST['fn'];*/

$_SESSION["ses1"] = $_POST['fn'];

$lname=$_POST['ln'];

$phone=$_POST['phone'];
$_SESSION["uc"]=$phone;

$pincode=$_POST['pincode'];

$email=$_POST['email'];

$dob=$_POST['dob'];

$pass=$_POST['pass'];

$gen=$_POST['gender'];

$rpass = $_POST['rpass'];
/*
if($email && $pass && $fname && $gen && $lname&& $pincode && $phone && $rpass)*/
if($email && $pass && $_SESSION["ses1"] && $gen && $lname&& $pincode && $phone && $rpass)

{
	/*
	if($pass!=$rpass)
	{
		     die("<center>CHECK THE PASSWORD AGAIN" . $conn->connect_error);
	}
*/
$sql=("INSERT INTO sign_up VALUES('$_SESSION[ses1]','$lname','$phone', '$pincode','$gen','$dob','$email','$pass' );");
if($conn->query($sql))
{

	
	echo " <script>alert('SIGN UP SUCCESSFULL');</script>";	
	echo '<meta http-equiv="refresh" content="1; URL=home.php" />';
}}

else
{
	echo "ERRRRROOOORORRRRRRRRRRRS";
}
/*
header("Location:home2.html"); 
exit; // <- don't forget this!*/

//$row=mysql_fetch_array($result);
$conn->close();
?>



