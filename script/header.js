            function validateForm(){

            var name = document.forms["accountForm"]["user_name"].value;
            var email = document.forms["accountForm"]["email"].value;
            var password = document.forms["accountForm"]["passwordReg"].value;
            var address = document.forms["accountForm"]["address1"].value;
            atpos = email.indexOf("@");
            dotpos = email.lastIndexOf(".");


            if (name == "") {
            alert("Name field can't be empty!");
            document.accountForm.user_name.focus();
            return false;
            }

            if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter email in correct format: example@mail.com")
            document.accountForm.email.focus() ;
            return false;
            }

            if (password == "") {
                alert("You don't like security?");
                document.accountForm.password.focus();
                return false;
                }

                
            if (address == "") {
                alert("Name field can't be empty!");
                document.accountForm.address.focus();
                return false;
                }
    

            if( postcode == "" || postcode.length != 5 ) {
            
                alert( "Please provide a postcode in the format #####." );
                document.accountForm.postcode.focus() ;
                return false;
             }


        }

        function validateFormLogin(){

             var email = document.forms["loginForm"]["emailLogin"].value;
             var password = document.forms["loginForm"]["passwordLogin"].value;
            atpos = email.indexOf("@");
            dotpos = email.lastIndexOf(".");

            
            if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter email in correct format: example@mail.com")
            document.accountForm.email.focus() ;
            return false;
            }

            if (password == "") {
                alert("You don't like security?");
                document.accountForm.password.focus();
                return false;
                }

        }

            function NoPopUp (){
            var modal = document.getElementById('PopUpForm');
            if (event.target == modal) {
                modal.style.display = "none";
            }
            }

            function NoPopUpCart (){
                var cart = document.getElementById('PopUpCart');
                if (event.target == cart) {
                    cart.style.display = "none";
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


