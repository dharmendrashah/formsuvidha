<?php 
include "sql_file/sqlconnect.php";
$data_sql = "SELECT * FROM admin_table WHERE username = '$admin'";
$data_result = $conn->query($data_sql);
    // output data of each row
$admin = $data_result->fetch_assoc();
