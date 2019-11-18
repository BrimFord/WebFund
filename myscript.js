
            function validateForm(){

            var name = document.forms["accountForm"]["user_name"].value;
            var email = document.forms["accountForm"]["email"].value;
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

        }

            function NoPopUp (){
            var modal = document.getElementById('PopUpForm');
            if (event.target == modal) {
                modal.style.display = "none";
            }
            }

            function showPassword() {
            var password = document.getElementById("password");
            if (password.type === "password") {
                password.type = "text";
            } else {
                password.type = "password";
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

            function keyPress (e) {
            if(e.key === "Escape") {
            document.getElementById("PopUpForm").style.display='block'            }
            }
