<?php

$servername1="127.0.0.1";
$username1="root";
$password1=null;
$dbname="treatDB";

$handler=mysqli_connect($servername1,$username1,$password1,$dbname);
if(!$handler){
  die("Connection failed! : " .mysqli_connect_error() );
}else{
  echo "Connected successfully";
}
$query="CREATE TABLE treatDB.userInfo(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(60) NOT NULL,
  email VARCHAR(100),
  pw VARCHAR(20),
  add1 VARCHAR(30),
  add2 VARCHAR(30),
  postcode VARCHAR(5),
  state VARCHAR(15))";
if(mysqli_query($handler,$query)){
  echo"Table successfully created";
}else {
  echo "Table NOT created" ;
}

?>
