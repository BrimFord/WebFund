        function validateForm(){

            var name = document.getElementById("user_name").value;
            var email = document.getElementById("emailReg").value;
            var password = document.getElementById("passwordReg").value;
            var address = document.getElementById("address1").value;
            var postcode = document.getElementById("postcode").value;
            var state = document.getElementById("state").value;


            if (name == "") {
                alert("Name field can't be empty!");
                document.getElementById("user_name").focus();
                return false;
                }

            if (email == "") {
                alert("Please enter email in correct format: example@mail.com");
                document.getElementById("emailReg").focus();
                return false;
                }

            if (password == "") {
                alert("You don't like security?");
                document.getElementById("passwordReg").focus();
                return false;
                }

                
            if (address == "") {
                alert("Address can't be empty!");
                document.getElementById("address1").focus();
                return false;
                }


            if( postcode == "" || postcode.length != 5 ) {
                alert( "Please provide a postcode in the format #####." );
                document.getElementById("postcode").focus();
                return false;
                }


            if (state == "") {
                alert("State can't be empty!");
                document.getElementById("state").focus();
                return false;
                }


             document.getElementById("accountForm").submit();
        }





        function validateFormLogin(){

             var email = document.getElementById("emailLogin").value;
             var password = document.getElementById("passwordLogin").value;

            
            if (email == "") {
                alert("Please enter email in correct format: example@mail.com")
                document.getElementById("emailLogin").focus();
                return false;
                }


            if (password == "") {
                alert("Enter password!");
                document.getElementById("passwordLogin").focus();
                return false;
                }

                document.getElementById("loginForm").submit();

        }





        function NoPopUp (){
            var RegForm = document.getElementById('PopUpForm');
            var LogForm = document.getElementById('PopUpLog');
            
            if (event.target == RegForm) {
                RegForm.style.display = "none";
            }
            if (event.target == LogForm) {
                LogForm.style.display = "none";
            }
        }





        function showPasswordReg() {
            var password = document.getElementById("passwordReg");
            var icon = document.getElementById("psw_icon_reg");

            if (password.type === "password") {
                password.type = "text";
                icon.src = "img/eye.svg";
            } else {
                password.type = "password";
                icon.src = "img/eye_slash.svg";
                }
            }





        function showPasswordLogin() {
            var password = document.getElementById("passwordLogin");
            var icon = document.getElementById("psw_icon_login");

                if (password.type === "password") {
                    password.type = "text";
                    icon.src = "img/eye.svg";
                } else {
                    password.type = "password";
                    icon.src = "img/eye_slash.svg";
                    }
                }





        function signupForm(){
            document.getElementById('accountForm').style.display='block';
            document.getElementById('loginForm').style.display='none';
        }





        function loginForm(){
            document.getElementById('accountForm').style.display='none';
            document.getElementById('loginForm').style.display='block';
        }





        function payment(){
                    if(document.getElementById('method').value == "card") {
                        document.getElementById('card').style.display = 'block';
                    } else if (document.getElementById('method').value == "cod"){
                        document.getElementById('card').style.display = 'none';
                    }
                    
            }





        function close(){
              document.getElementById("PopUpForm").style.display='none';
              document.getElementById("PopUpLog").style.display='none';
          }

          



        function validateSubscribe(){
            var email = document.getElementById("emailSubscribe").value;

            function subscribe(){
                setTimeout(function(){
                    document.getElementById("subscribe").innerHTML = "<h1 style='text-align: center; margin-top: 115px;'> Thanks for Subscribing!</h1><br><p style='text-align: center;'><i>You won't miss out on amazing deals now.</i></p>";
                    document.getElementById("subscribeForm").submit();
                    }, 1000);
            }

            if (email == "") {
                alert("Please enter email in correct format: example@mail.com");
                document.getElementById("emailSubscribe").focus();
                return false;
            }
        
            
            if (subscribeForm.checkSubscribe.checked == false){
                alert ('You must agree to the terms!');
                return false;
            }

            subscribe();
        }





        function validateCheckout(){
            var address = document.getElementById("addressShipping").value;
            var payment = document.getElementById("method").value;
        
            if (payment == "") {
                alert("Choose method of payment!");
                document.getElementById("method").focus();
                return false;
                }


            if (address == "") {
                alert("Address can't be empty!");
                document.getElementById("addressShipping").focus();
                return false;
                }
                validateCard();
        }




        
        function validateCard(){

            function timer(){
                setTimeout(function(){
                  window.location.href = 'index.html';
                  document.getElementById("checkoutForm").submit();
               }, 3000);
              }

            var payment = document.getElementById("method").value;
            var card = document.getElementById("cardNum").value;
            var date = document.getElementById("exp_date").value;
            var cvv = document.getElementById("cvv").value;

            if  (payment == "card") {
                if (card == "") {
                    alert("Enter your Card Number on the front of the card!");
                    document.getElementById("cardNum").focus();
                    return false;
                }
                else if (date == "") {
                    alert("Enter Expiry Date of the card!");
                    document.getElementById("exp_date").focus();
                    return false;
                }

                else if (cvv == "" || cvv.length != 3 ) {
                    alert("Enter the 3-digits on the back of the card!");
                    document.getElementById("cvv").focus();
                    return false;
                }

        } [document.getElementById('PopUpThanks').style.display='block',
            timer()];

        }


