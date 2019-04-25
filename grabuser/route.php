<?php
if($_GET=['search']==true){
include "grabuser/index.php";
}else{
    header('Location:admin/err.php');
}
?>