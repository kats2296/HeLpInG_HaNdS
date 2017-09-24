
<?php
session_start();

?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helping hands";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$phone=$_REQUEST['phone'];
$_SESSION["uc"]=$phone;

// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM sign_up WHERE PHONE_NO=$phone ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
     while($row = $result->fetch_assoc()) 
     {

     if( $row['PHONE_NO'] == $phone && $row['PASSWORD'] == $pass && $row['E-MAIL']==$email)
     	{
               $_SESSION["ses1"] =$row['FIRST_NAME'];
     		echo "<script>alert('LOGGED IN SUCCESSFULLY')</script>";
			
                echo '<meta http-equiv="refresh" content="1; URL=home.php" />';
           /*echo "<br> fNAME -". $row["FIRST_NAME"]. " <br>lname-". $row["LAST_NAME"]."<br>phone no - ".$row['PHONE_NO']."<BR>email -".$email."<BR>password-".$pass."<BR>";*/
		}

     else{
		echo "<script>alert('LOG IN FAILED')</script>";
		 echo '<meta http-equiv="refresh" content="5; URL=boot1.php" />';

     }
	 }
}
 else
 {
     echo "0 results";
}

$conn->close();

?>