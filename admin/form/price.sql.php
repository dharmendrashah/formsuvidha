<?php 
if(isset($_SESSION['formid'])){
    if($_POST['submit']){
            $formid = $_SESSION['formid'];
            $pwd = $_POST['pwdca'];
            $ews = $_POST['ewsca'];
            $obc = $_POST['obcca'];
            $st = $_POST['stca'];
            $sc = $_POST['scca'];
            $boys = $_POST['boys'];
            $girls = $_POST['girls'];
            $trans = $_POST['transgender'];
            $pm = $_POST['payment_mode'];
            include 'sql_file/sqlconnect.php';
            $price = "INSERT INTO fee_structure(form_id, pwd, ews, obc, st, sc, men, women, transgender, payment_mode)
                                         VALUES ('$formid','$pwd','$ews','$obc','$st','$sc','$boys','$girls','$trans','$pm')";
           // echo $price;
           if ($conn->query($price) === TRUE) {
//header('location:admin.php?admin=admin/formadd/eligibility/');
header("location:admin.php?admin=admin/form/status/3");
//echo 'ok';
}else {
     echo "Error: ". $price . "<br>" . $conn->error;
 }
        }else{
header('location:admin/err.php');
    }
}else{

header('location:admin/err.php');
    }?>