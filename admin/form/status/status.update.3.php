<?php
if(isset($_SESSION['formid'])){
$formid = $_SESSION['formid'];
$link = "admin.php?admin=admin/formadd/eligibility/&&formid=$formid";
    include "sql_file/sqlconnect.php";
$update = "UPDATE form_status SET status='', last_link='$link' WHERE form_id='$formid'";
     if ($conn->query($update) === TRUE) {
        header('location:admin.php?admin=admin/formadd/eligibility/');
     }else{
        echo "data not fetched successfully";
     }
}else{
header('location:admin/err.php');
}
?>