<?php
if(isset($_POST['submit_file_detail'])){

    //getting the username variable
    $user = $_GET['username'];
#check for 10 marksheet
if(isset($_FILES['10m'])){

    //file upload script
    $fileName = $_FILES['10m']['name'];
    $fileTmpName = $_FILES['10m']['tmp_name'];
    $fileSize = $_FILES['10m']['size'];
    $fileError = $_FILES['10m']['error'];
    $fileType = $_FILES['10m']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('jpg', 'jpeg', 'png');
 
 
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000000000){
                $fileNameNew = uniqid('', true)."_10_marksheet_".$user.".".$fileActualExt;
                $tenfileDestination = 'assets/photos/by-users/10-marksheet/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $tenfileDestination);
                //header("Location: appindex.php?uploadsuccess");
            //   echo "your 10th marksheet is saved in ".$tenfileDestination.'<br>';
            }else 
            echo "Your file 10 class marksheet is tooooooo big<br>";
        }else {
            echo "There was an error to upload the 10th class markshhet<br>";
        }
    }else
    {
        echo "you cannot upload this file type<br>";
    }
    //insert into variable
   // $tenmark = $_FILES['10m'];
}else{
    echo "10 marksheet is not added<br>";
}

#check for 12th marksheet
if(isset($_FILES['12m'])){
    
    //file upload script
    $fileName = $_FILES['12m']['name'];
    $fileTmpName = $_FILES['12m']['tmp_name'];
    $fileSize = $_FILES['12m']['size'];
    $fileError = $_FILES['12m']['error'];
    $fileType = $_FILES['12m']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('jpg', 'jpeg', 'png');
 
 
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000000000){
                $fileNameNew = uniqid('', true)."_12_marksheet_".$user.".".$fileActualExt;
                $twelfileDestination = 'assets/photos/by-users/12-marksheet/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $twelfileDestination);
                //header("Location: appindex.php?uploadsuccess");
            //   echo "your 12th marksheet is saved in ".$twelfileDestination.'<br>';
            }else 
            echo "Your 12th class marksheet is tooooooo big<br>";
        }else {
            echo "There was an error to upload the 12th class marksheet<br>";
        }
    }else
    {
        echo "you cannot upload this12 th class marksheet<br>";
    }
    //insert into variable
  //  $twelmark =$_FILES['12m'];
}else{
    echo "12 marksheet is not added<br>";
}

#under graduate marksheet upload
if(isset($_FILES['ugl'])){
    
    //file upload script
    $fileName = $_FILES['ugl']['name'];
    $fileTmpName = $_FILES['ugl']['tmp_name'];
    $fileSize = $_FILES['ugl']['size'];
    $fileError = $_FILES['ugl']['error'];
    $fileType = $_FILES['ugl']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('jpg', 'jpeg', 'png');
 
 
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000000000){
                $fileNameNew = uniqid('', true)."_ug_certificate_".$user.".".$fileActualExt;
                $ugfileDestination = 'assets/photos/by-users/ug-marksheet'.$fileNameNew;
                move_uploaded_file($fileTmpName, $ugfileDestination);
                //header("Location: appindex.php?uploadsuccess");
            //   echo "your under graduation is saved in ".$ugfileDestination.'<br>';
            
            }else 
            echo "Your under graduate file is too big to upload<br>";
        }else {
            echo "There was an error to upload the undergraduate file<br>";
        }
    }else
    {
        echo "you cannot upload this undergradute file type<br>";
    }
    //insert into variable
   // $ugmark = $_FILES['ugl'];
}else{
    echo "undergradute marksheet is not added<br>";
}

#post graduate markshhet upload
if(isset($_FILES['pgl'])){
    
    //file upload script
    $fileName = $_FILES['pgl']['name'];
    $fileTmpName = $_FILES['pgl']['tmp_name'];
    $fileSize = $_FILES['pgl']['size'];
    $fileError = $_FILES['pgl']['error'];
    $fileType = $_FILES['pgl']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('jpg', 'jpeg', 'png');
 
 
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000000000){
                $fileNameNew = uniqid('', true)."_pg_certificate_".$user.".".$fileActualExt;
                $pgfileDestination = 'assets/photos/by-users/pg-marksheet/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $pgfileDestination);
                //header("Location: appindex.php?uploadsuccess");
             //  echo "your Post graduation is saved in ".$pgfileDestination.'<br>';
            }else 
            echo "Your postgraduation file is tooooooo big<br>";
        }else {
            echo "There was an error to upload the postgraduation file<br>";
        }
    }else
    {
        echo "you cannot upload this file type for postgraduation<br>";
    }
    //insert into variable
   // $pgmark = $_FILES['pgl'];
}else{
    echo "postgraduation marksheet is not added<br>";
}


#check for caste certificate
if(isset($_FILES['cacer'])){
    
    //file upload script
    $fileName = $_FILES['cacer']['name'];
    $fileTmpName = $_FILES['cacer']['tmp_name'];
    $fileSize = $_FILES['cacer']['size'];
    $fileError = $_FILES['cacer']['error'];
    $fileType = $_FILES['cacer']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('jpg', 'jpeg', 'png');
 
 
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000000000){
                $fileNameNew = uniqid('', true)."_caste_certificate_".$user.".".$fileActualExt;
                $cacerfileDestination = 'assets/photos/by-users/caste-certificate'.$fileNameNew;
                move_uploaded_file($fileTmpName, $cacerfileDestination);
                //header("Location: appindex.php?uploadsuccess");
            //   echo "your caste certificate is saved in ".$cacerfileDestination.'<br>';
            }else 
            echo "Your caste certificate file is tooooooo big<br>";
        }else {
            echo "There was an error to upload the caste-certificate file<br>";
        }
    }else
    {
        echo "you cannot upload this file type for caste certificate<br>";
    }
    //insert into variable
  //  $caste = $_FILES['cacer'];
}else{
    echo "caste certificate is not added<br>";
}


#check for income certificate
if(isset($_FILES['incer'])){
    
    //file upload script
    $fileName = $_FILES['incer']['name'];
    $fileTmpName = $_FILES['incer']['tmp_name'];
    $fileSize = $_FILES['incer']['size'];
    $fileError = $_FILES['incer']['error'];
    $fileType = $_FILES['incer']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('jpg', 'jpeg', 'png');
 
 
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000000000){
                $fileNameNew = uniqid('', true)."_income_certificate_".$user.".".$fileActualExt;
                $icernfileDestination = 'assets/photos/by-users/income-certificate/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $icernfileDestination);
                //header("Location: appindex.php?uploadsuccess");
              //  echo "your income certificate is saved in ".$icernfileDestination.'<br>';
            }else 
            echo "Your income certificate file is tooooooo big<br>";
        }else {
            echo "There was an error to upload the incomecertificate file<br>";
        }
    }else
    {
        echo "you cannot upload this file type for incomecertificate<br>";
    }
    //insert into variable
   // $incer = $_FILES['incer'];
}else{
    echo "caste certificate is not added<br>";
}


#check for person with disability 
if(isset($_FILES['pwdcer'])){
    
    //file upload script
    $fileName = $_FILES['pwdcer']['name'];
    $fileTmpName = $_FILES['pwdcer']['tmp_name'];
    $fileSize = $_FILES['pwdcer']['size'];
    $fileError = $_FILES['pwdcer']['error'];
    $fileType = $_FILES['pwdcer']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('jpg', 'jpeg', 'png');
 
 
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000000000){
                $fileNameNew = uniqid('', true)."_pwd_certificate_".$user.".".$fileActualExt;
                $pwdfileDestination = 'assets/photos/by-users/pwd-certificate/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $pwdfileDestination);
                //header("Location: appindex.php?uploadsuccess");
            //  echo "your Pwd certificate is saved in ".$pwdfileDestination.'<br>';

            }else 
            echo "Your pwd file is tooooooo big<br>";
        }else {
            echo "There was an error to upload the pwd file<br>";
        }
    }else
    {
        echo "you cannot upload this file type for pwd certificate<br>";
    }
    //insert into variable
   // $pwdcer = $_FILES['pwdcer'];
}else{
    echo "pwd certificate is not added<br>";
}


#check for domicile certificate
if(isset($_FILES['domcer'])){
    
    //file upload script
    $fileName = $_FILES['domcer']['name'];
    $fileTmpName = $_FILES['domcer']['tmp_name'];
    $fileSize = $_FILES['domcer']['size'];
    $fileError = $_FILES['domcer']['error'];
    $fileType = $_FILES['domcer']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('jpg', 'jpeg', 'png');
 
 
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000000000){
                $fileNameNew = uniqid('', true)."_domicile_certificate_".$user.".".$fileActualExt;
                $domcerfileDestination = 'assets/photos/by-users/domicile-certificate/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $domcerfileDestination);
                //header("Location: appindex.php?uploadsuccess");
               // echo "your domicile certificate is saved in ".$domcerfileDestination.'<br>';

            }else 
            echo "Your domicile certificate file is tooooooo big<br>";
        }else {
            echo "There was an error to upload the domicile certificate file<br>";
        }
    }else
    {
        echo "you cannot upload this file type for domicile certificate<br>";
    }
    //insert into variable
// $domcer = $_FILES['domcer'];
}else{
    echo "dimicile certificate is not added<br>";
}



#check for photos
if(isset($_FILES['photo'])){
    
    //file upload script
    $fileName = $_FILES['photo']['name'];
    $fileTmpName = $_FILES['photo']['tmp_name'];
    $fileSize = $_FILES['photo']['size'];
    $fileError = $_FILES['photo']['error'];
    $fileType = $_FILES['photo']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('jpg', 'jpeg');
 
 
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000000000){
                $fileNameNew = uniqid('', true)."_pic_".$user.".".$fileActualExt;
                $picfileDestination = 'assets/photos/by-users/photos/'.$fileNameNew;
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


#check for signature
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
                $fileNameNew = uniqid('', true)."_signature_".$user.".".$fileActualExt;
                $sigfileDestination = 'assets/photos/by-users/signature/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $sigfileDestination);
                //header("Location: appindex.php?uploadsuccess");
               // echo "your signature is saved in ".$sigfileDestination.'<br>';

            }else 
            echo "Your signature file is tooooooo big<br>";
        }else {
            echo "There was an error to upload the signature file<br>";
        }
    }else
    {
        echo "you cannot upload this file type asyour signature<br>";
    }
}else{
    echo "your signature is not addd<br>";
}

#check for Left Thumb Print
if(isset($_FILES['left_thumb'])){
    
    //file upload script
    $fileName = $_FILES['left_thumb']['name'];
    $fileTmpName = $_FILES['left_thumb']['tmp_name'];
    $fileSize = $_FILES['left_thumb']['size'];
    $fileError = $_FILES['left_thumb']['error'];
    $fileType = $_FILES['left_thumb']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('jpg', 'jpeg');
 
 
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000000000){
                $fileNameNew = uniqid('', true)."Left_Thumb_".$user.".".$fileActualExt;
                $leftfileDestination = 'assets/photos/by-users/left_thumb/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $leftfileDestination);
                //header("Location: appindex.php?uploadsuccess");
               // echo "your Left thumb is saved in ".$sigfileDestination.'<br>';

            }else 
            echo "Your Left thumb file is tooooooo big<br>";
        }else {
            echo "There was an error to upload the left_thumb file<br>";
        }
    }else
    {
        echo "you cannot upload this file type as your Left Thumb<br>";
    }
}else{
    echo "your Left Thumb File is not addd<br>";
}

#check for Right Thumb Print
if(isset($_FILES['right_thumb'])){
    
    //file upload script
    $fileName = $_FILES['right_thumb']['name'];
    $fileTmpName = $_FILES['right_thumb']['tmp_name'];
    $fileSize = $_FILES['right_thumb']['size'];
    $fileError = $_FILES['right_thumb']['error'];
    $fileType = $_FILES['right_thumb']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('jpg', 'jpeg');
 
 
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000000000){
                $fileNameNew = uniqid('', true)."_right_thumb_".$user.".".$fileActualExt;
                $rightfileDestination = 'assets/photos/by-users/right_thumb/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $rightfileDestination);
                //header("Location: appindex.php?uploadsuccess");
               // echo "your Right_thumb is saved in ".$sigfileDestination.'<br>';

            }else 
            echo "Your Right_thumb file is tooooooo big<br>";
        }else {
            echo "There was an error to upload the Right_thumb file<br>";
        }
    }else
    {
        echo "you cannot upload this file type as your Right_thumb<br>";
    }
}else{
    echo "your Right_thumb is not addd<br>";
}


#check for Other mandatory File
if(isset($_FILES['oth_file'])){
    
    //file upload script
    $fileName = $_FILES['oth_file']['name'];
    $fileTmpName = $_FILES['oth_file']['tmp_name'];
    $fileSize = $_FILES['oth_file']['size'];
    $fileError = $_FILES['oth_file']['error'];
    $fileType = $_FILES['oth_file']['type'];
 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
 
    $allowed = array('jpg', 'jpeg');
 
 
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000000000){
                $fileNameNew = uniqid('', true)."_other_file_".$user.".".$fileActualExt;
                $othfileDestination = 'assets/photos/by-users/other/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $othfileDestination);
                //header("Location: appindex.php?uploadsuccess");
               // echo "your other is saved in ".$sigfileDestination.'<br>';

            }else 
            echo "Your other file is tooooooo big<br>";
        }else {
            echo "There was an error to upload the other file<br>";
        }
    }else
    {
        echo "you cannot upload this file type as your other<br>";
    }
}else{
    echo "your signature is not addd<br>";
}
header("Location:index.php?get=update/file_data&&username=$user&&10m=$tenfileDestination&&12m=$twelfileDestination&&ug=$ugfileDestination&&pg=$pgfileDestination&&caste=$cacerfileDestination&&icer=$icernfileDestination&&pwd=$pwdfileDestination&&dom=$domcerfileDestination&&photo=$picfileDestination&&sig=$sigfileDestination&&lth=$leftfileDestination&&rith=$rightfileDestination&&oth=$othfileDestination");
/*
include "sql_file/sqlconnect.php";

$sql_file = "UPDATE user_file SET 10_marksheet='$tenfileDestination', 12_marksheet='$twelfileDestination',ug_marksheet='$ugfileDestination',pg_marksheet='$pgfileDestination',caste_cerificate='$cacerfileDestination',income_certificate='$icernfileDestination',pwd_certificate='$pwdfileDestination',domicile_certificate='$domcerfileDestination',photo='$picfileDestination',signature='$sigfileDestination',left_thumb='$leftfileDestination',right_thumb='$rightfileDestination', other='$othfileDestination' WHERE username='$user'";


if ($conn->query($sql_file) === TRUE) {

  header("Location: index.php?get=alldata/&&username=".$user);
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/
}else{
    echo "Go and fuck yourself you dog/bitch you try to hack it hu hu hu hu hu";
}

                                         