<?php
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>T&C</title>
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
		<a href="#intro" style="color:black; text-decoration: none">Introduction</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#def" style="color:black; text-decoration: none">Definitions</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#acc" style="color:black; text-decoration: none">Account</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#or" style="color:black; text-decoration: none">Order</a>
	</li>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#pp" style="color:black; text-decoration: none">Prices and Payment</a>
	</li>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#del" style="color:black; text-decoration: none">Delivery</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#cancel" style="color:black; text-decoration: none">Cancellation</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#re" style="color:black; text-decoration: none">Return and Refund</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#data" style="color:black; text-decoration: none">Personal Data</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#linked" style="color:black; text-decoration: none">Linked Sites</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#com" style="color:black; text-decoration: none">Complaints</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#limit" style="color:black; text-decoration: none">Limitation of Liability</a>
	</li>
	<li style="margin-bottom: 2em">
		<a href="#treat" style="color:black; text-decoration: none">trEAT Corporatey</a>
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
<h1 id="tc" style="font-size:3.5em; margin-bottom: 0.5em">Terms and Conditions</h1>
<p style="font-size:1.2em; line-height: 1.6; text-align:justify">Please read the terms and conditions set out below carefully before ordering any Goods or Services listed on trEAT. By visiting our Website, registering an account with us or by ordering any goods from this Website, by phone, or by any devices you agree that you have read and understand these Terms and Conditions and that you accept and agree to be bound by them.
<br>
We reserve the right to modify or update our Terms and Conditions at any time without prior notice. It is your responsibility to check for any changes in our Terms and Conditions.
<br>
A breach or violation by you of any of our Terms and Conditions will result in the immediate termination of provision of services to you without further reference to you.</p>
<br><hr><br>

<dl>
<ol>
<dt id="intro" style="font-size:2em; margin-bottom: 0.5em"><li>Introduction</li></dt>
<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">trEAT is an online snacks shopping site incorporated and existing under the laws of Malaysia.
<br>
The Company is engaged in the business of building, operating and managing an online marketplace with its trade name trEAT that provides personal shoppers to purchase your ordered snacks from the Participating Retailers and provide delivery service to your doorstep on trEAT website, an Internet domain property registered under the Company&rsquo;s name.
<br>
trEAT provides a Platform to enable the registered Customer to place, accept, conclude, manage and fulfil orders for the sale and purchase of snacks online via this Website. THE PARTIES HEREBY AGREE AS FOLLOWS:
</dd>
<br><hr><br>

<dt id="def" style="font-size:2em; margin-bottom: 0.5em"><li>Definitions</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">2.1 &quot;Agreement&quot; refers to this Terms and Conditions, the Privacy Policy, any order form, and the payment instructions provided;
<br>
2.2 &quot;Checkout&quot; refers to completion of the cart checkout process on our Website that results in an Order confirmation;
<br>
2.3 &quot;Customer&quot; refers to any person, firm, company or body registered with TrEAT to place an Order on the Website;
<br>
2.4 &quot;Delivery&quot; refers to goods and any form of delivery service, which are provided by the Company;
<br>
2.5 &quot;Goods&quot; refers to the consumer goods which are on retail sale by the Participating Retailer, including but not limited to snacks for consumer use and / or consumption and which are made available through its Premises. Notwithstanding the above, trEAT shall have absolute discretion not to include any such identified Goods on the Platform at its sole and absolute discretion;
<br>
2.6 &quot;Independent Contractor&quot; refers to any third party individual rider or rider company engaged by the Company to provide delivery service;
<br>
2.7 &quot;Order&quot; refers to confirmed shopping cart submitted by you upon checkout from the Website;
<br>
2.8 &quot;Participating Retailer&quot; refers to a third party, which is cooperating with trEAT to supply the Snacks and Services (if any);
<br>
2.9 &quot;Privacy Policy&quot; refers to the agreement as displayed on this site, governing how we collect and store data;
<br>
2.10 &quot;Premise&quot; or &quot;Premises&quot; refers to the outlet or store where the Participating Retailer keeps and sells the consumer goods to the public;
<br>
2.11 &quot;Service&quot; or &quot;Services&quot; refers to services which we may supply and you may request from our Website including such services provided by third party service providers such as payment gateway services;
<br>
2.12 &quot;Service Fee&quot; refers to the delivery charges and shopper fees that you will be charged upon placing an Order with trEAT;
<br>
2.13 &quot;Total Bill&quot; refers to the total price for Delivery, Goods or Services ordered, including any other charges or taxes including but not limited to Sale and Services Tax (SST), government duties and other levies imposed at any time by the government that shall be charged to you upon completion of your Delivery;
<br>
2.14 &quot;We&quot;, &quot;Us&quot;, &quot;Our&quot;, &quot;trEAT&quot;, &quot;the Company&quot;, all reference to the Company;
<br>
2.15 &quot;You&quot;, &quot;Your&quot;, &quot;Yours&quot; refer to you, the individual or representative of corporate body accessing this Website to order Snacks and Services from the Website or any other way to order from trEAT.
</dd>
<br><hr><br>

<dt id="acc" style="font-size:2em; margin-bottom: 0.5em"><li>Account</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify"><b>Registration of Account</b>
<br>
3.1 Before placing an Order from trEAT, you are required to provide a valid e-mail address and create your own password for the purpose of registration of an account with us. You must ensure that you keep the combination of these details secure and do not provide this information to a third party.

<br>
3.2 Only one (1) trEAT account is allowed for each registered phone number. Additional accounts may be allowed at our discretion. Furthermore, the number of devices you may use to log into your trEAT account may also be subject to limitations.
<br><br>
<b>User information</b>
<br>
3.3 When using our Website, you agree to provide us with the correct required information and warrant that:
<br>
<ul style=list-style-type:disc;>
<li>the provided information is correct and complete and shall inform us immediately of any changes of the provided information</li>

<li>the credit or debit card details that you provide are for your own credit or debit card and that you have sufficient funds to make the payment</li>

<li>You are eighteen (18) years old and above</li>

<li>the Goods and/or Services is for your own consumption/use and strictly prohibited for resale</li></ul>
<br>
<b>Suspension / Termination of Account</b>
<br>
3.4 trEAT has absolute discretion and rights to refuse registration of any account and to terminate the registration of any account for any reason whatsoever.
<br>
3.5 We consider the following actions as wrongful use of trEAT account, including but not limited to:
<br>
<ul>
<li>Usage of account for any illegal activities in accordance to the laws of Malaysia; and/or</li>
<li>Usage of account for commercial or non-domestic purposes; and/or</li>
<li>Usage of multiple trEAT accounts for purchases related to trEAT promotions; and/or</li>
<li>Creation of account on behalf of another person or entity without their authorization</li>
</ul>

3.6 In the event that:
<br>(i) our systems detect multiple accounts being linked to your phone number;
<br>(ii) wrongful use of trEAT accounts as detailed in Clause 3.5;
<br>(iii) payment methods that we deem suspicious;
<Br>(iv) multiple instances of payment failure; or
<br>(v) any of the information given is incomplete, invalid, false or wrongful, we reserve the right to:
<br>
i. Cancel any of your current or future Order<br>
ii. Immediately terminate your access to our Services without further reference to you<br>
iii. Suspend your trEAT account and/or payment accounts indefinitely<br>
iv. Immediately cease all further communication with you.
<br>
<br>
<b>Non Liability</b>
<br>
3.7 We will take all reasonable care, in so far as it is in our power to do so, to keep the details of your Order and payment secure, but in the absence of negligence on our part we shall not held liable for any loss you may suffer if a third party procures unauthorized access to any data you provide when accessing or place an Order from the Website .
<br>
3.8 We shall not be held liable to you for any losses (monetary or otherwise), liabilities, costs, damages, charges or expenses arising out of the actions or consequences stated in Clause 3.6.
<br>
</dd>
<br><hr><br>
<dt id="or" style="font-size:2em; margin-bottom: 0.5em"><li>Order</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify"><b>Acceptance and Formation of Contract</b>
<br>
4.1 There will be no contract of any kind between you and trEAT unless and until we actually dispatch the Goods to you. Your Order is an offer to buy from us. Nothing said or done by us will be considered any acceptance of that offer until your Order has been dispatched to you. Only once the goods are dispatched, a contract will be made between trEAT and you, and you will be charged accordingly for the Goods and Services provided. For avoidance of doubt, by placing an Order with trEAT, you hereby agree and acknowledged that you are entering a contract with trEAT only and to liaise with trEAT directly on the Order, delivery service and/or refund.
<br>
4.2 We reserve the right to cancel your Order and/or deny you access to our services should any of these required information be found to be incomplete and/or invalid and/or for any reason at any time. This is done at our sole discretion and reasons need not be assigned. You fully agree and understand that your remedy as a Customer in the event of any cancellation is the refund of the amount paid by you in respect of such cancelled transaction. trEAT shall not be responsible for additional compensation and you shall have no right to insist on the completion of your Order and/or delivery of the Order.
Goods for Own Use
<br>
4.3 The Goods delivered are for your own use and not for resale. You warrant that you are not acting as an agent for a third party. Unless there is an official agreement between you and trEAT, our Services as displayed on our Website and the App should be used for non-commercial and domestic use only. We reserve the right to refuse and/or cancel Order from businesses or that we consider are for commercial or other non-domestic purposes.
Age-restricted item
<br>
4.4 You must be at least twenty-one (21) years old when placing an Order for the restricted items listed below:
<br>
<ul style=list-style-type:disc;>
<li>Alcoholic Beverage (strictly applicable for Non-Muslim only)</li>
<li>Cigarette</li>
</ul>

and we reserve our rights to request you to present valid identity card for verification purpose upon placing and Order and/or Delivery of the aforesaid items. We shall at our sole discretion decide not to hand over the items to you if you fail to provide your identity card upon our request. You will still be charged for the items despite them not being delivered to you.
<br>

4.5 The availability of items as presented in our Website depends on the stock in the Premises of the Participating Retailer and we shall not guarantee that all the items you ordered will be available.
<br>

4.6 We reserve the right to set limits for quantity of items that you may order (this can refer to (i) the total amount of items in your order; and/or (ii) quantity available for purchase for each individual item published in our Website). If the quantities of your Order exceed either of these limits, we reserve the right to amend or cancel your Order. We will endeavour to inform you in advance in the event we are unable to deliver your Order due to these limits.
<br>

4.7 We will deliver strictly based on the items quantities indicated in your checked-out cart. Any variation of the quantities mentioned via any other form of communication (including but not limited to message to shopper and/or driver notes or live chat) will be disregarded.
<br>
</dd>
<br><hr><br>
<dt id="pp" style="font-size:2em; margin-bottom: 0.5em"><li>Prices and Payment</li></dt>
<dd style="font-size:1.3em; line-height: 1.6; text-align:justify"><b>Guide Price</b>
<br>
5.1 All prices set by trEAT or Participating Retailer listed on the Website  are guide prices only and are only approximate. We reserve the right to change these prices at any time. Prices are inclusive of the relevant taxes imposed by the Malaysian government (if applicable), delivery charges and our Service Fees. We also reserve the right to alter the Goods or Services available for sale on the Website, terminate any Participating Retailers, and/or discontinue any Goods or Services at any time.
<br>
<br>
<b>Total Bill</b>
<br>
5.2 The Total Bill for Delivery, Goods or Services ordered, including delivery charges and other taxes and shopper charges, will be displayed on the Website when you complete your Order at your check out cart. We shall not supply the Goods to you until we have accepted your Order. Acceptance of your Order by trEAT shall take place when you received our confirmation of order stating that we are accepting your Order.
<br><br>

<b>Mode of Payment</b>
<br>
5.3 Full payment must be made for all Goods dispatched and Services provided. Payment can be made by: (i) online payment via credit or debit card; or (ii) cash-on-delivery.
<br><br>
<b>Price Difference</b><br>
5.4 Your Total Bill may be varied from the guide price initially displayed on the Website when you placed your Order. This difference of price can be due to one or more of the following reasons:<br>
<ul style=list-style-type:disc;>
<li>Weighed goods &ndash; We cannot guarantee that you will get the exact weight as displayed on the Website when you ordered for your items. You will be paying for the item based on the weight determined upon completion of your order&rsquo;s shopping and dispatching. </li>
<li>Replacements &ndash; When the original item you ordered is unavailable at the Premises, we may instead deliver you a replacement item that you can choose to accept or decline. If you accept the replacement item, you will be charged on its full price instead of the price of your original item. </li>
<li>Changing in-store prices &ndash; The prices at the Participating Retailer&rsquo;s Premise may vary on a daily basis and the final price charged to you is subject to our discretion. Unless otherwise communicated, the price of the item you will be paying will be the price as stated on the Website/ App on the day you ordered. This price is stated in your Order confirmation email. Should price changes be required, we will endeavour to communicate this with you before the completion of your Order. </li>
<li>Technical errors &ndash; Should pricing discrepancies due to technical errors occur, we reserve the right to amend your Order and/or your Total Bill. We will endeavour to communicate with you regarding such price changes before the completion of your Order. </li>
</ul>
5.5 If you are dissatisfied with the pricing differences of your items that resulted from the reasons stated in 5.4, you are entitled to reject the items upon delivery. You will not be charged for any item that you did not accept.
<br><br>

<b>Payment by credit / debit cards</b><br>

5.6 If you choose online payment, you must provide your payment details before your Order is delivered. To ensure that shopping online is secure, your debit/credit card details will be encrypted to prevent the possibility of someone being able to read them as they are sent over the Internet. Your credit card issuer may also conduct security checks to confirm it is you placing the Order.
<br>

5.7 You agree that for credit card or debit card payments and / or the adding of new cards on your trEAT profile, we will authorize a small sum for card verification purposes. You will not be charged for this amount.
<br>

5.8 You agree that by saving your card details on any of our platforms you are allowing us to make recurring charges to your card. These charges are made without you needing to insert security one time pins (OTP).
<br>
5.9 If you choose to pay by credit card, we will first pre-authorize the amount billed during Checkout. Please note that you are not being charged during this authorization. It simply means that we are sending a request to the issuing bank of your credit card to verify that the credit card is valid and has sufficient funds to cover your Total Bill. Some banks may send a notification regarding this pre-authorization. Upon delivery, if your:
<ul>
<li>Total Bill amount is higher than the amount pre-authorized during Checkout, your credit card will be charged a second time via recurring charges for the balance between your Checkout amount and final Total Bill. Some banks may send a notification regarding a second charge. If your credit card transaction is declined for this second charge, we will request for the additional amount in the form of cash on delivery; and</li>
<li>final Total Bill is lower than the amount pre-authorized during Checkout, your credit card will be charged for the new Total Bill and the balance will return to your card in accordance with your bank&rsquo;s standard practices; and </li>
<li>Total Bill amount is the same as the amount during Checkout, the amount pre-authorized during Checkout will be charged to your credit card. Your bank will update the final charge on your statement accordingly after delivery.</li>
</ul>
5.10 If you choose to pay by debit card, your card will be charged at Checkout. Upon delivery, if your:
<ul style="list-style-type:disc">
<li>Total Bill amount is higher than the amount charged during Checkout, your debit card will be charged a second time via recurring charges for the balance between your Checkout amount and final Total Bill. Some banks may send a notification regarding a second charge. If your debit card transaction is declined for this second charge, we will request for the additional amount in the form of cash on delivery; and</li>
<li>final Total Bill amount is lower than the amount paid during Checkout, the balance will be refunded in accordance with your bank&rsquo;s standard practices; and</li>
<li>Total Bill amount is the same as the amount during Checkout, no additional charges or refunds will be processed. Your bank will update the final charge on your statement accordingly after delivery.</li>
<ul>
5.11 In the event of failed credit or debit card payment, our Total Bill must be made via cash on delivery. Failure to pay with cash on delivery will result in the cancellation of your Order and your items will be returned to the store.
<br>
<br>
<b>Electronic Receipt</b>
<br>
5.12 We do not provide physical receipts for your Order. A digital order confirmation and payment receipt (after payment made) will be emailed to you upon completion of your Order. If you require an official tax invoice, you may reach out to our customer service department.
<br>
<br>
<b>Promotion or discount</b>
<br>
5.13 All discounts and promotions apply to the net total amount (adjusted for Out of Stock Items) but not the gross total. For example: If there is a promotion running for 10% OFF with a minimum purchase price of RM150, Out of stock Items are RM20 then your net total amount would be RM130. Therefore, the promotion of 10% OFF will apply to RM130 and not RM150.
<br>

5.14 By using our services, you agree to be bound by all our promotion terms and conditions that may be published on our Website, App and any other social media platforms and/or various websites and landing pages.
<br>

5.15 Offers are subject to our absolute discretion and may be withdrawn at any time and without notice.
<br>

5.16 The vouchers and/or promo code given are only applicable for current delivery. The vouchers and/or promo code will not be applicable if you choose to cancel it for current delivery. We reserve the right to withdraw or cancel any promo code for any reason at any time. We will not be held liable for any loss arising from the refusal, withdrawal, cancellation or inability to use our promo code.
<br>

5.17 In the event we have a reasonable belief that there exists an abuse of vouchers and/or promo codes or in suspected instances of fraud, trEAT may cause the shopper (or Customer) to be blocked immediately and reserves the right to refuse future service. Additionally, should there exist an abuse of vouchers or discount codes, we reserve the right to seek compensation from any and all violators.
<br>
</dd>
<br><hr><br>
<dt id="del" style="font-size:2em; margin-bottom: 0.5em"><li>Delivery</li></dt>
<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">Delivery Area

6.1 Delivery periods quoted at the time of ordering are approximate only and may vary. Goods will be sent only to the address provided by you in the &quot;Delivery Address&quot; section before completion of your payment in the checkout cart. Addresses added in either Shopper or Driver Notes or live chat will be considered as invalid and will not be eligible for any deliveries. Customers are not allowed to change delivery address after the Order is confirmed. Please note that delivery address inaccuracies and/or discrepancies may result in order cancellation. trEAT delivery service is available in selected areas with specific stores available in the area. You are advised to check the Website on the designated delivery area prior to your placement of any Order. We shall reserve our rights to inform you earlier and to cancel your Order if we are unable to deliver to your location.
<br>
<br>
<b>Delivery Time</b>
<br>
6.2 The delivery periods selectable are 1-hour or 2-hour timeframes. There is a limited slots available in each delivery period. We shall not guarantee that you will be able to choose the delivery period you desire. Such inaccessibility of delivery periods will be indicated by the Website. The Delivery period shall be agreed upon your placement of Order. The Delivery time is based on the Opening Hours of the Premises by the Participating Retailers.
<br>

6.3 trEAT may employ Independent Contractor to ensure delivery of Goods and Services in the timeframe selected in the Website. We will take great care to ensure that delivery is done in the timeframe selected in the Website. Delivery may not be available during rain or severe weather condition. Neither trEAT, the Independent Contractor nor the Participating Retailer shall be held liable for any losses, liabilities, costs, damages charges or expenses arising out of any delay, postponed or cancelled delivery. If the Goods are not delivered within the selected timeframe (except weather condition), or for any other inquiry regarding delivery, please contact our customer service department, as indicated by the Website.
<br>

<br>
<b>Risk of Goods</b>
<br>
6.5 All risk in the Goods shall pass to you upon acceptance of delivery of the Goods.
<br>
<br>
<b>Failed Delivery</b>
<br>
6.6 Our riders will only wait for ten (10) minutes once they arrive at your selected delivery address. If you are unable to collect your Goods and/or refuse/delay/fail to respond to our communications regarding Goods collection within this time-frame, the Order will be classified as a  &quot;failed delivery&quot; and the rider will return to the Premises with all the items. Service fee and delivery charges are still applicable and chargeable.
<br>

6.7 (i) If you fail to accept delivery of the Procuts delivered to you, during the time of delivery; or (ii) if we are unable to deliver at the selected delivery period due to your failure to provide sufficient and/ropriate instructions, then such Goods shall be deemed delivered to you and all risk and responsibility in relation to such Goods shall pass to you. Any storage, insurance and any other cost or expense that we incur as a result of the inability to deliver shall be your responsibility and you shall indemnify us in full for such cost.
In such cases, we always reserve the right to cancel your Order and/or have your items sent back to the store.
<br>

6.8 At the time of Delivery of Goods, you must ensure adequate arrangements, including access where necessary, are in place for the safe delivery of such Goods.
<br>

6.9 We or our rider shall not be held liable for any loss, damage, cost or expense incurred to such Goods or premises:
<br>
<ul>
<li>your failure to provide adequate access or arrangements for delivery;</li>
<li>at your request to complete the delivery procedure due to your absence whereby leaving the Goods at your doorsteps, lobby, guardhouse or designated recipient;</li>
<li>your request to deliver the Goods to the Delivery Address.</li>
</ul>

6.10 Your Goods will be delivered to the delivery address you provided in the checkout cart of our Website. We always reserve the rights to deliver your Order only to the main entrance of your delivery address (such as the lobby of your apartment or condominium).
<br>

6.11 With your express consent, you may request our rider to deliver your Goods to the particular floor of your delivery address or into your kitchen or living space at your own risk.
<br>
<br>
<b>Recipient</b>
<br>
6.12 Upon delivery of the Goods, if our rider has doubt over the age of the recipient of the Goods, he is entitled to request the recipient to produce identity card to prove his age. If the recipient is found to be below eighteen (18) years old or twenty one (21) years old (for age-restricted item) or failed to produce identity card, our rider shall not hand over the Goods to the recipient and to return the Goods to trEAT.
<br>
6.13 If you have chosen to pay by cash on delivery and our rider does not provide sufficient change upon finalization of your Order or if there are discrepancies in your Total Bill (i.e. you paid for an item that you did not receive), you may report the incident to us by reaching out to our customer service department. We will review your claim and at our sole discretion may choose to provide you with a voucher code worth the total sum owed to you. We will not send the rider or any other representative to your delivery address to provide you with cash.
<br>
</dd>
<br><hr><br>
<dt id="cancel" style="font-size:2em; margin-bottom: 0.5em"><li>Cancellation</li></dt>

<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">7.1 We may cancel your Order if your product(s) is not available for any reason. You are entitled for refund at the price which you have paid during checkout cart via online payment, subject to the period of time your bank required to arrange such refund.
<br>
7.2 Once our shopper has started picking the items of your Order, for technical reasons, you cannot cancel the Order.
<br>
</dd>
<br><hr><br>

<dt id="re" style="font-size:2em; margin-bottom: 0.5em"><li>Return And Refund policy</li></dt>
<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">
<b>Inspection of Goods Upon Delivery</b>
<br>
8.1 You are advised to check, inspect and examine your items upon delivery. Our rider will assist you in this process. You are entitled to reject items that you deem unacceptable by giving reason to our rider. trEAT reserve the rights to approve or disapprove your request and our decision is final. The total price of all such rejected items will be deducted from your Total Bill upon approval from trEAT management, net of discount.
<br>

8.2 We allow you to reject the following category of Goods within the specific time:
<br>
<ul>
<li>Perishable Goods and Semi Perishable Goods (example fish, vegetables, dairy goods, fruits, bread, onion, potato, pies, cake etc.) &ndash; at the time of delivery</li>

<li>Non Perishable Goods (example canned goods, dry goods, toilet paper, detergent, household goods etc) &ndash; at the time of delivery OR within three (3) days from the delivery date of the Goods.</li> </ul>


8.3 If you are dissatisfied with the items delivered or are unable to receive the items you ordered, we will not proceed with a redelivery of your desired items or aid you in exchanging your items free of charge. In such cases, you may proceed with making a separate order that includes your desired items.
<br>
<br>
<b>Rejection of Goods After Delivery</b>
<br>
8.4 In the unlikely event that after completion of delivery, you find goods that are deemed unacceptable by you, you have the right to submit an item rejection complaint, providing reasons why the product(s) are not acceptable to our customer service within three (3) days from the date of Delivery. Any request for refund made after three (3) days shall be invalid and shall not be processed by trEAT. If your refund request is approved, we shall notify you on the date and time that our rider will collect the rejected items from you without any charges. The refund will only be processed after the rejected items have successfully been collected by trEAT.
<br>

8.5 We reserve the rights to request from you proof of damaged, substandard or missing Goods (photograph). Refunds will be made at our sole discretion and will only be processed upon our review and successful verification of proof and/or collection of the item(s) from you by our rider. We will provide status update on the refund to you via email as soon as practical.
<br>
<br>
<b>Refund of money paid on the Unaccepted Item</b>
<br>
8.6 We shall review your claim at our sole discretion. After being approved by our management, such refund shall be made in accordance to the following payment method upon placement and/or completion of your Order:
<br>
<ul>
<li>Payment via credit card or debit card</li>

We will notify you via email on the approval of refund and you are advised to check with your issuer bank on the status of refund (each issuer bank will have different time period to reflect the refund sum in the bank account/ statement).
<br>

<li>Cash on Delivery</li>

We will send you a voucher/promo code via email within five (5) working days from the date of approval of refund. This voucher/promo code will entitle you to a discount on your next order equivalent to the refund amount.
</ul>

8.7 If for any other reason you are not satisfied with the service we provide, you can rate the service through the Website.
<br>

8.8 All refunds for orders will be processed net of discount. For example, if you used a 10% discount voucher for your order and would like to reject an item which has an original price of RM5, your final refund amount for the item will be RM4.50.
<br>
</dd>
<br><hr><br>

<dt id="data" style="font-size:2em; margin-bottom: 0.5em"><li>Personal Data</li></dt>
<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">
9.1 Where we have requested information (such as your name, telephone number, address, email address and other information as required) from you for registration of account, payment of your Order and to ensure Delivery of Goods and Services, you agree to provide accurate and complete information.
<br>

9.2 You authorize us to collect, use, store or otherwise process your personal information for the purpose stated in Clause 9.1, verifying your credit or debit card, investigate complaints and suspected suspicious transaction, and improve service usage and for marketing and credit control purposes (the Purpose). The Purpose may include the disclosure of your personal information to receive offers and promotions from us or selected third parties or our affiliates from time to time where we believe that the services offered by us or such third parties may be of interest to you or where this is required by law or in order to provide the Delivery of Goods or Service to you. More information can be found in our Privacy Policy.
</dd>
<br><hr><br>

<dt id="linked" style="font-size:2em; margin-bottom: 0.5em"><li>Linked Sites</li></dt>
<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">
There may be a number of links on our Website to third party Websites which we believe may be of interest to you. We do not represent the quality of the Goods or Services provided by such third parties nor do we have any control over the content or availability of such sites. We shall not be liable for any responsibility for the content of third party Websites or the Services or Goods that they may provide to you.
</dd>
<br><hr><br>

<dt id="com" style="font-size:2em; margin-bottom: 0.5em"><li>Complaints</li></dt>
<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">
We take our customers&rsquo; complaints very seriously and aim at responding to your complaints as soon as possible. All complaints should be addressed to mysupport@trEAT.com.
</dd>
<br>
<br><hr><br>


<dt id="limit" style="font-size:2em; margin-bottom: 0.5em"><li>Limitation of Liability</li></dt>
<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">
<b>Website</b>
<br>

12.1 We endeavour to ensure that the information on this Website is correct and error-free at all times. Despite our best efforts, we do not warrant that the Website will always be error-free and that the use of Website will be fit for purpose, timely and that defects will be corrected, and that the site or the server that makes it available are free of viruses or bugs or represents the full functionality, accuracy, reliability of the Website and we do not make any warranty whatsoever, whether express or implied, relating to fitness for purpose, or accuracy.
<br>
12.2 We do not accept any liability for any delays, failures, errors or omissions or loss of transmitted information, viruses or other contamination or destructive properties transmitted to you or your computer system via our Website .
<br>

12.3 We have taken all reasonable steps to prevent Internet fraud and ensure any data collected from you is stored as securely and safely as possible. However, we cannot be held liable in the extremely unlikely event of a breach in our secure computer servers or those of third parties.
<br>
<br>

<b>Goods</b>
<br>

12.4 By accepting these Terms and Conditions, you agree to relieve us from any liability whatsoever arising from your use of information from any third party, or your use of any third party website, or your consumption of any Goods from Participating Retailers.
<br>

12.5 We disclaim any and all liability to you for the supply of the Delivery, Goods and Services to the fullest extent permissible under applicable law. This does not affect your statutory rights as a consumer. If we are found liable for any loss or damage to you such liability is limited to the amount you have paid for the relevant Goods or Services.
<br>

12.6 The goods sold by the Participating Retailers are meant for private domestic and consumer use only. We shall not be liable for any indirect and consequential loss, damage or expense, including any direct or indirect loss such as loss of profits or income to you or third party, damage to the property, howsoever arising out of the use of the Website or any Goods and Services purchased from us. This limitation of liability does not apply to personal injury or death arising as a direct result of our negligence.
<br>
<br>

<b>Force Majeure</b>
<br>

12.7 We shall not be held liable for any failure or delay in performing Services or delivering Goods where such failure arises as a result of any act or omission, which is beyond our control such as all overwhelming and unpreventable events caused directly and exclusively by forces of nature that can be neither anticipated, nor controlled, nor prevented by the exercise of prudence, diligence, and care, including but not limited to: war, riot, fire, thunderstorm, lightning flood, earthquake, typhoon, strike, or other natural disaster, impossibility of the use of railways, motor transport or public or private transport, impossibility of the use of public or private telecommunications network, civil commotion; compliance with any law or governmental order, rule, regulation or direction and acts of third parties (collectively Event of Force Majeure).
<br>

12.8 If we have contracted to provide identical or similar orders to more than one Customer and are prevented from fully meeting our obligations to you by reason of an Event of Force Majeure, we may decide at our absolute discretion which orders we will fill and to what extent.
<br>
<br>

<b>No Warranties</b>
<br>

12.9 trEAT excludes all implied warranties, terms and conditions to the extent that is legally permitted. We shall not be liable for any loss of money, goodwill, reputation , indirect or consequential loss arising out of your use of our Website  and our Services.
<br>

12.10 All Goods description, services and material posted on the Website or from a linked site is provided to you as is without warranty or conditions of any kind, express or implied or otherwise howsoever arising. trEAT assumes no responsibility for any error, inaccuracies or omissions whatsoever in the information on the Website/ App and under no circumstances will the Company be liable for any loss or damage by your reliance on the information obtained through the Website/App. It shall be your own responsibility to evaluate the accuracy, completeness and usefulness of any information and the use of the Website is solely at your own risk.
<br>
12.11 Goods image as seen on the Website  may slightly differ from the actual Goods that you receive. trEAT shall not be liable to you for any loss, damage, injury or expense, howsoever arising, out of or in connection with the use of the Goods.
<br><br>

<b>Indemnity</b>
<br>
12.12 You shall indemnify trEAT, its directors, officers, employees, agents and affiliates, Participating Retailers, from any and all third party claims, liability, damages and/or cost (including but not limited to legal fees) arising from your use of this Website or breach of this Terms and Conditions and/or Agreement.
<br>
<br>

<b>Assignment</b>
<br>
13.1 We may subcontract any part or parts of the Services or Goods that we provide to you from time to time and we may assign or change any part or parts of our rights under these Terms and Conditions without your consent or any requirement to notify you.
<br>
<br>

<b>Alteration of Terms</b>
<br>
13.2 We may alter or vary the Terms and Conditions at any time without notice to you.
<br>
<br>

<b>Restriction to User</b>
<br>

13.3 You are not allowed to use or launch any automated system or program in connection with our Website or its online ordering functionality.
<br>

13.4 You may not collect or harvest any personally identifiable information from the Website , use communication systems provided by the Website for any commercial solicitation purposes, solicit for any reason whatsoever any users of the Website with respect to their submissions to the Website , or publish or distribute any vouchers or codes in connection with the website, or scrape or hack the Website .
<br><br>

<b>Entire Agreement</b>
<br>
13.5 The Terms and Conditions together with the Privacy Policy, any order form and payment instructions constitute the entire agreement between you and us. No other terms whether expressed or implied shall form part of this Agreement. In the event of any conflict between these Terms and Conditions and any other term or provision on the Website , these Terms and Conditions shall prevail.
<br>
<br>

<b>Severability</b>
<br>

13.6 If any term or condition of our Agreement shall be deemed invalid, illegal or unenforceable, the parties hereby agree that such term or condition shall be deemed to be deleted and the remainder of the Agreement shall continue in force without such term or condition.
<br>
<br>

<b>Governing Law</b>
<br>

13.7 These Terms and Conditions and our Agreement shall be governed by and construed in accordance with the laws of Malaysia. The parties hereto submit to the exclusive jurisdiction of the courts of Malaysia.
<br>

<b>Waiver</b>

13.8 No delay or failure on our part to enforce our rights or remedies under the Agreement shall constitute a waiver on our part of such rights or remedies unless such waiver is confirmed in writing.
<br><br>

<b>Unreasonable Behaviour</b>
<br>
13.9 We strive to ensure that all our employees, partners, business affiliates, Independent Contractor and/or Participating Retailers (Team) are treated with dignity and respect. If we have reasonable belief that you are involved in behaviours or actions towards our Team that we deem unacceptable (including but not limited to rude, abusive or aggressive manners of communication and threats to their physical state, property or reputation), we reserve the right to immediately cancel all of your current and future orders, terminate all communication with you and prohibit you from our services.
<br>

13.10 If we receive from you continuous and/or multiple requests that we deem unreasonable (i.e. requests for extension of promotion periods or demands for refunds without provision of proof), we reserve the right to terminate your trEAT account and deny you access to our services.
<br>
</dd>
</ol>
<br><hr><br>

<dt id="treat" style="font-size:2.5em; margin-bottom: 0.5em">trEAT Corporate Terms</dt>
<dd style="font-size:1.3em; line-height: 1.6; text-align:justify">
By using the website under a registered trEAT email/ account, you are deemed to have accepted the Terms and Conditions of this Agreement.
<br>
Before placing any Order and/or using any of our services listed on the Site, all trEAT Corporate Customers are to complete a form to apply for a trEAT Corporate account. In the event of a successful application, a trEAT representative will be in contact.</dd>
<br><hr><br>
<ol>


<dt style="font-size:2em; margin-bottom: 0.5em"><li>Key Terms</li></dt>
<dd style="font-size:1.2em; line-height: 1.6; text-align:justify">
1.1. Definitions
App refers to the installable mobile application of trEAT;
Delivery refers to goods and any form of delivery service, which are provided by the Company;<br>
trEAT Corporate Customer refers to customer whom has the authority from the company to register an account with trEAT to purchase items for commercial usage and/or to engage services offered on the Site; <br>
Participating Retailer refers to a third party, which is cooperating with trEAT to supply the goods and services; <br>
Service Fee refers to the delivery charges and shopper fees that you will be charged upon placing an Order with trEAT; <br>
Total Bill refers to the total price for Delivery, Goods or Services ordered, including any other charges or taxes including but not limited to Sale and Services Tax (SST), government duties and other levies imposed at any time by the government that shall be charged to you upon completion of your Delivery. <br>

1.2. Services
trEAT shall provide the following services (Services) to the trEAT Corporate Customer in accordance with the terms and conditions of this Agreement:To deliver groceries ordered through the Site  at the date and time slot selected by the trEAT Corporate Customer.
<br>
1.3. trEAT Absolute Rights
trEAT reserves the right as it deemed necessary: <br>
To request the trEAT Corporate Customer to sign an agreement prior to purchasing from the Site ; <br>
To limit the quantity of product to be purchased; <br>
To determine discounts at its absolute discretion; <br>
to cancel and/ or modify the order if the quantity limit is exceeded; <br>
To terminate your access to our Services; <br>
To suspend your trEAT Corporate account and/or payment accounts indefinitely; and
To cease all further communication with you. <br>

1.4. Price<br>
As consideration for the provision of the Services by trEAT, the Price for the provision of the Services shall comprise of: <br>
The service fee which may be subjected to changes from time to time by trEAT without prior notice; <br>
The price of all groceries selected, received and accepted by the trEAT Corporate Customer, as displayed on trEAT Website  at checkout cart for every order to be placed by them;
Your Total Bill may be varied from the guide price initially displayed on the Website  when you placed your Order. This difference of price can be due to one or more of the following reasons: <br>
<ul>
<li>Weighed goods &ndash; We cannot guarantee that you will get the exact weight as displayed on the Website/ App when you ordered for your items. You will be paying for the item based on the weight determined upon completion of your order’s shopping and dispatching. </li>
<li>Replacements &ndash; When the original item you ordered is unavailable at the Premises, we may instead deliver you a replacement item that you can choose to accept or decline. If you accept the replacement item, you will be charged on its full price instead of the price of your original item.</li>
<li>Changing in-store prices &ndash; Unless otherwise stated, the prices at the Participating Retailer’s Premise may vary on a daily basis and the price of the item you will be paying will be the price as stated on the Website/ App on the day you ordered. This price is stated in your Order confirmation email.</li>
<li>Technical errors &ndash; Should pricing discrepancies due to technical errors occur, we reserve the right to amend your Order and/or your Total Bill. We will endeavour to communicate with you regarding such price changes before the completion of your Order.</li>
<li>Promotional Prices &ndash; If a promotional item is purchased above the allowed quantity, trEAT reserves the right to cancel/modify the order. Should you accept the additional quantities, normal store price will be charged.</li>
</ul>
trEAT reserves its right to request the trEAT Corporate Customer to pay for their outstanding bills in the event that the trEAT Corporate Customer owes for a sum of RM5,000-00 and above. trEAT shall not allow the trEAT Corporate Customer to place any subsequent orders unless the outstanding amount/ invoice amount has been settled in full.
</dd>
<br><hr><br>
<dt  style="font-size:2em; margin-bottom: 0.5em"><li>General Terms</li></dt>
<dd style="font-size:1.2em; line-height: 1.6; text-align:justify">
2.1. Intellectual Property<br>
The trEAT Corporate Customer hereby agrees and consents trEAT to use the publicly available information on its company website or any marketing collaterals approved by them. The trEAT Corporate Customer also agrees and consents to the use of such information for trEAT promotional purposes including but not limited to the release of such public information to third party service providers and services associated with trEAT
<br>
2.2. Registered Emails<br>
All emails registered under our trEAT Corporate account shall be deemed to have full authority from trEAT Corporate Customer to place orders from us. trEAT Corporate Customer shall be responsible to make payment for all orders placed via the account registered with us. Any changes of the emails shall be updated immediately by written notice to trEAT. <br>

2.3. Warranty<br>
A. trEAT represents and warrants that:
<ul>
<li>It will perform the Services with reasonable care and skill in accordance with industry practicing in the same locality under the same or similar circumstances; and</li>
<li>All Goods description, services and material posted on the Website or from a linked site is provided as is without warranty or conditions of any kind, express or implied or otherwise howsoever arising. trEAT assumes no responsibility for any error, inaccuracies or omissions whatsoever in the information on the Website and under no circumstances will the Company be liable for any loss or damage by your reliance on the information obtained through the Website. It shall be your own responsibility to evaluate the accuracy, completeness and usefulness of any information and the use of the Site  is solely at your own risk. Goods image as seen on the Website may slightly differ from the actual Goods that you receive. trEAT shall not be liable to you for any loss, damage, injury or expense, howsoever arising, out of or in connection with the use of the Goods.</li>
</ul>

B. The Corporate Customer represents and warrants that:
<ul>
<li>the username and/or email registered with trEAT has the full authority from its company to place order and to perform the terms and conditions of this Agreement; and</li>
<li>the Corporate Customer and/or its company will pay the invoice promptly to trEAT for the services provided. </li></ul>

2.4. Limitation of liability<br>
Subject to the trEAT Corporate Customer&rsquo;s obligation to pay the Price to trEAT, either party&rsquo;s liability in contract, tort or otherwise (including negligence) arising directly out of or in connection with this Agreement or the limited in aggregate to the Price. <br>
To the extent it is lawful to exclude the following heads of loss and subject to the trEAT Corporate Customer&rsquo;s obligation to pay the Price, in no event shall either party be liable for any loss of profits, goodwill, loss of business, loss of data or any other indirect or consequential loss or damage whatsoever. <br>
Nothing in this clause 2.4 will serve to limit or exclude either Party&rsquo;s liability for death or personal injury arising from its own negligence. <br>
The trEAT Corporate Customer shall indemnify and hold trEAT and its directors, officers, employees, agents and affiliates, from and against any and allliabilities, damages and claims, lawsuits and expenses (including all solicitors&rsquo; fees and expenses) arising out of your breach of this Terms and Conditions and/or Agreement. <br>
trEAT will not be held liable for any losses arising out of unavailable items, late deliveries and/or failed deliveries. <br>

2.5. Relationship of the Parties<br>
The Parties acknowledge and agree that the Services performed by trEAT, its employees, agents or sub-contractor shall be as an independent contractor and that nothing in the Agreement shall be deemed to constitute a partnership, joint venture, agency relationship or otherwise between the parties. <br>

2.6. Confidentiality<br>
Neither Party will use, copy, adapt, alter or part with possession of any information of the other which is disclosed or otherwise comes into its possession under or in relation to this Agreement and which is of a confidential nature. This obligation will not apply to information which the recipient can prove was in its possession at the date it was received or obtained or which the recipient obtains from some other person with good legal title to it or which is in or comes into the public domain otherwise than through the default or negligence of the recipient or which is independently developed by or for the recipient.
<br>
2.7. Personal Data<br>
Where we have requested information (such as your name, telephone number, address, email address and other information as required) from you for registration of trEAT Corporate account, payment of your Order and to ensure Delivery of Goods and Services, you agree to provide accurate and complete information (Purpose).
You have irrevocably authorized and given your consent for us to collect, use, store or process your personal information, verifying your credit or debit card, investigate complaints and suspected suspicious transaction, and improve service usage and for marketing and credit control purposes (the Purpose). The Purpose may include the disclosure of your personal information to receive offers and promotions from us or selected third parties or our affiliates from time to time where we believe that the services offered by us or such third parties may be of interest to you or where this is required by law or in order to provide the Delivery of Goods or Service to you. <br>

2.8. Notices<br>
Any notice which may be given by a Party under this Agreement shall be deemed to have been duly delivered if delivered by hand, ordinary post, facsimile transmission or electronic mail to the address of the other Party as specified in this Agreement or any other address notified in writing to the other Party. Subject to any applicable local law provisions to the contrary, any such communication shall be deemed to have been made to the other Party, if delivered by: <br>
<ul>
<li>Ordinary post, five (5) days from the date of posting; </li>
<li>Hand or by facsimile transmission, on the date such delivery or transmission; and </li>
<li>Electronic mail, when the Party sending such communication receives confirmation if such delivery by electronic mail.</li> </ul>

2.9. Miscellaneous<br>
<ul>
<li>The failure of either party to enforce its rights under this Agreement at any time for any period shall not be construed as a waiver of such rights. </li>
<li>If any part, term or provision of this Agreement is held to be illegal or unenforceable neither the validity nor enforceability of the remainder of this Agreement shall be affected. </li>
<li>Neither Party shall assign or transfer all or any part of its trEAT Corporate account to be used by another person and/or business without prior consent from TrEAT. </li>
<li>This Agreement constitutes the entire understanding between the Parties relating to the subject matter hereof unless any representation or warranty made about this Agreement was made fraudulently and, save as may be expressly referred to or referenced herein, supersedes all prior representations, writings, negotiations or understandings with respect hereto. </li>
<li>This Agreement (and any dispute, controversy, proceedings or claim of whatever nature arising out of or in any way relating to them or their formation) shall be governed by and interpreted in accordance with Malaysian Law. The Parties irrevocably agree that the courts of Malaysia shall have exclusive jurisdiction hereto.</li>
<li>For avoidance of doubt, in any event any terms not explicitly stated in this trEAT Corporate Terms, trEAT Corporate Customer is bound by trEAT standard Terms and Conditions listed on the Site. </li>
<li>trEAT or the Company shall reserve all its rights to amend or vary the terms contained herein at any time it deemed necessary without prior notice to TrEAT Corporate Customer. trEAT Corporate Customer is responsible to the updated terms herein and you are deemed to accept all the terms stated herein by using the Site. The amended terms and conditions shall become effective immediately upon posting of the same on our website. Once the amended terms and conditions have been posted on our website, the Corporate Customer will be deemed to have notice of the same and have accepted the amended terms and conditions. All interpretations of these trEAT Corporate terms and conditions by trEAT Malaysia/ Icart Malaysia Sdn Bhd shall be final and binding on the trEAT Corporate Customer. </li>
</ul>
</dd>
</ol>
</dl>
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
