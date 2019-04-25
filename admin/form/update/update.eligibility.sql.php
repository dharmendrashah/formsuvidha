<?php
if(isset($_SESSION['formid'])){
include "sql_file/sqlconnect.php";
$formid = $_SESSION['formid'];
$illetrate = $_POST['illetrate'];
$iti = $_POST['iti'];
$tenpassed = $_POST['10_passed'];
$twelpassed = $_POST['12_passed'];
$ug_passed = $_POST['ug_passed'];
$pg_passed = $_POST['pg_passed'];
$special_cources = $_POST['special_cources'];
$others = $_POST['others'];

$update_eligibility = "UPDATE eligibility SET 
illetrate = '$illetrate',
iti = '$iti',
10_passed = '$tenpassed',
12_passed = '$twelpassed',
ug_passed = '$ug_passed',
pg_passed = '$pg_passed',
special_cources = '$special_cources',
others = '$others'
WHERE form_id = '$formid'";

//$update_pgd = "UPDATE admin_pgd SET post_name = '$pn', starting_date = '$sdate', last_update = '$date', short_describe='$describe' WHERE form_id = '$formid'";
///
if ($conn->query($update_eligibility) === TRUE) {
 //  echo "Record updated successfully";
  header('Location:admin.php?admin=admin/form/show/all');
} else {
    echo "Error updating record: " . $conn->error;
}

}else{
header('location:admin/err.php');
}
?>
