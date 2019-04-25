<?php include "sql_file/sqlconnect.php"; ?>
<?php 
if(isset($_POST['smail'])){
$smail = $_POST['smail'];
$sql_mail = "INSERT INTO email_subs (mail_id) VALUES ('$smail')";
if($conn->query($sql_mail) === true){
echo "You are now subscribed ";
    require 'mailtest/index.php';
}
}?>