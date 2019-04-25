<?php 
include "sql_file/sqlconnect.php";
$username = $_GET['user'];
//from user status complete or not
$status_sql = "SELECT * FROM user_status WHERE form_id = '$username'";
$status_result = $conn->query($status_sql);
    // output data of each row
$status = $status_result->fetch_assoc();
if($status['status']==true){
    header('Location:index.php?get=alldata/&&username='.$username);
}else{
    header('Location:'.$status['last_visit']);
}
?>