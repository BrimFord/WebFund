<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" type="text/css" href="style/treatstyle.css">

        <script src="script/header.js"></script>

  <title>Checkout</title>
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
<br><br>




    <br><br>

        <div class="padding">

            <form action="index.html" method="POST" id="checkoutForm">


            <!--CHECKOUT Headings-->

                    <h1 style="text-align: center;">Checkout</h1>

                <br><br>

                <!---->
                <div style="width: 30%; margin: auto;">
                    <label for="method">Payment Method: </label>
                    <br>



                    <select name="method" id="method" style="width: 100%;" onchange="payment()">
                        <option value="" disabled selected>--SELECT--</option>
                        <option value="cod">Cash on Delivery</option>
                        <option value="card">Credit/Debit Card</option>
                    </select>

                    <br><br>

                    <label for="addressShipping">Shipping Address: </label>
                    <input type="text" name="addressShipping" id="addressShipping"><br>
                    <input type="checkbox" name="addressCheck" id="addressCheck" style="margin-bottom:15px"> Same as profile's address

                    <br><br><br><br><br>

                    <div id="card" style="display: none; margin: auto;">
                        <h3>Accepted Payment</h3>
                        <br><br>
                        <div>
                            <img src="img/visa.svg" width="50px" style="margin-right: 20px;">
                            <img src="img/mastercard.svg" width="50px">
                        </div>
                        <br><br>


                        <label for="cardNum">Card Number: </label><br>
                        <input type="text" name="cardNum" id="cardNum" pattern="[0-9]{14}">

                        <div style="width: 100%; display: inline-block;">

                            <div style="width: 40%; display: inline-block;">
                                <label for="exp_date">Expiry Date: </label><br>
                                <input type="text" name="exp_date" id="exp_date" placeholder=" MM / YYYY">
                            </div>

                            <div style="width: 40%; display: inline-block; float: right;">
                                <label for="cvv">CVV: </label><br>
                                <input type="text" name="cvv" id="cvv" pattern="[0-9]{3}" placeholder="3-digits on the back of card">
                            </div>
                        </div>




                    </div>
                    <br>
                    <button type="button" class="buttons signupbutton" style="width: 100%;"  onclick="validateCheckout()">Purchase</button>
                    <br><br><br><br>
                </form>
                </div>

                <div id="PopUpThanks" class="PopUpContainer">

                            <div class="PopUpContent"  style="width: 25%; font-size: x-large; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" >

                                    <!--THANK YOU MESSAGE-->
                                    <div style="text-align: center;">
                                        <br><br>
                                        <h1>THANK</h1>

                                        <h1>YOU!</h1>
                                        <br><br>
                                        <img src="img/smile.svg" width="170px">
                                    </div>
                                    <br><br>

                        </div>
                    </div>

    </body>
</html>
