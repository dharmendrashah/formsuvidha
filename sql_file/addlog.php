<?php
 session_start();
include "sqlconnect.php";
if(isset($_POST['btn_login']))
{
$usr = $_POST['username'];
$pass = $_POST['password'];
$query = "SELECT * FROM user_login WHERE username = '$usr' && password = '$pass'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if ($total==1){
    $_SESSION['username']=$usr;
      header('location:index.php?get=status/&&user='.$_SESSION['username']);
}
else{
    header('location:index.php?get=incdata/keep_try');
}
#echo $total;
}else{
  echo error_reporting(E_ALL);
  ini_set('display_errors', 1);
    ;
}
?>