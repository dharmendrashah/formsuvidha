<?php
include 'sql_file/sqlconnect.php';
$role = $_POST['role'];
//echo $role;
$fname = $_POST['first_name'];
//echo $fname;
$lname = $_POST['last_name'];
//echo $lname;
$email = $_POST['email'];
//echo $email;
$pass = $_POST['password'];
//echo $pass;
$tel = $_POST['tel'];
//echo $tel;

date_default_timezone_set('Asia/Kolkata');
$time = time();
$date = date("F D, Y h:i:s A");
$username = $fname.'_'.$lname.'_'.$time;
//pic
if(isset($_FILES['pic'])){
    
    //file upload script
    $fileName = $_FILES['pic']['name'];
    $fileTmpName = $_FILES['pic']['tmp_name'];
    $fileSize = $_FILES['pic']['size'];
    $fileError = $_FILES['pic']['error'];
    $fileType = $_FILES['pic']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('jpg', 'jpeg');
 
 
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000000000){
                $fileNameNew = uniqid('', true)."_pic_".$role."_".$username.".".$fileActualExt;
                $picfileDestination = 'assets/photos/by-admin/photo/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $picfileDestination);
                //header("Location: appindex.php?uploadsuccess");
             //  echo "your photo is is saved in ".$picfileDestination.'<br>';
            }else 
            echo "Your photo is tooooooo big<br>";
        }else {
            echo "There was an error to upload your photo file<br>";
        }
    }else
    {
        echo "you cannot upload this file type as your photo<br>";
    }
    //insert into variable
  //  $photo = $_FILES['photo'];
}else{
    echo "your photo is not added<br>";
}


//signature

if(isset($_FILES['sig'])){
    
    //file upload script
    $fileName = $_FILES['sig']['name'];
    $fileTmpName = $_FILES['sig']['tmp_name'];
    $fileSize = $_FILES['sig']['size'];
    $fileError = $_FILES['sig']['error'];
    $fileType = $_FILES['sig']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('jpg', 'jpeg');
 
 
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000000000){
                $fileNameNew = uniqid('', true)."_sig_".$role."_".$username.".".$fileActualExt;
                $sigfileDestination = 'assets/photos/by-admin/signature/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $sigfileDestination);
                //header("Location: appindex.php?uploadsuccess");
             //  echo "your photo is is saved in ".$picfileDestination.'<br>';
            }else 
            echo "Your photo is tooooooo big<br>";
        }else {
            echo "There was an error to upload your photo file<br>";
        }
    }else
    {
        echo "you cannot upload this file type as your photo<br>";
    }
    //insert into variable
  //  $photo = $_FILES['photo'];
}else{
    echo "your signature is not added<br>";
}
/*
echo $username.'<br>';
echo $fname.'<br>';
echo $lname.'<br>';
echo $email.'<br>';
echo $tel.'<br>';
echo $picfileDestination.'<br>';
echo $sigfileDestination.'<br>';
echo $pass.'<br>';
echo $date.'<br>';
*/
$sql = "INSERT INTO admin_table (rights, username, first_name, lastname, email, phone, photo, signat, pass, from_date) VALUES ('$role', '$username', '$fname','$lname','$email', '$tel', '$picfileDestination', '$sigfileDestination', '$pass', '$date')";


 if ($conn->query($sql) === TRUE) {
    header('Location:admin.php?admin=admin/add/success');
 }else {
     echo "Error: ". $sql . "<br>" . $conn->error;
 }
 $conn->close();
?>