<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>trEAT</title>
    <meta charset="utf-8">
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
                <li><a href="AboutUs.php">Blog</a></li>
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

    <div id="right-col">
        <div class="container">
            <div class="img2">
                    <img src="japan(spicy1).png" width="250px" height="350px">
            </div>
            <div class="consnacks">
                <h1>Kara Mucho</h1><br>
                <p>62g</p><br>
                <h2>RM7.00</h2>
                <div class="quantity">
                    <label for="qty"><h3>Quantity:&emsp;</h3></label><br>
                    <input type="number" name="qty" pattern="[0-9]{2}">
                </div>
                <div class="buynow">
                    <a href="Checkout.php">
                        <button class="button2">Buy Now</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="container1">
            <h1>Kara Mucho</h1><br>
            <p>Since 1984, Kara Mucho has delighted the tastebuds of those who crave spicy snacks. It was the 1st chips in Japan to introduce a spicy flavor and remains popular even to this day. It's even said to have kick started the spicy food trend in Japan! Try the chips to see what all the hype is about! This snack contains meat product which may or may not be confiscated by customs depending on your country.</p>
        </div>
    </div>

    <!--Footer-->

    <footer class="footer">
        <div class="footer-content">


            <div class="footer-section about" style="flex:2">
                <h1 style="margin-bottom: 0.5em;"><span>tr</span>EAT</h1>
                <p style="font-size:1.1em; line-height: 1.6; text-align:justify">trEAT is an online snacks shopping site founded in 2019 by individuals who thrive to supply good value global snacks to meet the discerning appetite of every customer for quality food products and snacks for their everyday needs.</p>
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
</body>
</html>
