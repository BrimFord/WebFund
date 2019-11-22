<?php
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Privacy</title>
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

<div class="sidebar">
	<ul>
	<li style="margin-bottom: 2em">
		<a href="#commitment" style="color:black; text-decoration: none">Our Commitment</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#info" style="color:black; text-decoration: none">Information</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#data" style="color:black; text-decoration: none">Personal Data</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#disclosure" style="color:black; text-decoration: none">Disclosure</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#rights" style="color:black; text-decoration: none">Rights</a>
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
<h1 id="top" style="font-size:3.5em; margin-bottom: 0.5em">Privacy Policy</h1>
<hr><br>
<dl>
<ol>
<dt id="commitment" style="font-size:2em; margin-bottom: 0.5em"><li> OUR COMMITMENT</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">Thank you for using trEAT.com! We are committed to providing you the best online shopping and delivery experience possible. We are also committed to protecting your personal information in accordance with Personal Data Protection Act 2010 (PDPA 2010). This Privacy Policy explains how we use, disclose, and protect the personal information we collect. We respect the confidentiality of your personal information and will make reasonable security arrangements to ensure that all personal information in our possession or control is kept in a safe and secure manner, and to prevent unauthorized access and use of your personal information. This Policy applies whether you access trEAT.com through a browser, through a mobile, or through any other method.</dd>
<br><hr><br>

<dt id="info" style="font-size:2em; margin-bottom: 0.5em"><li>HOW INFORMATION IS COLLECTED</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">We collect information when you:</dd>

<ul style="list-style-type:disc; font-size:1.3em; line-height: 1.6; text-align:justify">
<dd><li>Use our services</li>
<li>Browse our website</li>
<li>Engage with us through social media</li>
<li>Access our website through a mobile device</li></dd>
</ul>
<br><hr><br>

<dt style="font-size:2em; margin-bottom: 0.5em"><li>TYPES OF INFORMATION COLLECTED</li></dt>
<ul style="list-style-type:upper-alpha;">

<dd style="font-size:1.3em; line-height: 1.8; text-align:justify"><li>Traffic Data Collected</li></dd>



<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">We automatically track and collect the following information when you visit our Site:<br>
<ul style="list-style-type:disc;">
<li>IP address;</li>
<li>domain server </li>
<li>type of computer or handheld device </li>
<li>type of web browser </li>
<li>mobile identification number </li>
<li>telecommunications carrier (collectively "Traffic Data") </li></ul>
Traffic Data is anonymous information that does not personally identify you but is helpful for marketing purposes or for improving your experience on our Site.</dd>

<dd style="font-size:1.3em; line-height: 1.8; text-align:justify"><li>Personal Information Collected</li></dd>


<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">In order for you to make an order, we may require or request that you provide us with information that identifies you. Personal Information may include:<br>
<ul style="list-style-type:disc;">
<li>Contact Data (such as your name, mailing and e-mail addresses)</li>
<li>Financial Data (such as your account number)</li>
<li>Demographic Data (such as your postcode, age, income, hobbies or affiliations)</li></ul>
If you communicate with us by e-mail, any information provided in such communication may be collected as Personal Information or Demographic Data, or a combination of both Personal Information and Demographic Data.</dd>

<dd style="font-size:1.3em; line-height: 1.8; text-align:justify"><li>Automatic Information Collected</li></dd>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">This information includes your browser type, IP address, and the pages you visit. This information is collected for analysis and evaluation in order for us to improve our website, our mobile applications, and the products and services which we provide. This information will not be used in association with your personal information. For example, like many web sites, we use "cookies," and we obtain certain types of information when your web browser accesses the Site. "Cookies" are alphanumeric identifiers that we transfer to your computer's hard drive through your web browser to enable our systems to recognize your browser and to provide features to you. A number of companies offer utilitied design to help you visit web sites anonymously. Although we will not be able to provide you with a personalized experience at our Site if we cannot recognize you, we want you to be aware that these tools exist. When you are using your handheld device, we are able to identify you by your mobile identification number, a unique identifier that is assigned to your handheld device by your telecommunications carrier.</dd>

<dd style="font-size:1.3em; line-height: 1.8; text-align:justify"><li>Information from Other Sources</li></dd>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">To improve the personalization of our services on the Site (for example, providing subject specific content or special offers that we think will interest you), we might receive information about you from other sources and add it to our account information. We also sometimes receive updated delivery and address information from other sources so that we can correct our records and deliver your next communication more easily.</dd>
</ul>
<br><hr><br>

<dt style="font-size:2em; margin-bottom: 0.5em"><li>LOST OR STOLEN INFORMATION</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">You must promptly notify us if your user name or password is lost, stolen or used without permission. In such an event, we will cancel that user name or password and update our records accordingly.</dd>
<br><hr><br>

<dt id="data" style="font-size:2em; margin-bottom: 0.5em"><li>PURPOSE OF COLLECTING PERSONAL DATA</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">The Personal Data is collected, used and otherwise processed by us for, amongst others, the following purposes:<br>

<ul style="list-style-type:disc;">
<li>processing your request(s), order(s), purchase(s) and/or contest entry</li>
<li>delivering notices, services, products, updates, prizes and/or promotional materials to you</li>
<li>maintaining and improving customer relationship</li>
<li>conducting marketing survey and client profiling activities</li>
<li>maintaining and updating internal record keeping</li>
<li>detecting and preventing crime (including but not limited to fraud, money-laundering, bribery)</li>
<li>meeting any legal or regulatory requirements and making disclosure under the requirements of any applicable law, regulation, direction, court order, by-law, guideline, circular, code applicable to us or any entity within our group</li>
<li>enabling us to send you information by email, telecommunication means (telephone calls or text messages) or social media about products, services and/or promotions offered by trEAT and selected third parties that we think may interest you</li>
<li>such other purposes directly related to the foregoing</li>
</ul>
</dd>
<br><hr><br>

<dt style="font-size:2em; margin-bottom: 0.5em"><li>ACCURACY OF PERSONAL DATA</dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">You are responsible for ensuring that the information you provide us is accurate, complete, not misleading and kept up to date.
</dd>
<br><hr><br>


<dt id="disclosure" style="font-size:2em; margin-bottom: 0.5em"><li>DISCLOSURE</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">The Personal Data provided to us will generally be kept confidential but you hereby consent and authorize us to provide or disclose your Personal Data to the following categories:<br>
<ul style="list-style-type:disc;">
<li>any person to whom we are compelled or required to do so under law</li>
<li>any entity within our group</li>
<li>payment channels including without limitation financial institutions for purpose of assessing, verifying, effectuating and facilitating payment of any amount.</li>
<li>our business partners and affiliates that provide related services or products in connection with our business, for joint promotions and/or contest</li>
<li>statutory authorities, government agencies and industry regulators</li>
<li>our consultants, accountants, auditors, lawyers or other financial or professional advisers;
<li>our sub-contractors or third party service or product providers</li>
<li>our service providers for purposes of establishing and maintaining a common database where we have a legitimate common interest</li>
<li>the general public when you become a winner in a contest by publishing your name, photographs and other Personal Data without compensation for advertising and publicity purposes</li>
</dd>
<br><hr><br>

<dt id="rights" style="font-size:2em; margin-bottom: 0.5em"><li>RIGHTS OF ACCESS AND CORRECTION</li></dt>
<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">Subject to the provisions of the PDPA, you may, upon payment of a prescribed fee, have the right to request for access to and correction of your information held by us and in this respect, you may: <br>
<ul style="list-style-type:disc;">
<li>Check whether we hold or use your Personal Data and request access to such data</li>
<li>Request that we correct any of your Personal Data that is inaccurate, incomplete or out-of-date</li>
<li>Request that your Personal Data is retained by us only as long as necessary for the fulfilment of the purposes for which it was collected</li>
<li>Request that we specify or explain our policies and procedures in relation to data and types of Personal Data handled by us</li>
<li>Communicate to us your objection to the use of your Personal Data for marketing purposes whereupon we will not use your Personal Data for these purposes</li>
<li>Withdraw, in full or in part, your consent given previously, in each case subject to any applicable legal restrictions, contractual conditions and a reasonable time period</li>
</ul>
</dd>
<br>


</ol>


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
		</div>>

  <div class="footer-bottom">
	<small><i>Copyright &copy; 2019 trEAT. All Rights Reserved.</i></small>
  </div>

</div>
</footer>


</html>
