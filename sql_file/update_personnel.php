<?php
if(isset($_POST['submit_personnel_detail'])){
    $user = $_GET['username'];
$qualification = $_POST['qualification'];
//echo  $qualification.' qualification <br>';

$community = $_POST['community'];
//echo  $community.' community<br>';

//$pwd = $_POST['pwd'];
if(isset($_POST["pwd"])) 
                                { 
                                    // Retrieving each selected option 
                                foreach ($_POST['pwd'] as $pwd) 
                            $pwd_d[] = "$pwd, ";
                                } 
                            else{
                                echo "Select an option first for pwd section !!<br>"; 
                            }
//echo  $pwd.' pwd<br>';

$gender = $_POST['gender'];
//echo $gender.' gender<br>';

$nation = $_POST['nation'];
//echo  $nation.' nation<br>';

$relegion = $_POST['relegion'];
//echo  $relegion.' relegion<br>';

$ex_service = $_POST['ex-service'];
//echo  $ex_service.' ex_service<br>';


$doj = $_POST['doj'];
//echo  $doj.' doj<br>';

$dor = $_POST['dor'];
//echo  $dor.' dor<br>';


$serving_area = $_POST['serving_area'];
//echo  $serving_area.' serving_area<br>';

$jkfactor = $_POST['jk_factor'];
//echo  $jkfactor.' jkfactor<br>';

$mark_body = $_POST['mark_body'];
//echo  $mark_body.' mark_body<br>';

$gender = $_POST['gender'];
//echo  $gender.' gender<br>';

$aadhar_no = $_POST['aadhar_no'];
//echo  $aadhar_no.' aadhar_no<br>';

//pwd array
$pwd_det = $pwd_d[0].''.$pwd_d[1].''.$pwd_d[2].''.$pwd_d[3].''.$pwd_d[4].''.$pwd_d[5].''.$pwd_d[6].''.$pwd_d[7].''.$pwd_d[8].''.$pwd_d[9].''.$pwd_d[10].''.$pwd_d[11].''.$pwd_d[12].''.$pwd_d[13].''.$pwd_d[14].''.$pwd_d[15].''.$pwd_d[16].''.$pwd_d[17].''.$pwd_d[18].''.$pwd_d[19].''.$pwd_d[20].''.$pwd_d[21].''.$pwd_d[22].''.$pwd_d[23].''.$pwd_d[24];

include "sqlconnect.php";
$personnel_sql = "UPDATE user_detail SET qualification='$qualification', community='$community', pwd='$pwd_det', gender='$gender', nationality='$nation', religion='$relegion', ex_serviceman='$ex_service', date_joining='$doj', date_of_retirement='$dor', service_field='$serving_area', jk_factor='$jkfactor', body_mark='$mark_body', aadhar_no='$aadhar_no' WHERE username='$user'";
 // echo $personnel_sql;

  if ($conn->query($personnel_sql) === TRUE) {
     // echo "Record updated successfully";
   $message = 'Your perosnelly successfully updated.';

   echo "<SCRIPT type='text/javascript'>
       alert('$message');
       window.location.replace(\"index.php?get=update/&&username=$user\");
   </SCRIPT>";
 } else {
     echo "Error updating record: " . $conn->error;
 }
 
}else{
echo "somethig happen worng";
}
?>