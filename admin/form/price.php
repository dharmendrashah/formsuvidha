<?php
if(isset($_SESSION['formid'])){
include "application/logged/header.3.php";
include "admin/form/price.list.php";
include "application/footer.php";
}else{
header('location:admin/err.php');
}
?>