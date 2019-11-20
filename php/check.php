<?php
  session_start();
  $servername1="127.0.0.1";
  $username1="root";
  $password1=null;
  $dbname="treatDB";

  $handler=mysqli_connect($servername1,$username1,$password1,$dbname);

  if(!$handler){
    die("Connection failed" . mysqli_connect_error());
  }else{

    if(!isset($_SESSION['emailLogin']) && !isset($_SESSION['passwordLogin'])) {
      $_SESSION['emailLogin']=$_POST['emailLogin'];
      $_SESSION['passwordLogin']=$_POST['passwordLogin'];
      $email=$_SESSION['emailLogin'];
      $password=$_SESSION['passwordLogin'];
      }
      else{
    $email=$_SESSION['emailLogin'];
    $password=$_SESSION['passwordLogin'];
}

    $query="SELECT * FROM userInfo";

    $result=mysqli_query($handler,$query);
    $current_row_result=mysqli_fetch_assoc($result);
    if($current_row_result>0){
      do{
        if($current_row_result["email"] == $email){
          if($current_row_result["pw"] == $password){
            header("Location:../index.php");
          }
        }
      }while($current_row_result=mysqli_fetch_assoc($result));
    }else{
      echo "No results";
    }



  }
?>
