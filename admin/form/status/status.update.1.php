<?php
if(isset($_SESSION['formid'])){
$formid = $_SESSION['formid'];
$link = "admin.php?admin=admin/form/add/important/dates&&formid=$formid";
    include "sql_file/sqlconnect.php";
    $link = "INSERT INTO form_status (form_id, status, last_link) VALUES ('$formid','','$link')";
     if ($conn->query($link) === TRUE) {
        header('location:admin.php?admin=admin/form/add/important/dates');
     }else{
        echo "data not fetched successfully";
     }

}else{
header('location:admin/err.php');
}
?>