<?php
if(isset($_SESSION['formid'])){
include "sql_file/sqlconnect.php";
$formid = $_SESSION['formid'];
$pn = $_POST['pgd'];
$sdate = $_POST['starting_date'];
$describe = $_POST['short_describe'];
date_default_timezone_set('Asia/Kolkata');
$time = time();
$date = date("F D, Y h:i:s A");
$update_pgd = "UPDATE admin_pgd SET post_name = '$pn', starting_date = '$sdate', last_update = '$date', short_describe='$describe' WHERE form_id = '$formid'";
///
if ($conn->query($update_pgd) === TRUE) {
 //  echo "Record updated successfully";
  header('Location:admin.php?admin=admin/form/show/all');
} else {
    echo "Error updating record: " . $conn->error;
}

}else{
header('location:admin/err.php');
}
?>