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
$query="CREATE TABLE treatDB.subscribe(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(60)
  )";
if(mysqli_query($handler,$query)){
  echo"Table successfully created";
}else {
  echo "Table NOT created" ;
}

?>
