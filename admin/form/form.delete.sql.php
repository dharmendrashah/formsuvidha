<?php
if(isset($_SESSION['formid'])){
    $formid = $_SESSION['formid'];
    include "sql_file/sqlconnect.php";
    // sql to delete a record
$sql = "DELETE FROM admin_pgd WHERE form_id='$formid'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully of admin_pgd<br>";
} else {
    echo "Error deleting record admin_pgd: " . $conn->error;
}



$sql1 = "DELETE FROM eligibility WHERE form_id='$formid'";

if ($conn->query($sql1) === TRUE) {
    echo "Record deleted successfully of eligibility<br>";
} else {
    echo "Error deleting record eligibility: " . $conn->error;
}



$sql2 = "DELETE FROM fee_structure WHERE form_id='$formid'";


if ($conn->query($sql2) === TRUE) {
    echo "Record deleted successfully fee_structure<br>";
} else {
    echo "Error deleting record fee_structure: " . $conn->error;
}

$sql3 = "DELETE FROM form_links WHERE form_id='$formid'";

if ($conn->query($sql3) === TRUE) {
    echo "Record deleted successfully form_link<br>";
} else {
    echo "Error deleting record form_link: " . $conn->error;
}

$sql4 = "DELETE FROM form_status WHERE form_id='$formid'";

if ($conn->query($sql4) === TRUE) {
    echo "Record deleted successfully form_status<br>";
} else {
    echo "Error deleting record form_status: " . $conn->error;
}


$sql5 = "DELETE FROM important_dates WHERE form_id='$formid'";

if ($conn->query($sql5) === TRUE) {
    echo "Record deleted successfully important_dates<br>";
} else {
    echo "Error deleting record important_dates: " . $conn->error;
}

header('location:admin.php?admin=admin/form/show/all');

}else{
header('location:admin/err.php');
}
?>