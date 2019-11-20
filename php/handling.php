<?php
  session_start();
  $servername1="127.0.0.1";
  $username1="root";
  $password1=null;
  $dbname="treatDB";

  $username=$_POST['user_name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $add1=$_POST['address1'];
  $add2=$_POST['address2'];
  $postcode=$_POST['postcode'];
  $state=$_POST['state'];
  $query_main="SELECT * FROM userInfo";

  $handler=mysqli_connect($servername1,$username1,$password1,$dbname);

  if(!$handler){
    die("Connection failed" . mysqli_connect_error());
  }else{

  $result=mysqli_query($handler,$query_main);
  $current_row_result=mysqli_fetch_assoc($result);

  if($current_row_result>0){
      do{

          if($current_row_result["username"] == $username){
            echo "<script type='text/JavaScript'>window.alert('Username is taken');window.history.back();</script>";
            echo "check username";
            break;
          }else if ($current_row_result["email"] == $email){
            echo "<script type='text/JavaScript'>window.alert('E-mail is taken');window.history.back();</script>";
            echo "check e-mail";
            break;
          }else if ($current_row_result["pw"] == $password){
            echo "<script type='text/JavaScript'>window.alert('Password has been taken');window.history.back();</script>";
            echo "check password";
            break;
          }else {
            $query="INSERT INTO userInfo (username,email,pw,add1,add2,postcode,state)
            VALUES ('$username','$email','$password','$add1','$add2','$postcode','$state')";
            mysqli_query($handler,$query);
            echo "Registered";
            header("Location:../index.php");
          }
        }while($current_row_result=mysqli_fetch_assoc($result));
    }
  }
?>
