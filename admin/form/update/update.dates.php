<?php
if(isset($_SESSION['formid'])){
include "admin/form/form.view.sql.php";
include "application/logged/header.3.php";
include "admin/form/update/dates.php";
include "application/footer.php";
}else{
header('location:admin/err.php');
}
?>