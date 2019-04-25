<?php
include "sql_file/sqlconnect.php";
$user = $_GET['user'];
$sql = "SELECT * FROM user_login WHERE username = '$user'";
$result = $conn->query($sql);
    // output data of each row
$row = $result->fetch_assoc() ;
?>
     