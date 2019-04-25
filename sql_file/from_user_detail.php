<?php
include "sql_file/sqlconnect.php";
//from usr login
$username = $_GET['username'];
$detail_sql = "SELECT * FROM user_login WHERE username = '$username'";
$detail_result = $conn->query($detail_sql);
    // output data of each row
$detail = $detail_result->fetch_assoc() ;


///from user detail
$data_sql = "SELECT * FROM user_detail WHERE username = '$username'";
$data_result = $conn->query($data_sql);
    // output data of each row
$data_detail = $data_result->fetch_assoc();



//from user file
$file_sql = "SELECT * FROM user_file WHERE username = '$username'";
$file_result = $conn->query($file_sql);
    // output data of each row
$file = $file_result->fetch_assoc();

