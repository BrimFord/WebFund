<?php
  session_start();
  if(isset($_SESSION['emailLogin']) && isset($_SESSION['passwordLogin'])) {
    echo "Anything you guys want to put";
    }
    else{
        echo "No session!!";
}?>
<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="flavour.css">
      <link rel="stylesheet" href="snacks.css">
	  <link rel="stylesheet" type="text/css" href="style/carousel.css">
	  <link rel="stylesheet" type="text/css" href="style/treatstyle.css">

        <script src="script/carousel.js"></script>
        <script src="script/header.js"></script>

  <title>Index</title>
  <style>
    .container3{
        display: flex;
        justify-content: space-between;
        align-items: center;
        border: 5px;
    }
    .button{
        border: none;
        background-color: inherit;
        padding: 14px 28px;
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        white-space: nowrap;
    }
    .imgc{
        display: inline-block;
        margin: 20px;
        padding: 1em;
        color: black;
        font-family: Montserrat,Arial,sans-serif;
    }

</style>
</head>
<body>


        <!--Navigation Bar-->
    <div id="header" style="z-index: 5">

            <!--Logo-->
            <div><a href="index.html"> <img src="treatlogo.png" width="150px" height="100px" style="margin: 0 10px 0 15px;"></a></div>

            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="MainStorePage.html">Store</a></li>
                <li><a href="AboutUs.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
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
            <form action="php/handling.php" method="POST" class="PopUpContent" id="accountForm" onsubmit="return validateForm()">
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
                            <input type="text" name="address1">

                            <br><br>

                            <label for="address2">Address Line 2: </label>
                            <input type="text" name="address2">

                            <br><br>

                            <label for="postcode">Postcode: </label><br>
                            <input type="number" name="postcode" pattern="[0-9]{5}">

                            <br><br>

                            <label for="state">State: </label>
                            <input type="text" name="state"><br>

                            <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember Me
                        </div>

                        <!--Create Account & Cancel Button-->
                        <div class="clearfix">
                            <button type="submit" class="button signupbtn">Create Account</button>
                            <button type="button" class="button cancelbtn" onclick="window.close()">Cancel</button>
                        </div>
                    </div>
                </form>



                <!--LOGIN FORM-->
                <form action="php/check.php" method="POST" class="PopUpContent" id="loginForm" onsubmit="return validateFormLogin()" style="display: none;">
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
                        <img src="img/eye_slash.svg" alt="show" class="psw_icon" onclick="showPasswordLogin()" id="psw_icon_login"><br>

                        <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember Me

                        <!--Create Account & Cancel Button-->
                        <div class="clearfix">
                                <button type="submit" class="button signupbtn">Login</button>
                                <button type="button" class="button cancelbtn" onclick="window.close()">Cancel</button>
                        </div>
                    </div>
                </form>
        </div>
        <!--NOT ASSIGNED TO ANYTHING YET-->
            <div id="PopUpLog" class="PopUpContainer" onclick="NoPopUp()" >
                <form action="/handling.php" method="POST" class="PopUpContent" id="logoutForm">

                    <div style="padding: 15px;">

                            <!--SIGN UP & LOGIN Headings-->
                            <div style="text-align: center;">
                                <br><br>
                                <h1>Logging Out?</h1>
                                <br><br>
                            </div>
                            <br><br>

                <!--Create Account & Cancel Button-->
                <div class="clearfix">
                        <button type="submit" class="buttons signupbuttons" onclick="<?php sesssion_destroy();?>">Logout</button>
                        <button type="button" class="buttons cancelbuttons" onclick="window.close()">Cancel</button>
                </div>
                </div>
                </form>
            </div>




    <br>
    <br>



        <!-- Carousel -->
        <div class ="main-banner" id = "main-banner" style="border-radius: 7px;">
          <div class = "imgbanbtn imgbanbtn-prev" id="imgbanbtn-prev" >

          </div>
          <a href="JapanSnacks.html">
          <div class ="imgban" id = "imgban3">
            <div class = "imgban-box">
              <h2></h2>
            </div>
          </div>
        </a>
          <a href="MalaysianSnacks.html"><div class ="imgban" id = "imgban2">
            <div class = "imgban-box">
              <h2></h2>
            </div>
          </div></a>
          <a href="index.html"><div class ="imgban" id = "imgban1">
            <div class = "imgban-box">
              <h2></h2>
            </div>
          </div> </a>
          <div class = "imgbanbtn imgbanbtn-next" id="imgbanbtn-next"></div>
        </div>


  <br><br>


  <div id="right-col" style="border-radius: 6px;">
    <span><h1>Countries</h1></span>
    <div class="container" >
        <a href="JapanSnacks.html"><div class="imgc"><img src="Japan.svg" width="150px" height="150px"><p>Japan</p></div></a>
        <a href="KoreanSnacks.html"><div class="imgc"><img src="SouthKorea.svg" width="150px" height="150px"><p>South Korea</p></div></a>
        <a href="ThailandSnacks.html"><div class="imgc"><img src="Thailand.svg" width="150px" height="150px"><p>Thailand</p></div></a>
        <a href="ChinaSnacks.html"><div class="imgc"><img src="China.svg" width="150px" height="150px"><p>China</p></div></a>
        <a href="MalaysianSnacks.html"><div class="imgc"><img src="Malaysia.svg" width="150px" height="150px"><p>Malaysia</p></div></a>

    </div>
  </div>


  <br><br>
  <div id="right-col">
    <div class="container3">
        <h1>Catagories</h1>
        <div class="button">
            <a href="MainStorePage.html">
                <button class="button">See All</button>
            </a>
        </div>
    </div>
    <h1>Sweet</h1>
    <div class="container">
        <div class="img">
            <a href="japan(sweet1).html">
                <img src="japan(sweet1).png" width="150px" height="200px"><p>Morinaga Milk Caramel</p>
            </a>
        </div>
        <div class="img">
            <a href="korea(sweet1).html">
                <img src="korea(sweet1).png" width="130px" height="200px"><p>Lotto Pepero Almond & Chocolate Sticks</p>
            </a>
        </div>
        <div class="img">
            <a href="thai(sweet1).html">
                <img src="thai(sweet1).png" width="250px" height="200px"><p>Euro Marble Cake</p>
            </a>
        </div>
        <div class="img">
            <a href="china(sweet1).html">
                <img src="china(sweet1).png" width="180px" height="200px"><p>White Rabbit Candy</p>
            </a>
        </div>
        <div class="img">
            <a href="msia(sweet1).html">
                <img src="msia(sweet1).png" width="180px" height="200px"><p>Iced Gems Biscuits</p>
            </a>
        </div>
    </div>
    <h1>Sour</h1>
    <div class="container">
        <div class="img">
            <a href="japan(sour1).html">
                <img src="japan(sour1).png" width="150px" height="200px"><p>Hoshiume Dried Plums</p>
            </a>
        </div>
        <div class="img">
            <a href="korea(sour1).html">
                <img src="korea(sour1).png" width="150px" height="200px"><p>Aye-shyuh Sour Candy</p>
            </a>
        </div>
        <div class="img">
            <a href="thai(sour1).html">
                <img src="thai(sour1).png" width="180px" height="200px"><p>Strawberry Rip Rolls</p>
            </a>
        </div>
        <div class="img">
            <a href="china(sour1).html">
                <img src="china(sour1).jpg" width="200px" height="200px"><p>Li Hing Mui Drops</p>
            </a>
        </div>
        <div class="img">
            <a href="msia(sour1).html">
                <img src="msia(sour1).png" width="150px" height="200px"><p>Lot 100 Sour+ Blackcurrant Gummy</p>
            </a>
        </div>
    </div>
    <h1>Salty</h1>
    <div class="container">
        <div class="img">
            <a href="japan(salty1).html">
                <img src="japan(salty1).png" width="150px" height="200px"><p>Calbee Seaweed & Salt Chips</p>
            </a>
        </div>
        <div class="img">
            <a href="korea(salty1).html">
                <img src="korea(salty1).png" width="180px" height="200px"><p>Crab Chips</p>
            </a>
        </div>
        <div class="img">
            <a href="thai(salty1).html">
                <img src="thai(salty1).png" width="250px" height="200px"><p>Lays Assorted Nori Seaweed Potato Chips</p>
            </a>
        </div>
        <div class="img">
            <a href="china(salty1).html">
                <img src="china(salty1).jpg" width="200px" height="200px"><p>Wang Wang Snow Cookies</p>
            </a>
        </div>
        <div class="img">
            <a href="msia(salty1).html">
                <img src="msia(salty1).png" width="180px" height="200px"><p>Mi-Mi</p>
            </a>
        </div>
    </div>
    <h1>Spicy</h1>
    <div class="container">
        <div class="img">
            <a href="japan(spicy1).html">
                <img src="japan(spicy1).png" width="150px" height="200px"><p>Kara Mucho</p>
            </a>
        </div>
        <div class="img">
            <a href="korea(spicy1).html">
                <img src="korea(spicy1).png" width="150px" height="200px"><p>Tteokbokki Snack</p>
            </a>
        </div>
        <div class="img">
            <a href="thai(spicy1).html">
                <img src="thai(spicy1).png" width="150px" height="200px"><p>Bento Squid Seafood Snack</p>
            </a>
        </div>
        <div class="img">
            <a href="china(spicy1).html">
                <img src="china(spicy1).jpg" width="150px" height="200px"><p>China Spicy Strips</p>
            </a>
        </div>
        <div class="img">
            <a href="msia(spicy1).html">
                <img src="msia(spicy1).png" width="180px" height="200px"><p>Dahfa Dried Fish Fillet</p>
            </a>
        </div>
    </div>
</div>
<br><br>
</body>

<script>
  <!--FOR the banner to stop moving-->
   document.getElementById("main-banner").onmouseenter = function(){
      clearInterval(startBannerLoop);
    }

    document.getElementById("main-banner").onmouseleave=function(){startBannerLoop = setInterval(function(){ bannerLoop();
    }, bannerTimer);
  }

   document.getElementById("imgbanbtn-prev").onclick = function(){
      if (bannerStatus===1){
        bannerStatus = 2;
      }
      else if (bannerStatus===2){
        bannerStatus = 3;
      }
      else if (bannerStatus===3){
        bannerStatus = 1;
      }
      bannerLoop2();

    }
    document.getElementById("imgbanbtn-next").onclick = function(){bannerLoop()
    }
</script>


<footer class="footer">
  <div class="footer-content">


    <div class="footer-section about">
	<h1 style="margin-bottom: 0.5em;"><span>tr</span>EAT</h1>
	<p style="font-size:1.1em; line-height: 1.6; text-align:justify">trEAT is an online snacks shopping site founded in 2019 by individuals who thrive to supply good value global snacks to meet the discerning appetite
of every customer for quality food products and snacks for their everyday needs.
	</p>
	<br>
	<h3 style="margin-bottom: 1em;">Follow Us On</h3>
	<ul>
		<li style="display:inline; margin-right: 1em"><img src="fb.png" width="30px" height="30px"></li>
	<li style="display:inline; margin-right: 1em"><img src="insta.png" width="30px" height="30px"></li>
	<li style="display:inline"><img src="twitterr.png" width="30px" height="30px"></li>
	</ul>
    </div>


    <div class="footer-section links">
	<h2 style="margin-bottom: 1.5em;">Links</h2>
	<ul>
	  <a href="AboutUs.html"><li style="margin-bottom: 1em">About Us</li></a>
	  <a href="T&C.html"><li style="margin-bottom: 1em">T&C</li></a>
	  <a href="Privacy.html"><li style="margin-bottom: 1em">Privacy Policy</li></a>
	  <a href="FAQ.html"><li style="margin-bottom: 1em">FAQ</li></a>
	  <a href="HowToBuy.html"><li style="margin-bottom: 1em">How To Buy</li></a>

	</ul>
    </div>


    <div class="footer-section contact-form">
	<h2 style="margin-bottom: 0.5em;">Contact Us</h2>
	<br>
	<form action="index.html" method="post">
		<input type="text" name="name" class="text-input contact-input" style="width:250px" placeholder="Your name...">
		<input type="email" name="email" class="text-input contact-input" style="width:350px" placeholder="Your email address...">
		<textarea rows="4" cols="60" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
		<button type="submit" class="btn btn-big contact-btn">
			Send
		</button>
	</form>
    </div>

  <div class="footer-bottom">
	<small><i>Copyright &copy; 2019 trEAT. All Rights Reserved.</i></small>
  </div>

</div>
</footer>

</html>
