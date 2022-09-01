<?php 

$mailto = $_POST['mail_to'];
$mailSub = $_POST['mail_sub'];
$mailMsg = $_POST['mail_body'];
require_once('C:/xampp/htdocs/assign2/PHPMailer-master/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->IsSmtp();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->isHTML(true);
$mail->Username = 'drcarreyjim@gmail.com';
$mail->Password = 'jim@16598';
$mail->SetFrom('drcarreyjim@gmail.com');

//$mail->Username = 'iemailmyme1@gmail.com';
//$mail->Password = 'software1234';
//$mail->SetFrom('iemailmyme1@gmail.com');
$mail->Subject = $mailSub;
$mail->Body = $mailMsg;
$mail->AddAddress($mailto);


if(!$mail->Send())
{
	echo "Mail Not Sent";	
}
else
{
	echo "Mail sent";
}

?>