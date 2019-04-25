<?php
include "sql_file/sqlconnect.php";


//from usr login
$detail_pgd = "SELECT * FROM admin_pgd WHERE form_id = '$formid'";
$detail_admin_pgd = $conn->query($detail_pgd);
    // output data of each row
$pgd = $detail_admin_pgd->fetch_assoc() ;


///from user detail
$data_eligibility = "SELECT * FROM eligibility WHERE form_id = '$formid'";
$data_form_eligibility = $conn->query($data_eligibility);
    // output data of each row
$eligibility = $data_form_eligibility->fetch_assoc();



//from user file
$data_fee = "SELECT * FROM fee_structure WHERE form_id = '$formid'";
$data_fee_structure = $conn->query($data_fee);
    // output data of each row
$fee = $data_fee_structure->fetch_assoc();



//from user file
$data_links = "SELECT * FROM form_links WHERE form_id = '$formid'";
$data_form_links = $conn->query($data_links);
    // output data of each row
$links = $data_form_links->fetch_assoc();



//from user file
$data_dates = "SELECT * FROM important_dates WHERE form_id = '$formid'";
$data_important_dates = $conn->query($data_dates);
    // output data of each row
$dates = $data_important_dates->fetch_assoc();
