<?php
$smail = $_POST['smail'];
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'ashaprajapatibkn@gmail.com';
$mail->Password = 'black9024!@';

$mail->setFrom('ashaprajapatibkn@gmail.com', 'FormSuvidha');
$mail->addAddress($smail);

$mail->IsHTML(true);
$mail->Subject = 'FormSuvidha : Thanks for signing up with us';
$mail->Body = "Dear,<br/>Mam/Sir,<br/>We are humble to you for the efforts. this mail is come from the team of FormSuvidha and we will povide you the latest information about the latest jobs and recruitment from are side please stay connected with us.If you do not want to connected with us please click on <a href='https://formsuvidha.com/index.php?get=user/unsubscribe&mail=enterprisesshah0@gmail.com'>this</a> button to unsubscribe us<br/>thanks<br/>Team FormSuvidha";

if ($mail->send()){
header("Location: {$_SERVER['HTTP_REFERER']}");}else{
  //  echo "Mail not send";
  echo 'Error :'.$mail->send();
}
?>