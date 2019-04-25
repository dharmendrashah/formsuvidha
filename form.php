<?php
if(isset($_GET['form'])){
$formid = $_GET['form'];
include "application/logged/header.4.php";
include "form.sql.php";
include "form.view.php";
include "application/footer.php";
}else{
header('location:admin/err.php');
}
?>