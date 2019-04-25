<?php
include 'sqlconnect.php';

//adding the status start
$username = $_GET['username'];

$last_visit = "INSERT INTO `user_status` (`username`, `status`, `last_visit`) VALUES ('$username', '', 'index.php?get=incdata/&&user=$username')";


if ($conn->query($last_visit) === TRUE) {
  //  echo 'user status added';
 }else {
     echo "Error: ". $last_visit . "<br>" . $conn->error;
 }

// adding the status end
