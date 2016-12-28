<?php
include("db.php");

session_start(); 

$email=($_POST['email']);
$hasło=($_POST['hasło']);

$result=mysql_query("SELECT count(*) FROM student WHERE email='$email' and haslo='$hasło'");

 // $count=mysql_num_rows($result);

//if($count>0){
  session_register("email");
  session_register("hasło");
  header("location:index.php");
//}
/*else {
  echo 'Wrong Email or Password! Return to <a href="index.html">login</a>';
  }*/
?>
