<?PHP 
if(isset($_POST['submit_basic_detail'])){
    $user = $_GET['username'];
    //echo $username.'<br>';
    $first_name = $_POST['first_name'];
    //echo $first_name.'<br>';
    $last_name = $_POST['last_name'];
    //echo $last_name.'<br>';
    $email = $_POST['email'];
    //echo $email.'<br>';
    $phone = $_POST['phone'];
    //echo $phone.'<br>';
    
    include "sqlconnect.php";
    $sql_log = "UPDATE user_login SET first_name='$first_name', last_name='$last_name', email='$email', phone='$phone' WHERE username='$user'";
//echo $sql_log;
if ($conn->query($sql_log) === TRUE) {
   // echo "Record updated successfully";
   $message = 'Your basic data is successfully updated.';

    echo "<SCRIPT type='text/javascript'>
        alert('$message');
        window.location.replace(\"index.php?get=update/&&username=$user\");
    </SCRIPT>";
} else {
    echo "Error updating record: " . $conn->error;
}


}else{
    header('location:index.php?get=alldata/&&username='.$username);
}
?>
