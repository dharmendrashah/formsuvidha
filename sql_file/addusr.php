<?php
include 'sqlconnect.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pwd = $_POST['pwd'];
date_default_timezone_set('Asia/Kolkata');
$time = time();
$date = date("F D, Y h:i:s A");
$username = $fname.'_'.$lname.'_'.$time;
$sql = "INSERT INTO user_login (username, first_name, last_name, email, phone, password, ontime)
 VALUES ('$username','$fname','$lname','$email', '$phone', '$pwd', '$date')";


 if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("You are succesfully created your account")';
    echo '</script>';
    header('Location:index.php?get=addusr/success_page&&username='.$username);
    
 }else {
     echo "Error: ". $sql . "<br>" . $conn->error;
 }
 $conn->close();
?>