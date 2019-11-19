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

$query="CREATE TABLE userInfo(
  if INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(60) NOT NULL,
  dob DATE,
  gender VARCHAR(6),
  email VARCHAR(40),
  phone VARCHAR(12),
  add1 VARCHAR(30),
  add2 VARCHAR(30),
  postcode VARCHAR(5),
  state VARCHAR(15),
  country VARCHAR(25))"

  mysqli_query($handler,$query);

  $servername1="127.0.0.1";
  $username1="root";
  $password1=null;
  $dbname="treatDB";

  $handler=mysqli_connect($servername1,$username1,$password1,$dbname);
?>
