<?php
if(isset($_SESSION['formid'])){
include "application/logged/header.3.php";
include "admin/form/form.view.sql.php";
include "admin/form/view.php";
include "application/footer.php";

}else{
header('location:admin/err.php');
}
?>