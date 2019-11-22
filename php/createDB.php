<?php

$servername="127.0.0.1";
$username="root";
$password=null;

$handler=mysqli_connect($servername,$username,$password);

if(!$handler){
  die("Connection failed! : " .mysqli_connect_error() );
}else{
  echo "Connected successfully";
}

if(mysqli_query($handler,'CREATE DATABASE treatDB')){
  echo "Database created successfully";
}else{
  echo "Error creating database : " . mysqli_error($handler);
}

$query="CREATE TABLE treatDB.userInfo(
  if INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(60) NOT NULL,
  email VARCHAR(40),
  pw VARCHAR(20),
  add1 VARCHAR(30),
  add2 VARCHAR(30),
  postcode VARCHAR(5),
  state VARCHAR(15))";

  mysqli_query($handler,$query);

?>
