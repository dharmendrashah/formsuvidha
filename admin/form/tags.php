<?php
if(isset($_SESSION['formid'])){
include "application/logged/header.3.php";
include "admin/form/form.view.sql.php";
//include "tags.php";
$formid = $_SESSION['formid'];
$describe = $pgd['short_describe'];
$meta = $_POST['tags'];
$link = "form/view/form=".$formid;
$header = $pgd['post_name'];
date_default_timezone_set('Asia/Kolkata');
$time = time();
$update = date("F D, Y h:i:s A");

  $general_data = "INSERT INTO meta_link (form_id, header, form_link, meta_tags, form_describe, update_time)
     VALUES ('$formid', '$header', '$link', '$meta', '$describe', '$update')";
     //echo $general_data;

     
 if ($conn->query($general_data) === TRUE) {
    //header('location:admin.php?admin=')
    //echo 'ok';
    $_SESSION['formid'] = $formid;
   header('location:admin.php?admin=admin/form/show/all');
    // echo $_SESSION['formid'];
  // header('location:admin.php?admin=admin/form/add/important/dates');
 }else {
     echo "Error: ". $general_data . "<br>" . $conn->error;
 }
include "application/footer.php";

}else{
header('location:admin/err.php');
}
?>