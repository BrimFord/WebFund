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

    $username=$_POST['user_name'];
    $email=$_POST['emailReg'];
    $password=$_POST['passwordReg'];
    $add1=$_POST['address1'];
    $add2=$_POST['address2'];
    $postcode=$_POST['postcode'];
    $state=$_POST['state'];

    $query="INSERT INTO userInfo (username,email,pw,add1,add2,postcode,state) VALUES ('$username','$email','$password','$add1','$add2','$postcode','$state')";
    echo $query;
    if(mysqli_query($handler,$query)){
      echo "Data Inserted";
      header("location:../index.php");
    }else{
      echo mysqli_query($handler,$query);
      echo "WHY can INSERT?!?!?";
    }
  }



?>
