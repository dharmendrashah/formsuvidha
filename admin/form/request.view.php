<?php
if($_SESSION['admin']==true){
include "application/logged/header.3.php";
include "admin/form/request.php";
include "application/footer.php";
    //echo $admin;
}else{
header('location:admin/err.php');
}
?>