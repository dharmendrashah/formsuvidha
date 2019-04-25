<?php
if($_SESSION['admin']==true){
$admin = $_SESSION['admin'];
include 'admin/form/pgd.php';
}else{
header('location:admin/err.php');
}
?>