<!doctype html>
<head>
<link href="1.css" rel="stylesheet">
    <div class="header">
    <h1>
        The data entered is.....
    </h1></div>
    </head>
<body >
    <div class="body">
<h3>To</h3>
<?php echo $_POST["to"];?><br>
<h3>From</h3>
<?php echo $_POST["from"]?><br>
<h3>CC</h3>
<?php echo $_POST["cc"]?><br>
<h3>BCC</h3>
<?php echo $_POST["bcc"]?><br>
<h3>Subject</h3>
<?php echo $_POST["subject"]?><br>
<h3>Content</h3>
<?php echo $_POST["content"]?><br>  
</div>
</body>
</html>


<?php 

$mailto = $_POST['to'];
$mailSub = $_POST['subject'];
$mailMsg = $_POST['content'];
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