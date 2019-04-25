<?php 
if(isset($_SESSION['formid'])){
    if(isset($_POST['submit'])){
        $formid = $_SESSION['formid'];
        $illetrate = $_POST['ill'];
        $iti = $_POST['iti'];
        $ten = $_POST['10p'];
        $twel = $_POST['12p'];
        $ug = $_POST['ugpa'];
        $pg = $_POST['pgpa'];
        $splco = $_POST['splca'];
        $other = $_POST['othca'];
    include "sql_file/sqlconnect.php";
        $eligibility = "INSERT INTO eligibility (form_id, iti, illetrate, 10_passed, 12_passed, ug_passed, pg_passed, special_cources, others)
                         VALUES ('$formid', '$illetrate', '$iti', '$ten', '$twel', '$ug', '$pg', '$splco', '$other')";
                         
if ($conn->query($eligibility) === TRUE) {

  header('location:admin.php?admin=admin/form/status/4');
    // header('location:admin.php?admin=admin/form/show/all');
 }else {
     echo "Error: ". $eligibility . "<br>" . $conn->error;
 }
     }else{
        echo "submit button not pressed";
    }
}else{
    echo "formid is not connected";
}
