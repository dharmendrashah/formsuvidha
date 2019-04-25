<?php
if($_SESSION['formid']==true){
    if(isset($_POST['submit'])){
        $formid = $_SESSION['formid'];
        $notification = $_POST['nois'];
        $application = $_POST['apbe'];
        $lastdate = $_POST['lada'];
        $lastdatefee = $_POST['ladafe'];
        $lastdateonline = $_POST['ladaon'];
        $admitcardavail = $_POST['adca'];
        $examdate = $_POST['exda'];
        $answerkey = $_POST['anske'];
        $result = $_POST['resultda'];
        include "sql_file/sqlconnect.php";
        $dates = "INSERT INTO important_dates (form_id, notification_date, application_began, last_date, last_date_for_fee, online_correction_last_date, admit_card_available, exam_date, answer_date, result_declare) VALUES ('$formid','$notification','$application','$lastdate','$lastdatefee','$lastdateonline','$admitcardavail','$examdate','$answerkey','$result')";
        
 if ($conn->query($dates) === TRUE) {
//header('location:admin.php?admin=admin/form/add/price/list');
header('location:admin.php?admin=admin/form/status/2');
}else {
     echo "Error: ". $dates . "<br>" . $conn->error;
 }
    }else{
header('location:admin/err.php');
    }
}else{
header('location:admin/err.php');
}
?>