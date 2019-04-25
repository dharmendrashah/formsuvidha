<?php
if(isset($_POST['submit'])){
    $post = $_POST['post_name'];
    //echo $_POST['post_name'].'<br>';
    $start = $_POST['start_date'];
    //echo $_POST['start_date'].'<br>';
    $describe = $_POST['describe'];
    //echo $_POST['describe'].'<br>';
    date_default_timezone_set('Asia/Kolkata');
    $time = time();
    $update = date("F D, Y h:i:s A");
    //echo $date;
    $formid = $time;
    //echo $time;
    include "sql_file/sqlconnect.php";
    $general_data = "INSERT INTO admin_pgd (form_id, post_name, starting_date, last_update, short_describe)
     VALUES ('$formid', '$post', '$start', '$update', '$describe')";
     //echo $general_data;

     
 if ($conn->query($general_data) === TRUE) {
    //header('location:admin.php?admin=')
    //echo 'ok';
    $_SESSION['formid'] = $formid;
   header('location:admin.php?admin=admin/form/status/1');
    // echo $_SESSION['formid'];
  // header('location:admin.php?admin=admin/form/add/important/dates');
 }else {
     echo "Error: ". $general_data . "<br>" . $conn->error;
 }
}else{
header('location:admin/err.php');
}
?>