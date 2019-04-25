<?php
if(isset($_SESSION['formid'])){
include "sql_file/sqlconnect.php";
$formid = $_SESSION['formid'];
$official_link = $_POST['official_link'];
$apply_online = $_POST['apply_online'];
$login_link = $_POST['login_link'];
$notification_link = $_POST['notification_link'];
$syllabus = $_POST['syllabus'];
$previous_year_paper = $_POST['previous_year_paper'];

$update_links = "UPDATE form_links SET 
official_link = '$official_link',
apply_online = '$apply_online',
login_link = '$login_link',
notification_link = '$notification_link',
syllabus = '$syllabus',
previous_year_paper = '$previous_year_paper'
WHERE form_id = '$formid'";

//$update_pgd = "UPDATE admin_pgd SET post_name = '$pn', starting_date = '$sdate', last_update = '$date', short_describe='$describe' WHERE form_id = '$formid'";
///
if ($conn->query($update_links) === TRUE) {
 //  echo "Record updated successfully";
  header('Location:admin.php?admin=admin/form/show/all');
} else {
    echo "Error updating record: " . $conn->error;
}

}else{
header('location:admin/err.php');
}
?>
