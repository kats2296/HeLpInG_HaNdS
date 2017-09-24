<?php

session_start();
if($_SESSION["ses1"])
{
$_SESSION["uc2"]=$_SESSION["uc"];
$_SESSION["ses2"] = $_SESSION["ses1"];
$_SESSION["choice"]='0';
}
else
{
	$_SESSION["uc2"] = '0';
	$_SESSION["ses2"] ='0';
	$_SESSION["ses1"]='0';
	$_SESSION["choice"]='0';
}

echo "
<html>
<head>
	  <link rel='stylesheet' type='text/css' href='home2.css'>
	  <meta charset='utf-8'>
	  <meta name='viewport' content='width=device-width, initial-scale=1'>
	  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	  <link rel='stylesheet' href='http://www.w3schools.com/lib/w3.css'>
	  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
	  <link rel='stylesheet' href='xyz.css'>
	  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
</head>
	<script>
					function bigImg(x) {
						x.style.height = '240px';
						x.style.width = '240px';
					}

					function normalImg(x) {
						x.style.height = '210px';
						x.style.width = '210px';
					}	

				function myFunction() {
				document.getElementById('ser').innerHTML = 'Hello World!';
}
myFunction();
	</script>
<title>Home_Helping Hand</title>
<body id='hh'>

	<div class='w'>";
	
		if( $_SESSION['ses1'] )
	{ 	echo "
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
			  <a href='#'>Home</a></li>
			  <li><a href='#services'>Services</a></li>
			  <li><a href='#aboutus'>About Us</a></li>
			  <li><a href='#contactus'>Contact Us</a></li>
			  <li><a href='boot1.php'><span class='glyphicon glyphicon-user'></span>".$_SESSION['ses1']."</a></li>
			<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'> Logout</span></a></li>

			</ul>
			</div>
		</nav>
		";
	}

		else {
			echo "

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
			  <a href='#'>Home</a></li>
			  <li><a href='#services'>Services</a></li>
			  <li><a href='#aboutus'>About Us</a></li>
			  <li><a href='#contactus'>Contact Us</a></li>
			  <li><a href='boot1.php'> Login/Signup</a></li>
			</ul>
			</div>
		</nav>";
 }
		echo "
		<a id='top'></a>
		<div id='s'>
		<div class='jumbotron j'>
			<br><br><br><br><br>
			<center>
			<img src='hhlogo.jpg'/>	
			<h1>HELPING HAND</h1> 
			<br><br>
			<p><b>EASY.AFFORDABLE.QUICK.CONVENIENT</b></p>
			</center>
	    </div>	

		</div>
		<a id='services'></a>
		<div id='bar'><h1 id='shawdow'><center><b><br><br>Our Service<b></center></h1></div>
		<div class='c'>
			<div class='l'></div>
			<div id='m'>
				<div id='r'>
					<div class='block img-with-text'><img title='Plumber' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='plumber.jpg'  width='210' height='210'/><p><center><button id='plumber' class='btn btn-info ' value='Plumber' name='service'>Plumber</button></center></p>
					</div>
					<div class='block img-with-text'><img  title='Carpenter' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='carpenter.jpg' width='210' height='210'/><p><center><button id='carpenter' class='btn btn-danger '  value='Carpenter' name='service'>Carpenter</button></center></p>
					</div>
					<div class='block img-with-text'><img title='Teacher' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='tutor.jpg' width='210' height='210'/><p><center><button id='teacher' class='btn btn-success '  value='Teacher' name='service'>Teacher</button></center></p>
					</div>
				</div>
			
				<div id='r'>
					<div class='block img-with-text'><img title='Electrician' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='electrician.jpg' y' width='210' height='210'/><p><center><button id='electrician' class='btn btn-info ' value='Electrician' name='service'>Electrician</button></center></p>
					</div>
					<div class='block img-with-text'><img title='Cook' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='cook.jpg' width='210' height='210'/><p><center><button id='cook' class='btn btn-danger ' value='Cook' name='service'>Cook</button></center></p>
					</div>
					<div class='block img-with-text'><img title='Gardener' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='gardener.jpg'  width='210' height='210'/><p><center><button id='gardener' class='btn btn-success ' value='Gardener' name='service'>Gardener</button></center></p>
					</div>
				</div>
				<div id='r'>
					<div class='block img-with-text'><img title='Tutor' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='tutor.jpg'  width='210' height='210'/><p><center><button id='tutor' value='Tutor' class='btn btn-info ' name='service'>Tutor</button></center></p>
					</div>
					<div class='block img-with-text'><img  title='Servant' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='maid.jpg'  width='210' height='210'/><p><center><button id='servant' class='btn btn-danger ' value='Servant' name='service'>Servant</button></center></p>
					</div>
					<div class='block img-with-text'><img title='Mechanic' onmouseover='bigImg(this)' onmouseout='normalImg(this)' border='0' src='mechanic.jpg'  width='210' height='210'/><p><center><button id='mechanic' class='btn btn-success ' value='Mechanic' name='service'>Mechanic</button></center></p>
					</div>
				</div>
					
			</div>
			<div class='l'></div>
		</div>
		<a href='#top'></a>
		<br><br><br><br>
		<div class='b'>
		<a id='aboutus'></a>
		<div class='l'></div>
		<div id='m'>
		
		<br><br>
		
		<center><h1><font color='WHITE'><b>ABOUT US</b></h1><br><br>
			<div id='br'>
			<p>
				In today's world , we all face many problems in our day to day life. These problems require some assistance from people working in those fields. This website provide the users some solutions to their problems in a way that one could easily connect and avail the services without any hazel which we actually come across in our daily life
			
			</p>
			</div>
			<br><br>
			<div class='clm thumbnail'>
			<p>
				<h2><b><center>MISSION</center></b></h2><br><br>
				To provide many services needed in day to day life to the customers at their fingertips!!
			</p></div>
			<div class='clm thumbnail'>
			<p>
				<h2><b><center>CORPORATE INFO</center></b></h2><br><br>
				The official website helpinghands.com was launched in 2016. HelpingHands's search and avail service is available to the users across two platforms i.e. internet and mobile internet. HelpindHands search services bridges the gap between the users and servicemen by helping users to find relevant person for the service quickly while helping the servicemen too in a way.
			</p></div>
						<div class='clm thumbnail'>
			<h2><b><center>HIGHLIGHTS</center></b></h2><br>
			<p>
			<ul>
			<li>Services offered across various cities and towns in India.</li>
			<li>Experienced management team.</li>
			<li>Large online community for reviews.</li>
			<li>Advanced and scalable technology platform.</li>
			</ul></p>
			</center></font>
			</div>
		</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
		<a id='contactus'></a><BR><BR><BR><BR><BR><BR><BR>
		<div class='cntct'><br><br><br><center><h1><b>CONTACT US</b></h1></center>
		<div class='l'></div>
		<div class='m'>
		<br><br>
			<div id='r'><center>
				<div class='blk thumbnail'><h3>Questions & Comments</h3><br><p>We want to hear from you! HelpindHands.com values your feedback, so let us know if you have a question or comment, or if you just need help with a feature on our site.</p></div>
				<div class='blk thumbnail'><h3>Advertiser Support</h3><br><p>If you are an existing advertiser on HelpindHands.com please visit our Contact Page to find the number to your regional Customer Service center or Sales Office.</p></div>
				<div class='blk thumbnail'><h3>Search for the business.</h3><br><p>On the business profile page, click on the 'Suggest an Edit' link. Fill out as much updated information about the business as possible. Our data quality team will verify the information, and update the business profile as soon as possible.</p></div>
				
			</div>
			<div id='r1'>
				<div class='bblk thumbnail'><h3>Advertise with HelpingHands.com</h3><br><p>With a listing on HelpindHands.com, your business can reach a global audience. Basic business listings are complimentary, and HelpingHands.com offers a variety of ways to improve your listing's visibility. Find more information about advertising or adding your own courtesy listing on HelpingHands.com in our Online Advertising Section</p></div>
				<div class='bblk thumbnail'>
				<h3>Business Development</h3><br><p>Interested in exploring a business relationship with HelpingHands.com? Our Business Development department welcomes inquiries regarding strategic partnerships, alliances and other business opportunities. For more information, e-mail p2.prafull@gmail.com Please note, however, that we do not accept unauthorized idea submissions outside of established business relationships SO YOU SHOULD NOT INCLUDE IN ANY EMAIL any ideas, proposals, inventions, or methods for business opportunities.</p></div>
			</div>
			<br><br><br><br><br>
			<div class='l'></div>
			<div id='line'><center><h2><font color='WHITE'><b>OUR TEAM</b></h2></center></div>
			<div id='r'>
			<br><br><br><br><font color='BLACK'>
				<div class='pic img-with-text'><img src='khyati.jpg' onmouseover='bigImg(this)' onmouseout='normalImg(this)' class='img-circle bdr'  width=100% height=100%><p><b>KHYATI SEHGAL<br><i>chwttukats.96@gmail.com</i></b></p></div>
				<div class='pic img-with-text'><img src='shuja.jpg' onmouseover='bigImg(this)' onmouseout='normalImg(this)' class='img-circle bdr'  width=100% height=100%><p><b>SHUJA RESHI<br><i>shujareshi1497@gmail.com</i></b></p></div>
				<div class='pic img-with-text'><img src='prafull.jpg' onmouseover='bigImg(this)' onmouseout='normalImg(this)' class='img-circle bdr'  width=100% height=100%><p><b>PRAFULL PANDEY<br><i>p2.prafull@gmail.com</i></b></p></div>
				<div class='pic img-with-text'><img src='tanya.jpg' onmouseover='bigImg(this)' onmouseout='normalImg(this)' class='img-circle bdr'  width=100% height=100%><p><b>TANYA GUPTA<br><i>id.tanyagupta@gmail.com</i></b></p></div></font>
			</div>
				
			</center>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br>
<style>
			#r2
			{
				height:28%;
				width:100%;
				background-color:black;
			}
		</style>
		<div id='r2'>
		<div id='mdlr2'>
		<font color='white'>
		
		<center> <b><h2><span class='glyphicon glyphicon-user'></span><a href='boot1.php'>Login</a></h2></b><br>
		
		<p><span class='glyphicon glyphicon-copyright-mark'></span> HELPING HANDS.ALL RIGHTS RESERVED.</p>
		<br>
		 <a href='#top'>
          <span class='glyphicon glyphicon-arrow-up'></span> 
        </a>
		</center>
		</div></font>
		
		
		</div>
		
		</div>
	
<div id='myModal' class='modal'>


  <div class='modal-content modl'>
    <div class='modal-header'>
      <span class='close'>×</span>
     <p id='ser'></p>
    </div>
    <div class='modal-body'>
      <form action='test3.php' method='post'>
		<div class='input-group'><span class='input-group-addon'><i class='glyphicon glyphicon-circle-arrow-right'></i></span>
		<input type='text' id='id1' name='service' class='form-control' readonly ></div><br>
		<div class='input-group'><span class='input-group-addon'><i class='glyphicon glyphicon-circle-arrow-right'></i></span>
		<input type='number' name='pcode' class='form-control'  data-toggle='tooltip' title='pincode of area where service is required' placeholder='Enter the PINCODE' required ></div><br>
		<!--<font color='black'><input type='text' id='id1' name='service' readonly></input>
		<input type='number' name='pcode'   ></input></font>-->
    </div>
    <div class='modal-footer'>
      <center><button type='submit' name='proceed'  class='btn btn-primary btn-md'><h3><span class='glyphicon glyphicon-log-in'> Proceed</h3></span></button></center>
    </div>
	</form>
  </div>

</div>

<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById('plumber');
var btn1 = document.getElementById('carpenter');
var btn2 = document.getElementById('teacher');
var btn3 = document.getElementById('electrician');
var btn4 = document.getElementById('cook');
var btn5 = document.getElementById('gardener');
var btn6 = document.getElementById('tutor');
var btn7 = document.getElementById('servant');
var btn8 = document.getElementById('mechanic');

var btnvalue ,btnvalue1,btnvalue2,btnvalue3 ,btnvalue4,btnvalue5,btnvalue6 ,btnvalue7,btnvalue8;
	
	btnvalue=document.getElementById('plumber').value;
	btnvalue1=document.getElementById('carpenter').value;
	btnvalue2=document.getElementById('teacher').value;
	btnvalue3=document.getElementById('electrician').value;
	btnvalue4=document.getElementById('cook').value;
	btnvalue5=document.getElementById('gardener').value;
	btnvalue6=document.getElementById('tutor').value;
	btnvalue7=document.getElementById('servant').value;
	btnvalue8=document.getElementById('mechanic').value;
	
// Get the <span> element that closes the modal
var span = document.getElementsByClassName('close')[0];


// When the user clicks the button, open the modal 
if(btn)
{
	btn.onclick = function() {
		modal.style.display = 'block';
		document.getElementById('id1').value=btnvalue;
	}
}
if(btn1)
{
	btn1.onclick = function() {
		modal.style.display = 'block';
		document.getElementById('id1').value=btnvalue1;
	}		
}
if(btn2)
{
	btn2.onclick = function() {
		modal.style.display = 'block';
		document.getElementById('id1').value=btnvalue2;
	}		
}
if(btn3)
{
	btn3.onclick = function() {
		modal.style.display = 'block';
		document.getElementById('id1').value=btnvalue3;
	}
}
if(btn4)
{
	btn4.onclick = function() {
		modal.style.display = 'block';
		document.getElementById('id1').value=btnvalue4;
	}		
}
if(btn5)
{
	btn5.onclick = function() {
		modal.style.display = 'block';
		document.getElementById('id1').value=btnvalue5;
	}		
}
if(btn6)
{
	btn6.onclick = function() {
		modal.style.display = 'block';
		document.getElementById('id1').value=btnvalue6;
	}
}
if(btn7)
{
	btn7.onclick = function() {
		modal.style.display = 'block';
		document.getElementById('id1').value=btnvalue7;
	}		
}
if(btn8)
{
	btn8.onclick = function() {
		modal.style.display = 'block';
		document.getElementById('id1').value=btnvalue8;
	}		
}



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = 'none';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>

</body>
</html>
";
?>