<?php
include "sql_file/sqlconnect.php";
$username = $_GET['username'];
$sql = "SELECT * FROM user_login WHERE username = '$username'";
$result = $conn->query($sql);
    // output data of each row
$row = $result->fetch_assoc() ;
     