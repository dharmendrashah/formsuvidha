<?php
if(isset($_SESSION['formid'])){
include "sql_file/sqlconnect.php";
$formid = $_SESSION['formid'];
$pwd = $_POST['pwd'];
$ews = $_POST['ews'];
$obc = $_POST['obc'];
$st = $_POST['st'];
$sc = $_POST['sc'];
$men = $_POST['men'];
$Women = $_POST['Women'];
$transgender = $_POST['transgender'];
$Payment = $_POST['Payment'];

$update_fee = "UPDATE fee_structure SET 
pwd = '$pwd',
ews = '$ews',
obc = '$obc',
st = '$st',
sc = '$sc',
men = '$men',
Women = '$Women',
transgender = '$transgender',
payment_mode = '$Payment' WHERE form_id = '$formid'";

//$update_pgd = "UPDATE admin_pgd SET post_name = '$pn', starting_date = '$sdate', last_update = '$date', short_describe='$describe' WHERE form_id = '$formid'";
///
if ($conn->query($update_fee) === TRUE) {
 //  echo "Record updated successfully";
  header('Location:admin.php?admin=admin/form/show/all');
} else {
    echo "Error updating record: " . $conn->error;
}

}else{
header('location:admin/err.php');
}
?>