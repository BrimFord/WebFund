<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>AboutUs</title>
<link rel="stylesheet" type="text/css" href="style/treatstyle.css">
<script src="script/header.js"></script>
</head>
<body>
		        <!--Navigation Bar-->
				<div id="header" style="z-index: 5">

						<!--Logo-->
						<div><a href="index.php"> <img src="treatlogo.png" width="150px" height="100px" style="margin: 0 10px 0 15px;"></a></div>

						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="MainStorePage.php">Store</a></li>
							<li><a href="AboutUs.php" style="font-size: x-large; font-weight: bold;">Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>

						<!--User/Account Icon-->
            <?php
              if(!isset($_SESSION['emailLogin']) && !isset($_SESSION['passwordLogin'])) {
                echo "<div onclick=";
                echo "document.getElementById('PopUpForm').style.display='block' style='position: absolute; right: 50px;'><img src='img/user_circle.svg' alt='user' class='icon'></div>";

                }
                else{
                  echo "<div onclick=";
                  echo "document.getElementById('PopUpLog').style.display='block' style='position: absolute; right: 50px;'><img src='img/user_circle.svg' alt='user' class='icon'></div>";

            }?>
          </div>


					<!--Pop-up Register & Login Form-->
					<div id="PopUpForm" class="PopUpContainer" onclick="NoPopUp()">

						<!--REGISTER FORM-->
						<form action="php/handling.php" method="POST" class="PopUpContent" id="accountForm" >
								<div style="padding: 15px;">

									<!--SIGN UP & LOGIN Headings-->
									<div style="overflow: auto;">
										<br><br>
										<h1 style="display: inline-block;">Sign Up</h1>
										<h3 class="formOption" onclick="loginForm()">Login</h3><br>
									</div>
									<br><br>

									<!--REGISTER FORM FIELDS-->
									<div>
										<label for="user_name">Username: </label><br>
										<input type="text" id="user_name" name="user_name" placeholder="Full Name">

										<br><br>

										<label for="emailReg">E-mail:</label><br>
										<input type="email" id="emailReg" name="emailReg" placeholder="example@google.com">

										<br><br>

										<label for="passwordReg">Password:</label><br>
										<input type="password" id="passwordReg" name="passwordReg" style="width: 93%">
										<img src="img/eye_slash.svg" alt="show" class="psw_icon" onclick="showPasswordReg()" id="psw_icon_reg"><br>

										<br><br>

										<label for="address1">Address Line 1: </label>
										<input type="text" name="address1" id="address1">

										<br><br>

										<label for="address2">Address Line 2: </label>
										<input type="text" name="address2">

										<br><br>

										<label for="postcode">Postcode: </label><br>
										<input type="number" name="postcode" id="postcode" pattern="[0-9]{5}">

										<br><br>

										<label for="state">State: </label>
										<input type="text" name="state" id="state"><br><br>


									</div>

									<!--Create Account & Cancel Button-->
									<div class="clearfix">
										<button type="button" class="buttons signupbuttons" onclick="validateForm()">Create Account</button>
										<button type="button" class="buttons cancelbuttons" onclick="window.close()">Cancel</button>
									</div>
								</div>
							</form>



							<!--LOGIN FORM-->
							<form action="php/check.php" method="POST" class="PopUpContent" id="loginForm"  style="display: none;">
									<div style="padding: 15px;">

											<!--SIGN UP & LOGIN Headings-->
											<div style="overflow: auto;">
												<br><br>
												<h1 style="display: inline-block;">Login</h1>
												<h3 class="formOption" onclick="signupForm()">Sign Up</h3>
											</div>
											<br><br>

									<!--LOGIN FORM FIELDS-->
									<label for="emailLogin">E-mail:</label><br>
									<input type="email" id="emailLogin" name="emailLogin" placeholder="example@google.com">

									<br><br>

									<label for="passwordLogin">Password:</label><br>
									<input type="password" id="passwordLogin" name="passwordLogin" style="width: 93%">
									<img src="img/eye_slash.svg" alt="show" class="psw_icon" onclick="showPasswordLogin()" id="psw_icon_login"><br><br>



									<!--Login & Cancel Button-->
									<div class="clearfix">
											<button type="button" class="buttons signupbuttons" onclick="validateFormLogin()">Login</button>
											<button type="button" class="buttons cancelbuttons" onclick="window.close()">Cancel</button>
									</div>
								</div>
							</form>
					</div>
          <!--Logout Form-->
          <div id="PopUpLog" class="PopUpContainer" onclick="NoPopUp()">
              <form method="POST" class="PopUpContent" id="logoutForm" style="width: 40%;">

                  <div style="padding: 15px;">

                          <!--LOGOUT FORM-->
                          <div style="text-align: center;">
                              <br><br>
                              <h1>Logging Out?</h1>
                              <br><br>
                          </div>
                          <br><br>

              <!--Logout & Cancel Button-->
              <div style="display: flex; flex-direction: row-reverse; justify-content: center;">
                      <button type="button" class="buttons cancelbuttons" style="margin-right: 0px;" onclick="window.location.href='php/logout.php'">Logout</button>
                      <button type="button" class="buttons signupbuttons" style="margin-right: 20px;" onclick="window.close()">Cancel</button>
              </div>
              </div>
              </form>
          </div>
<div class="sidebar">
	<ul>
	<li style="margin-bottom: 2em">
		<a href="#about" style="color:black; text-decoration: none">About Us</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#website" style="color:black; text-decoration: none">Our Website</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#logo" style="color:black; text-decoration: none">Our logo</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#country" style="color:black; text-decoration: none">Countries</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#commitment" style="color:black; text-decoration: none">Our Commitment</a>
	</li>
		</ul>
</div>

<!--totopbutton-->

<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="top.png" width="70px" height="55px"></button>

<script>
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


<div id="page">
<div id="rc">
<div id="about"></div>
<h1 style="font-size:3.5em; margin-bottom: 0.5em">About Us</h1>
<p style="font-size:1.3em; line-height: 1.6; text-align:justify">trEAT is an online snacks shopping site founded in 2019 by individuals who thrive to supply good value global snacks to meet the discerning appetite
of every customer for quality food products and snacks for their everyday needs. </p>
<br><hr><br>

<div id="website"></div>
<h1 style="font-size:3em; margin-bottom: 0.5em">Our Website</h1>
<p style="font-size:1.3em; line-height: 1.6; text-align:justify">At trEAT, you can discover new brands from all over the world and look out for any snacks that you desire. We simplify your shopping experience as you
can browse by flavours such as sweet, salty, sour and spicy according to your taste or browse by countries to look out for any new arrivals. </p>
<br><hr><br>

<div id="logo"></div>
<h1 style="font-size:3em; margin-bottom: 0.5em">Our Logo</h1>
<p style="text-align:center"><img src="treatlogo.png" width="350px" height="300px"></p>

<br><hr><br>

<div id="country"></div>
<h1 style="font-size:3em; margin-bottom: 0.5em">Countries</h1>
<p style="font-size:1.3em; line-height: 1.6; text-align:justify">Currently we have expanded our inventory by bringing in more range of quality produce under one roof. You can now find fresh and seasonal snacks from
Malaysia, Japan, South Korea, Thailand and China via trEAT. </p>

<br><hr><br>

<div id="commitment"></div>
<h1 style="font-size:3em; margin-bottom: 0.5em">Our Commitment</h1>
<p style="font-size:1.3em; line-height: 1.6; text-align:justify">We work closely with our suppliers and industry partners to gain your confidence to shop at trEAT. We believe in providing fresh and quality products,
we can strive to satisfy your daily cravings.
<br>
<br>Putting customers at the heart of everything we do is what we’re passionate about. We provide excellent online shopping experience via reliable
delivery service and a variety of quality products at value for money prices without any minimum purchase.
</p>
<br><hr><br>

<div><p style="font-size:1.5em; line-height: 1.6; text-align:justify">Craving for snacks of foreign lands but they are too difficult to obtain? No worries! Place your orders with us today and all your cravings will be satisfied in no time!</p>
</div>



</body>
</div>
</div>


<!--Footer-->

<footer class="footer">
  <div class="footer-content">


    <div class="footer-section about" style="flex:2">
	<h1 style="margin-bottom: 0.5em;"><span>tr</span>EAT</h1>
	<p style="font-size:1.1em; line-height: 1.6; text-align:justify">trEAT is an online snacks shopping site founded in 2019 by individuals who thrive to supply good value global snacks to meet the discerning appetite
of every customer for quality food products and snacks for their everyday needs.
	</p>
	<br>
	<h3 style="margin-bottom: 1em;">Follow Us On</h3>
	<ul>
		<li style="display:inline; margin-right: 1em"><img src="fb.svg" width="30px" height="30px"></li>
	<li style="display:inline; margin-right: 1em"><a href="https://www.instagram.com/treat_my/" target="_blank"><img src="insta.svg" width="30px" height="30px"></a></li>
	<li style="display:inline"><img src="twitter.svg" width="30px" height="30px"></li>
	</ul>
    </div>


    <div class="footer-section links" style="flex:1">
	<h2 style="margin-bottom: 1em;">Links</h2>
	<ul>
	  <a href="AboutUs.php"><li style="margin-bottom: 1em">About Us</li></a>
	  <a href="T&C.php"><li style="margin-bottom: 1em">T&C</li></a>
	  <a href="Privacy.php"><li style="margin-bottom: 1em">Privacy Policy</li></a>
	  <a href="FAQ.php"><li style="margin-bottom: 1em">FAQ</li></a>

	</ul>
    </div>


    <div class="footer-section contact-form" style="flex:2" id="subscribe">
		<h2 style="margin-bottom: 0.3em;">Get Snacks News and Deals</h2>
		<br>
		<small><i>*required field</I></small>
		<form action="index.php" method="post" id="subscribeForm">
			<br>
			<p>E-mail*</p>
			<input type="email" name="emailSubscribe" id="emailSubscribe" class="text-input contact-input" style="width:350px" placeholder="Your email address..."><br><br>
			<input type="checkbox" id="checkSubscribe" value="1">&nbsp;By checking this box, you agree to receive emails from trEAT*<br><br>
			<button type="button" class="btn btn-big contact-btn" onclick="validateSubscribe(); subscribe()">
				<b>Subscribe</b>
			</button>
		</form>
		</div>

  <div class="footer-bottom">
	<small><i>Copyright &copy; 2019 trEAT. All Rights Reserved.</i></small>
  </div>

</div>
</footer>
</html>
