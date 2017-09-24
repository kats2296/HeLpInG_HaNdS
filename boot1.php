
<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>helping hands</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<link rel="stylesheet" type="text/css" href="bstrp.css">

</head>
<body id="hh" data-spy="scroll" data-target=".navbar" >
<?php
	if( $_SESSION["ses1"] )
	{ ?>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid ">
			<div class="navbar-header">
			    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>                        
				    </button>

			  <a class="navbar-brand" href="#"><b>HELPING HANDS</b></a>
			</div>
			<ul class="nav navbar-nav navbar-right">
			  <li class="active">
			  <a href="home.php#">Home</a></li>
			  <li><a href="home.php#services">Services</a></li>
			  <li><a href="home.php#aboutus">About Us</a></li>
			  <li><a href="home.php#contactus">Contact Us</a></li>
			  <li><a href="boot1.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION["ses1"]  ?></a></li>
			<li><a href="boot1.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
			</div>
		</nav>
		<?php 
	}

		else {?>

		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid ">
			<div class="navbar-header">
			    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>                        
				    </button>

			  <a class="navbar-brand" href="#"><b>HELPING HANDS</b></a>
			</div>
			<ul class="nav navbar-nav navbar-right">
			  <li class="active">
			  <a href="home.php">Home</a></li>
			  <li><a href="home.php#services">Services</a></li>
			  <li><a href="home.php#aboutus">About Us</a></li>
			  <li><a href="home.php#contactus">Contact Us</a></li>
			  <li><a href="boot1.php"> login/signup</a></li>
			</ul>
			</div>
		</nav>

		<?php } ?>

<br><br><br>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1">
    </div>

    <div class="col-sm-4">
      <h1 class="h"><b><strong><font size="10%">SIGN UP</font></strong></b></h1>

     <form id="form1" action="lab1.php"  method="post" onsubmit="return validate(this);" ><font size="3.5%">
     <div class="form-group">

  		
     	<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"> </i></span>
		<input type="text"  style="border: none;" name="fn"  class="form-control"  placeholder="FIRST NAME" required></div><br>

		
		<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" name="ln" class="form-control" placeholder="LAST NAME" required></div><br>

		
		<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		<input type="number"  name="phone" class="form-control" placeholder="PHONE NUMBER" required></div><br>

		
		<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
		<input type="number" name="pincode" class="form-control" placeholder="PINCODE" required ></div><br>

		
		<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="email" name="email" class="form-control" placeholder="EMAIL-ID" required></div><br>


	
		<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		<input type="password" id="pass" name="pass" class="form-control" placeholder="PASSWORD" required></div><br>

		
		<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		<input type="password" id="rpass" name="rpass" class="form-control" placeholder="RE-ENTER PASSWORD" required></div><br>

		BIRTHDAY:
		<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		<input type="date" name="dob" value="dob" class="form-control" placeholder="D.O.B" required></div><br>

		<label class="radio-inline">
		<input type="radio" name="gender" value="male"  chechked required> MALE</label>
		<label class="radio-inline">
	    <input type="radio" name="gender" value="female"  chechked required> FEMALE </label><br><br>

		<button type="submit" name="signup"  class="btn btn-primary"  data-toggle="tooltip" title="press to sign up" data-placement="auto" "><span class="glyphicon glyphicon-user"> SIGN UP </span></button>

		<button type="reset" name="reset" class="btn btn-danger " data-toggle="tooltip" title="press to reset your form" data-placement="auto"><span class="glyphicon glyphicon-refresh"> RESET </span></button>

		</font>
		</div>
		</form> 
    </div>


    <div class="col-sm-2"></div>

    <div class="col-sm-4">
    
      <h1 class="h"><b><strong><font size="10%">LOG IN</font></strong></b></h1> 
      <form id="form2" action="lab.php" method="POST" onsubmit=" return valid1(this);"><font size="3.5%">
      <div class="form-group">

	    
	    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
	    <input type="number" name="phone" placeholder="PHONE" class="form-control" required></div><br>

		
		<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		<input type="email" name="email" placeholder="E-MAIL" class="form-control" required></div><br>

	
		<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		<input type="password" name="pass" placeholder="PASSWORD" class="form-control" required></div><br>

	    <button type="submit" class="btn btn-primary" name="login" data-toggle="tooltip" title="press to login" data-placement="auto"><span class="glyphicon glyphicon-log-in"> LOG IN</span></button> 

	  </div>
		</font>
		</form>
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>

<script >

function validate(form)
{
	var re = /^[a-z,A-Z]+$/i;
	  if (!re.test(form.fn.value)) {
	    bootbox.alert('Please enter only letters from a to z in first name field');
	    return false;}

	  if (!re.test(form.ln.value)) {
		    bootbox.alert('Please enter only letters from a to z in last name field ');
		    return false;}

    var x  = form.phone.value
	if(x.toString().length > 10 || x.toString().length<10 )
		{bootbox.alert("please enter a valid phone number");
			return false;}

	var x1  = form.pincode.value
	if(x1.toString().length > 6 || x1.toString().length<6 )
		{bootbox.alert("please enter a valid pincode");
			return false;}

	var re = /\S+@\S+\.\S+/;
     if(!re.test(form.email.value))
     {
    	bootbox.alert("enter valid email id ");
     	return false;
     }

	if(document.getElementById("pass").value != document.getElementById("rpass").value )
		{bootbox.alert ("your passwords do not match ");
			return false ;}
	
	return true  ;	
}

function valid1(form2)
{
	var y  = form2.phone.value
	if(y.toString().length > 10 || y.toString().length<10 )
		{bootbox.alert("please enter a valid phone number");
			return false;}

	var e = /\S+@\S+\.\S+/;
     if(!e.test(form2.email.value))
     {
     	bootbox.alert("please enter valid email id ");
     	return false;
     }

     return true ;

}

$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip();});


</script>



<footer class=" foot container-fluid text-center">
<a class="up-arrow" href="#hh" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>THANKS FOR VISITING HELPING HANDS</p> 
</footer>
</body>
</html>