<?php
$user = $_GET['username'];
//echo $user.'<br>';
$tenmark = $_GET['10m'];
//echo $tenmark.'<br>';
$twelmark = $_GET['12m'];
//echo $twelmark.'<br>';
$ug = $_GET['ug'];
//echo $ug.'<br>';
$pg = $_GET['pg'];
//echo $pg.'<br>';
$caste = $_GET['caste'];
//echo $caste.'<br>';
$icer = $_GET['icer'];
//echo $icer.'<br>';
$pwd = $_GET['pwd'];
//echo $pwd.'<br>';
$dom = $_GET['dom'];
//echo $dom.'<br>';
$photo = $_GET['photo'];
//echo $photo.'<br>';
$sig = $_GET['sig'];
//echo $sig.'<br>';
$lth = $_GET['lth'];
//echo $lth.'<br>';
$rith = $_GET['rith'];
//echo $rith.'<br>';
$oth = $_GET['oth'];
//echo $oth.'<br>';



//updating files code

include "sql_file/sqlconnect.php";

$sql_file = "UPDATE user_file SET 10_marksheet='$tenmark', 12_marksheet='$twelmark',ug_marksheet='$ug',pg_marksheet='$pg',caste_cerificate='$caste',income_certificate='$icer',pwd_certificate='$pwd',domicile_certificate='$dom',photo='$photo',signature='$sig',left_thumb='$lth',right_thumb='$rith', other='$oth' WHERE username='$user'";


if ($conn->query($sql_file) === TRUE) {

 // header("Location: index.php?get=alldata/&&username=".$user);
 echo "all the files were uloaded successfully";
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>