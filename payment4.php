<?php 
$con = mysql_connect('localhost','root','');
mysql_select_db('buy');
if (!$con) {
die('Not connected : ' . mysql_error());
}
else echo "Connected Successfully\n";
$a=$_POST['varname'];
echo $a;
//echo $_POST['id'];
$result= mysql_query("SELECT * FROM `buy` where id=".$a."");
$row=mysql_fetch_array($result);

//$b="SELECT email FROM `buy` where email=".$b." "
    $con=mysql_connect('localhost','root','');
        mysql_select_db('jaguar');
        if(!$con)
        {
            echo "not connected";
        }
        else
            echo "connected";
$b=$_POST['varname1'];
$sq="SELECT * FROM `jaguar` WHERE id=".$b." ";
//$sql="SELECT * FROM `buy` WHERE id=".$a." ";
$res=mysql_query($sq);
$ro=mysql_fetch_array($res);
echo $ro['name'];
$f=$ro['name'];
$g=$ro['variant'];
$h=$ro['price'];
echo $row['email'];
$mailto = $row['email'];
$mailSub = "Booking Done";
$mailMsg = "Congrats you just bought a  car ".$f. " variant ".$g." at price " .$h."INR";
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

<html>
<body>
    <h1 align="center">Mail has been sent to the provided E-mail ID</h1>
</body>
</html>