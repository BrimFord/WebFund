<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>FAQ</title>
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
		<a href="#about" style="color:black; text-decoration: none">About trEAT</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#delivery" style="color:black; text-decoration: none">Delivery</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#items" style="color:black; text-decoration: none">Items</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#order" style="color:black; text-decoration: none">Order</a>
	</li>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#report" style="color:black; text-decoration: none">Report Problem</a>
	</li>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#pay" style="color:black; text-decoration: none">Payment</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#others" style="color:black; text-decoration: none">Others</a>
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
<h1 id="top" style="font-size:3.5em; margin-bottom: 0.5em">FAQ</h1>
<hr><br>
<dl><ol>

<dt id="about" style="font-size:2em; margin-bottom: 0.5em"><li>What is trEAT?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">trEAT delivers imported snacks you love to your doorstep in as little as one hour! Our professionally-trained and experienced Personal Shoppers pick the best produce and items while our Drivers deliver them speedily and safely to you.</dd>
<br><hr><br>

<dt id="delivery" style="font-size:2em; margin-bottom: 0.5em"><li>How fast do you deliver?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">Very fast! We can deliver to you in the next 1 or 2 hours. You may also schedule deliveries up to 3 days in advance.</dd>
<br><hr><br>
<dt style="font-size:2em; margin-bottom: 0.5em"><li>What are the delivery hours?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">Our delivery hours are based on the opening hours of the stores we work with. For most stores, we can deliver between 10 am and 9 pm, Monday to Sunday (including Public Holidays).</dd>

<br><hr><br>

<dt style="font-size:2em; margin-bottom: 0.5em"><li>Who will deliver my order?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">Your orders will be delivered by our drivers using motorcycles equipped with a specially designed and custom-built delivery box.</dd>
<br><hr><br>
<dt style="font-size:2em; margin-bottom: 0.5em"><li>Does trEAT deliver to offices?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">Yes, of course! Moreover, if you want a more fitting grocery delivery service for your monthly office pantry needs, feel free to contact trEATCorporate.</dd>
<br><hr><br>

<dt id="items" style="font-size:2em; margin-bottom: 0.5em"><li>What happens if something is out of stock?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">When something is out of stock at the store, we do our best to replace it with a similar item. After checkout, you can choose to let your shopper pick the replacements themselves, have them call or message you with suggestions or ask that no replacements be provided at all.</dd>
<br><hr><br>
<dt style="font-size:2em; margin-bottom: 0.5em"><li>Who will select my items?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">Your grocery will be selected by specially screened and professionally trained Personal Shoppers.</dd>
<br><hr><br>

<dt style="font-size:2em; margin-bottom: 0.5em"><li>Are there price differences from the store?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">Where the store is labeled as having &quot;same prices as in-store&quot; on the store selection page, we will endeavor on a best-efforts basis to charge the same price as in-store. However, due to certain circumstances outside of our control (for example, technical issues or sudden price changes in store), there may be small, temporary inconsistencies in our pricing compared with the physical store.
<br>
Where the store is labeled as having prices that &quot;may vary from in-store&quot;, our prices will differ from the in-store price due to a small service charge that we add to the in-store price.
<br>
In either situation above, if you notice an item that you think is priced incorrectly, please reach out to us and we will strive to find a fair solution! We reserve the right to cancel items that are priced incorrectly.</dd>
<br><hr><br>

<dt style="font-size:2em; margin-bottom: 0.5em"><li>How do you treat items that are non-Halal?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">We allow you to buy non-Halal items using trEAT and are very careful to ensure that at no point during checkout, delivery, or at any other time, do Halal and non-Halal items get in contact with each other.</dd>
<br><hr><br>

<dt style="font-size:2em; margin-bottom: 0.5em"><li>How do I return items?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">Should you find that any items you receive are incorrect or not up to your satisfaction, you can reject it on the spot by letting our driver know. We will only charge you for items which you accept.

Once you have confirmed the items you have received and accepted them, the transaction is considered finalised and any further returns will be up to management discretion. If you believe you have a valid reason or complaint, please ensure to contact our customer service via mysupport@treat.com within 72 hours together with photographic evidence (where relevant).</dd>
<br><hr><br>

<dt id="order" style="font-size:2em; margin-bottom: 0.5em"><li>How do I check the status of my order?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">You will be notified in real-time when your order is packed, when it is on its way and when it has almost arrived. Remember to turn on your push notifications in your phone settings. You can also go to &quot;My Order Status&quot; to check on the status of your order.</dd>
<br><hr><br>
<dt style="font-size:2em; margin-bottom: 0.5em"><li>How can I edit or cancel my order?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">You can edit your order until before the personal shopper starts picking your items. Go to &quot;My Orders&quot; section in our app and select the order you want to edit. Click &quot;Edit Order&quot; to change one of the following:
<ul style="list-style-type:disc">
<li>Add or remove items</li>
<li>Change the delivery time slot</li>
<li>Change payment method</li>
<li>Change address</li>
<li>Cancel order</li>
</ul>
</dd>
<br><hr><br>
<dt style="font-size:2em; margin-bottom: 0.5em"><li>What is your cancellation policy?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">Once your order is placed & our shopper has started picking the items; for technical reasons, you cannot cancel your order. However, you have the option to check all your items before accepting them at the door.</dd>
<br><hr><br>
<dt id="report" style="font-size:2em; margin-bottom: 0.5em"><li>When will I receive my refund?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">If you paid using credit or debit card, your refund will be paid back into your card in accordance with bank&rsquo;s standard practices. Please note each issuer bank will have different time periods to reflect the refunded sum in your bank account/ statement.
If you paid using cash on delivery, your refund will be paid to you in the form of a voucher code, which will be sent to you within 5 working days. This voucher code will entitle you to a discount on your next order.</dd>
<br><hr><br>

<dt style="font-size:2em; margin-bottom: 0.5em"><li>How do I report a problem with my order?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">If you have any problems with your order, please tell us! You can call us at 03&ndash;0205 6161 or simply write to mysupport@treat.com. Please note that complaints or requests requiring refunds must be made within three (3) days after your order has been delivered.
<br>
Please note that refunds for perishable and/or semi-perishable goods (example fish, vegetables, dairy products, fruits, bread, onion, potato, pies, cake etc) will only be considered if these items are rejected at the time of delivery.
<br>
Refunds will not be provided if you do not reach out to us regarding your desired refund within the aforementioned time frames.</dd>
<br><hr><br>


<dt id="pay" style="font-size:2em; margin-bottom: 0.5em"><li>How much is the service fee?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">Our service fee varies based on store, delivery distance and time slot that you have selected.
<br>
Some of our stores have extended coverage areas. If the delivery distance from that store to your location is outside of the normal coverage area, an additional charge of RM1 per km will apply.
<br>
Please note that there are no free delivery thresholds for all our stores.
<br>
If you are unsure about the service fee applicable to your order, please make sure to check either via the Delivery Checker page or at Checkout, before confirming your order.</dd>
<br><hr><br>

<dt style="font-size:2em; margin-bottom: 0.5em"><li>What happens if I choose to pay by card?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">We will authorize a small sum for card verification purposes. You will not be charged for this amount.
Your card may be pre-authorized or charged the total checkout amount when you complete the order confirmation process on our app / website.
Upon delivery:
<br>
<ul style="list-style-type:disc">
<li>if your final amount is higher than your checkout amount, the additional amount will be charged to your card via recurring charges or we will request for this in the form of cash on delivery</li>
<li>if your final amount is lower than your checkout amount, the balance will be returned to your card in accordance with your bank&rsquo;s standard practices</li>
<li>if your final amount is the same as your checkout amount, no additional refunds or charges will be processed</li>
</ul>
Please allow your bank some time to update the final charge on your statement after delivery.</dd>
<br><hr><br>

<dt style="font-size:2em; margin-bottom: 0.5em"><li>What happens to my discount if there are items out of stock?</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">All our promotions apply to the net value of the delivered items (Adjusted after out of stock replacements). For example: If you place an order worth RM200 and have a discount code for 20% OFF on your order. However, in cases where your original RM200 has RM60 worth of out of stock items; the 20% discount will apply to the net value of your order i.e. RM140.</dd>

<br><hr><br>

<dt id="others" style="font-size:2em; margin-bottom: 0.5em"><li>I have many more questions for you!</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">Let us know! We will be waiting eagerly at mysupport@treat.com or give us a call at 03&ndash;02056161</dd>

</ol></dl>
</body>
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
