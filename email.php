<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="1.css" >
	<title>send mails</title>
</head>
<body>

	<form method="POST" action="2.php">
	<div class="body">
	<h1>E-mail It....</h1>
		<table align="center">
			<tr>
				<td>To :</td>
				<td><input type="email" placeholder="enter your email" name="to"></td>
			</tr>
			<tr>
				<td>From :</td>
				<td><input type="email" placeholder="enter receiver's email" name="from"></td>
			</tr>
			<tr>
				<td>CC :</td>
				<td><input type="email" name="cc"></td>
			</tr>
			<tr>
				<td>BCC :</td>
				<td><input tupe="email" name="bcc"></td>
			</tr>
			<tr>
				<td>Subject :</td>
				<td><input type="text" name="subject"> </td>
			</tr>
			<tr>
				<td>Content</td>
				<td><input type="text" name="content"></td>
			</tr>
			<tr>
				<td></td>
			<td><input type="submit" name="submit" value="Submit" width="50%"></form></td>
		    
		    </tr>
</table>
	
	
</body>
</html>