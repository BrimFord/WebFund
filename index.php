<?php
  session_start();
  if(isset($_SESSION['user_email']) && isset($_SESSION['password'])) {
    echo "Anything you guys want to put";
    }
    else{
        echo "No session!!";
}?>
<!DOCTYPE html>
<html>


<head>
      <link rel="stylesheet" href="style/header.css">
      <link rel="stylesheet" href="flavour.css">
	  <link rel="stylesheet" type="text/css" href="style/carousel.css">
	  <link rel="stylesheet" type="text/css" href="treatstyle.css">

        <script src="script/carousel.js"></script>
        <script src="script/header.js"></script>
  <title>Index</title>
  <style>
    .container3{
        display: flex;
        justify-content: flex-end;
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
        background-color: darkgray;
    }

</style>
</head>
<body>


        <!--Navigation Bar-->
    <div id="header" style="z-index: 5">

            <!--Logo-->
            <div><a href="index.html" onclick="window.location.reload(true);"> <img src="treatlogo.png" width="150px" height="100px"></a></div>

            <!--Search Bar & Search Icon-->
            <div style="width: 70%; margin-top: 17px;">
                <input type="text" placeholder="Search.." style="width: 90%; border-radius: 5px;margin-right: 15px;">
                <input type="image" src="img/search.svg" alt="Submit" style="width: 27px; filter:invert(1); position: absolute; top: 38px;">
            </div>

            <!--Cart Icon-->
            <div><img src="img/cart.svg" alt="cart" class="icon" onclick="document.getElementById('PopUpCart').style.display = 'block'" ></div>

            <!--User/Account Icon-->
            <div onclick="document.getElementById('PopUpForm').style.display='block'" style="width:auto; position: relative; left: 17px;"><img src="img/user_circle.svg" alt="user" class="icon"></div>
        </div>


        <!--Pop-up Register & Login Form-->
        <div id="PopUpForm" class="modal" onclick="NoPopUp()">

            <!-- X Close Pop-up Form-->
            <span onclick="window.close()" class="close" title="Close Modal">&times;</span>

            <!--REGISTER FORM-->
            <form action="php/handling.php" method="POST" class="modal-content" id="accountForm" onsubmit="return validateForm()">
                    <div class="padding">

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
                            <input type="text" id="user_name" name="user_name">

                            <br><br>

                            <label for="email">E-mail:</label><br>
                            <input type="email" id="email" name="email" placeholder="example@google.com">

                            <br><br>

                            <label for="password">Password:</label><br>
                            <input type="password" id="passwordReg" name="password" style="width: 93%" required>
                            <img src="img/eye_slash.svg" alt="show" class="psw_icon" onclick="showPasswordReg()" id="psw_icon_reg"><br>

                            <br><br>

                            <label for="address1">Address Line 1: </label>
                            <input type="text" name="address1" required>

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
                            <button type="submit" class="signupbtn">Create Account</button>
                            <button type="button" class="cancelbtn" onclick="window.close()">Cancel</button>
                        </div>
                    </div>
                </form>



                <!--LOGIN FORM-->
                <form action="php/check.php" method="POST" class="modal-content" id="loginForm" onsubmit="return validateFormLogin()" style="display: none;">
                        <div class="padding">

                                <!--SIGN UP & LOGIN Headings-->
                                <div style="overflow: auto;">
                                    <br><br>
                                    <h1 style="display: inline-block;">Login</h1>
                                    <h3 class="formOption" onclick="signupForm()">Sign Up</h3>
                                </div>
                                <br><br>

                        <!--LOGIN FORM FIELDS-->
                        <label for="email">E-mail:</label><br>
                        <input type="email" id="email" name="user_email" placeholder="example@google.com">

                        <br><br>

                        <label for="password">Password:</label><br>
                        <input type="password" id="passwordLogin" name="password" style="width: 93%" required>
                        <img src="img/eye_slash.svg" alt="show" class="psw_icon" onclick="showPasswordLogin()" id="psw_icon_login"><br>

                        <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember Me

                        <!--Create Account & Cancel Button-->
                        <div class="clearfix">
                                <button type="submit" class="signupbtn">Login</button>
                                <button type="button" class="cancelbtn" onclick="window.close()">Cancel</button>
                        </div>
                    </div>
                </form>
        </div>



        <!--CHECKOUT-->
        <div id="PopUpCart" class="modal" onclick="NoPopUpCart()">
                <div class="padding modal-content">

                    <!--CHECKOUT Headings-->
                    <div>
                            <h1 style="display: inline-block;">Checkout</h1>
                        </div>
                        <br><br>

                        <!---->
                        <div>
                            <label for="method">Payment Method: </label>
                            <br>
                            <select name="method" id="method" style="width: 100%;" onchange="payment()">
                                <option value="" disabled selected>--SELECT--</option>
                                <option value="cod">Cash on Delivery</option>
                                <option value="card">Credit/Debit Card</option>
                            </select>

                            <br><br>

                            <label for="addressShipping">Shipping Address: </label>
                            <input type="text" name="addressShipping"><br>
                            <input type="checkbox" name="addressUser" style="margin-bottom:15px"> Same as profile's address

                            <br><br>

                            <div id="card" style="display: none">
                                <h1>Accepted Payment</h1><br><br>

                                <label for="postcode">Card Number: </label><br>
                                <input type="number" name="cardNum" pattern="[0-9]{14}">


                            </div>
                        </div>
                </div>
        </div>


        <!-- Carousel -->
        <div class ="main-banner" id = "main-banner" >
          <div class = "imgbanbtn imgbanbtn-prev" id="imgbanbtn-prev" >

          </div>
          <a href="index.html">
          <div class ="imgban" id = "imgban3">
            <div class = "imgban-box">
              <h2></h2>
            </div>
          </div>
        </a>
          <a href="something.html"><div class ="imgban" id = "imgban2">
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
    <h1>Categories</h1>
    <div class="container" >
        <a href="JapanSnacks.html"><div class="imgc"><img src="Japan.svg" width="150px" height="150px"><p>Japan</p></div></a>
        <a href="KoreanSnacks.html"><div class="imgc"><img src="SouthKorea.svg" width="150px" height="150px"><p>South Korea</p></div></a>
        <a href="ThailandSnacks.html"><div class="imgc"><img src="Thailand.svg" width="150px" height="150px"><p>Thailand</p></div></a>
        <a href="ChinaSnacks.html"><div class="imgc"><img src="China.svg" width="150px" height="150px"><p>China</p></div></a>
        <a href="MalaysianSnacks"><div class="imgc"><img src="Malaysia.svg" width="150px" height="150px"><p>Malaysia</p></div></a>
        <div><a href="MainStorePage.html"><button class="button">See More</button></a></div>
    </div>
  </div>


  <br><br>
<div id="right-col">
    <h1>Sweet</h1>
    <div class="container3">
        <div class="button">
            <a href="sweet.html">
                <button class="button">See More</button>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="img">
            <a href="japan(sweet1).html">
                <img src="japan(sweet1).png" width="150px" height="200px"><p>Morinaga Milk Caramel</p>
            </a>
        </div>
        <div class="img">
            <a href="korea(sweet1).html">
                <img src="korea(sweet1).png" width="230px" height="200px"><p>LOTTE Pepero</p>
            </a>
        </div>
        <div class="img">
            <a href="thai(sweet1).html">
                <img src="thai(sweet1).png" width="200px" height="200px"><p>Euro Cake</p>
            </a>
        </div>
        <div class="img">
            <a href="china(sweet1).html">
                <img src="china(sweet1).png" width="180px" height="200px"><p>White Rabbit Candy</p>
            </a>
        </div>
        <div class="img">
            <a href="msia(sweet1).html">
                <img src="msia(sweet1).png" width="180px" height="200px"><p>Iced Gems</p>
            </a>
        </div>
    </div>
    <h1>Sour</h1>
    <div class="container3">
        <div class="button">
            <a href="sour.html">
                <button class="button">See More</button>
            </a>
        </div>
    </div>
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
                <img src="thai(sour1).png" width="200px" height="200px"><p>Rip Rolls</p>
            </a>
        </div>
        <div class="img">
            <a href="china(sour1).html">
                <img src="china(sour1).jpg" width="200px" height="200px"><p>Tang Hu Lu</p>
            </a>
        </div>
        <div class="img">
            <a href="msia(sou1).html">
                <img src="msia(sou1).png" width="200px" height="200px"><p>Lot 100 Sour+ Gummy</p>
            </a>
        </div>
    </div>
    <h1>Salty</h1>
    <div class="container3">
        <div class="button">
            <a href="salty.html">
                <button class="button">See More</button>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="img">
            <a href="japan(salty1).html">
                <img src="japan(salty1).png" width="150px" height="200px"><p>Seaweed Salt Chips</p>
            </a>
        </div>
        <div class="img">
            <a href="korea(salty1).html">
                <img src="korea(salty1).png" width="200px" height="200px"><p>Crab Chips</p>
            </a>
        </div>
        <div class="img">
            <a href="thai(salty1).html">
                <img src="thai(salty1).png" width="200px" height="200px"><p>Lays Assorted Potato Chips</p>
            </a>
        </div>
        <div class="img">
            <a href="china(salty1).html">
                <img src="china(salty1).png" width="200px" height="200px"><p>Wang Wang Snow Cookies</p>
            </a>
        </div>
        <div class="img">
            <a href="msia(salty1).html">
                <img src="msia(salty1).png" width="180px" height="200px"><p>Mi-Mi</p>
            </a>
        </div>
    </div>
    <h1>Spicy</h1>
<div class="container3">
        <div class="button">
            <a href="spicy.html">
                <button class="button">See More</button>
            </a>
        </div>
    </div>
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
                <img src="thai(spicy1).png" width="200px" height="200px"><p>Bento Squid Seafood Snack</p>
            </a>
        </div>
        <div class="img">
            <a href="china(spicy1).html">
                <img src="china(spicy1).jpg" width="250px" height="200px"><p>China Spicy Strips</p>
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


<footer>
<ul class="footerul">

<div class='footerli'>
<h4 style="margin-bottom: 1em; font-size: 20px;">Customer Service</h4>
	<li style="margin-bottom: 1em"><a href="contact.html">Contact Us</a></li>
	<li style="margin-bottom: 1em"><a href="FAQ.html">FAQ</a></li>
	<li><a href="HowToBuy.html">How To Buy</a></li>


</div>
</ul>

<ul class="footerul">
<div class='footerli'>
	<h4 style="margin-bottom: 1em; font-size: 20px">trEAT</h4>
	<li style="margin-bottom: 1em"><a href="AboutUs.html">About Us</a></li>
	<li style="margin-bottom: 1em"><a href="T&C.html">T&C</a></li>
	<li style="margin-bottom: 1em"><a href="Privacy.html">Privacy Policy</a></li>

</div>
</ul>
<ul class="footerul">
<div class='footerli'>
	<h4 style="margin-bottom: 1.5em; font-size: 20px">Social Media</h4>
	<li style="display:inline; margin-right: 1em"><img src="fb.png" width="30px" height="30px"></li>
	<li style="display:inline; margin-right: 1em"><img src="insta.png" width="30px" height="30px"></li>
	<li style="display:inline"><img src="twitterr.png" width="30px" height="30px"></li>
	<p style="margin-top: 1.5em"><small><i>Copyright &copy; 2019 trEAT. All Rights Reserved.</i></small></p>
</div>
</ul>

</footer>
</html>
