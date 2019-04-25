<?php 
include "sql_file/sqlconnect.php";
$formid = $_SESSION['formid'];
//from user status complete or not
$status = "SELECT * FROM form_status WHERE form_id = '$formid'";
$status_result = $conn->query($status);
    // output data of each row
$status = $status_result->fetch_assoc();
if($status['status']==true){
    header('Location:index.php?get=alldata/&&username='.$username);
}else{
    header('Location:'.$status['last_link']);
}
?>