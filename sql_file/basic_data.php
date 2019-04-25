<?php
include "sql_file/sqlconnect.php";
$username = $_GET['username'];
//from user status complete or not
$status_sql = "SELECT * FROM user_login WHERE username = '$username'";
$status_result = $conn->query($status_sql);
    // output data of each row
$detail = $status_result->fetch_assoc();
?>