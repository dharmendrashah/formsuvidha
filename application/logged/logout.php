<?php
session_start();
session_destroy();
header('location:http://[::1]/form/index.php');
?>
