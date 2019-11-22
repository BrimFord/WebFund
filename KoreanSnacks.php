<?php
  session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>South Korea</title>
	<link rel="stylesheet" type="text/css" href="style/sidebar.css">
	<link rel="stylesheet" type="text/css" href="style/treatstyle.css">
	<script src="script/header.js"></script>
	<style>
	.flex-container {
	  padding-left: 160px;
	  padding-top: 20px;
	  display: flex;
	  flex-wrap: wrap;
	  background-color: #fff;
	}

	.flex-container  div {
	  background-color: #fff;
	  width: 400px;
	  height: 400px
	  margin: 10px;
	  text-align: center;
	  line-height: 75px;
	  font-size: 30px;
	  padding: 15px;
	}

	.flex-container img{
		width: 350px;
	 	height: 200px
	}
	.main-banner{
	margin:0 auto;
	width:100%;
	height: 200px;
	background-color: #fff;
	overflow : hidden;
	position : relative;
}
.main-banner .imgban{
	width:100%;
	height: 100%;
	position: absolute;
	}




.main-banner #banner{
	background-image: url("img/KoreaBanner.png");
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;}

	</style>

</head>
<body>
        <!--Navigation Bar-->
		<div id="header" style="z-index: 5">

            <!--Logo-->
            <div><a href="index.php"> <img src="treatlogo.png" width="150px" height="100px" style="margin: 0 10px 0 15px;"></a></div>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="MainStorePage.php">Store</a></li>
                <li><a href="AboutUs.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

            <!--User/Account Icon-->
            <div onclick="document.getElementById('PopUpForm').style.display='block'" style="position: absolute; right: 50px;"><img src="img/user_circle.svg" alt="user" class="icon"></div>
        </div>


        <!--Pop-up Register & Login Form-->
        <div id="PopUpForm" class="PopUpContainer" onclick="NoPopUp()">

            <!--REGISTER FORM-->
            <form action="php/handling.php" method="POST" class="PopUpContent" id="accountForm">
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
                <form action="php/check.php" method="POST" class="PopUpContent" id="loginForm" style="display: none;">
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
                <form  method="POST" class="PopUpContent" id="logoutForm" style="width: 40%;">

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



       <div class="sidenav">
           <h2>Navigation</h2>
           <br>
  		<a href="ChinaSnacks.php">Chinese Snacks</a><br>
  		<a href="JapanSnacks.php">Japanese Snacks</a><br>
        <a href="KoreanSnacks.php">Korean Snacks</a><br>
  		<a href="ThailandSnacks.php">Thai <br> Snacks</a><br>
  		<a href="MalaysianSnacks.php">Malaysian Snacks</a>
		</div>

		<div class ="main-banner">
          <div class ="imgban" id = "banner"></div>
    	</div>
        </div>
        <br><br>
        <p class="welcomeMSG">Welcome to the world of Korean snacks</p>
        <br><br>

		<div class ="flex-container">
			<div>
				<a href="korea(sweet1).php">
				<img src="korea(sweet1).png">LOTTE Pepero<p>RM 7.00</p></a> </div>
			<div>
				<a href="korea(salty1).php">
				<img src="korea(salty1).png">Crab Chips<p>RM5.00</p></a></div>
			<div>
				<a href="korea(sour1).php">
				<img src="korea(sour1).png">Aye-shyuh Sour Candy<p>RM5.00</p></a></div>
			<div>
				<a href="korea(spicy1).php">
				<img src="korea(spicy1).png">Tteokbokki Snack<p>RM 6.00</p></a></div>



		</div>

<!--Footer-->

<footer class="footer" style="z-index: 6">
  <div class="footer-content">


    <div class="footer-section about" style="flex:2">
    <h1 style="margin-bottom: 0.5em;"><span>tr</span>EAT</h1>
    <p style="font-size:1.1em; line-height: 1.6; text-align:justify">trEAT is an online snacks shopping site founded in 2019 by individuals who thrive to supply good value global snacks to meet the discerning appetite
of every customer for quality food products and snacks for their everyday needs.
    </p>
    <br><br>
    <h3 style="margin-bottom: 1em;">Follow Us On</h3>
    <ul>
        <li style="display:inline; margin-right: 1em"><img src="fb.svg" width="30px" height="30px"></li>
    <li style="display:inline; margin-right: 1em"><img src="insta.svg" width="30px" height="30px"></li>
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
        <button type="button" class="btn btn-big contact-btn" onclick="validateSubscribe()">
            <b>Subscribe</b>
        </button>
    </form>
    </div>

  <div class="footer-bottom">
    <small><i>Copyright &copy; 2019 trEAT. All Rights Reserved.</i></small>
  </div>

</div>
</footer>

</body>
</html>
