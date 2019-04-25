<?php
if($_SESSION['admin']==true){
include "sql_file/sqlconnect.php";

$admin_username = $_SESSION['admin'];
$task = $_POST['task'];

//date and time
date_default_timezone_set('Asia/Kolkata');
$time = time();
$date = date("F D, Y h:i:s A");
$admin_task = "INSERT INTO admin_task (admin_username, task, task_date) VALUES ('$admin_username', '$task', '$date')";
//echo $admin_task;
 if ($conn->query($admin_task) === TRUE) {
    header('Location:admin.php?admin=admin/home');
   // echo 'ok'; 
 }else {
     echo "Error: ". $admin_task . "<br>" . $conn->error;
 }
}else{
header('location:admin/err.php');
}