<?php
if($_SESSION['admin']==true){
$admin = $_SESSION['admin'];
include "pages_include/for_admin/home_sql.php";
//echo $admin['from_date'];
include "application/logged/header.2.php";
include "pages_include/for_admin/show.form.php";
include "application/footer.php";
//echo $admin;
}else{
header('location:admin/err.php');
}
?>