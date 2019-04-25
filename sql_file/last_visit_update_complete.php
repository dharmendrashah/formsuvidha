<?php
include "sql_file/sqlconnect.php";
//adding the status start
$username = $_GET['username'];

$incdataupdate = "UPDATE user_status SET status='Complete', last_visit='index.php?get=alldata/&&username=$username' WHERE username='$username'";


if ($conn->query($incdataupdate) === TRUE) {
  //  echo 'user status added';
 }else {
     echo "Error: ". $incdataupdate . "<br>" . $conn->error;
 }

// adding the status end