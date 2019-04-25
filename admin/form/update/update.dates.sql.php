<?php
if(isset($_SESSION['formid'])){
include "sql_file/sqlconnect.php";
$formid = $_SESSION['formid'];
$notification = $_POST['notification'];
$began = $_POST['began'];
$lastdate = $_POST['lastdate'];
$lastfee = $_POST['lastfee'];
$admitcard = $_POST['admitcard'];
$examdate = $_POST['examdate'];
$answerkey = $_POST['answerkey'];
$answer_date = $_POST['answer_date'];
$result = $_POST['result'];

$update_dates = "UPDATE important_dates SET 
notification_date = '$notification',
application_began = '$began',
last_date = '$lastdate',
last_date_for_fee = '$lastdate',
online_correction_last_date = '$lastfee',
admit_card_available = '$admitcard',
exam_date = '$examdate',
answer_date = '$answerkey',
result_declare = '$answer_date' WHERE form_id = '$formid'";

//$update_pgd = "UPDATE admin_pgd SET post_name = '$pn', starting_date = '$sdate', last_update = '$date', short_describe='$describe' WHERE form_id = '$formid'";
///
if ($conn->query($update_dates) === TRUE) {
 //  echo "Record updated successfully";
  header('Location:admin.php?admin=admin/form/show/all');
} else {
    echo "Error updating record: " . $conn->error;
}

}else{
header('location:admin/err.php');
}
?>