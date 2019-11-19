<?php

  $servername1="127.0.0.1";
  $username1="root";
  $password1=null;
  $dbname="treatDB";

  $handler=mysqli_connect($servername1,$username1,$password1,$dbname);

  if(!$handler){
    die("Connection failed" . mysqli_connect_error());
  }else{
    echo "Connected successfully";
  }

  $username=$_POST['user_name'];
  $email=$_POST['user_email'];
  $password=$_POST['password'];
  $add1=$_POST['address1'];
  $add2=$_POST['address2'];
  $postcode=$_POST['postcode'];
  $state=$_POST['state'];


  $query="INSERT INTO userInfo (fullname,email,pw,add1,add2,postcode,state)
  VALUES ('$username','$email','$password','$add1','$add2','$postcode','$state')";

  mysqli_query($handler,$query);

?>
