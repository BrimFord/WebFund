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

  $email=$_POST['emailSubscribe'];


  $query="INSERT INTO treatDB.subscribe (email) VALUES ('$email')";

  mysqli_query($handler,$query);

?>

<script>
  window.history.back();
</script>
