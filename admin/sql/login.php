<?php
if(isset($_POST['btn_login'])){
include ('sql_file/sqlconnect.php');
$user = $_POST['tect'];
$pass = $_POST['password'];
$query = "SELECT * FROM admin_table WHERE username = '$user' && pass = '$pass'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if ($total==1){
    $_SESSION['admin']=$user;
    header('location:admin.php?admin=admin/home');
    echo "you are successfully login<br>";
   // echo $_SESSION['user'];
}
else{
    header('location:admin.php?admin=admin/login&&keep_try');
       // echo "you are unsuccessfully NOT login";

}
#echo $total;
}else{
  echo error_reporting(E_ALL);
  ini_set('display_errors', 1);
}
