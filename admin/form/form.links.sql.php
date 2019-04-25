<?php 
if(isset($_SESSION['formid'])){
    if(isset($_POST['submit'])){
        $formid = $_SESSION['formid'];
        $official = $_POST['official'];
        $apply = $_POST['apply'];
        $login = $_POST['login'];
        $notification = $_POST['notification'];
        $syllabus = $_POST['syllabus'];
        $previous = $_POST['prev'];
     include "sql_file/sqlconnect.php";
        $eligibility = "INSERT INTO form_links (form_id, official_link, apply_online, login_link, notification_link, syllabus, previous_year_paper)
                         VALUES ('$formid', '$official', '$apply', '$login', '$notification', '$syllabus', '$previous')";
                         
if ($conn->query($eligibility) === TRUE) {

    
  header('location:admin.php?admin=admin/form/status/5');
    // header('location:admin.php?admin=admin/form/show/all');
 }else {
     echo "Error: ". $eligibility . "<br>" . $conn->error;
 }
     }else{
        echo "submit button not pressed";
    }
}else{
    echo "formid is not connected";
}
