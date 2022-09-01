<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
body{
      font-family: TW Cen MT Condensed;
      font-weight: bold;
      padding: 5px;
    }
    </style>

</head>
<body>
	<h1 align="center">Details entered</h1>
<?php

$con = mysql_connect('localhost','root','');
mysql_select_db('buy');
if (!$con) {
die('Not connected : ' . mysql_error());
}
else echo "Connected Successfully\n";
$b=$_POST['varname'];
echo $b;
$v= $_POST['fname'];
$w= $_POST['mname'];
$x= $_POST['lname'];
$y= $_POST['add'];
$z= $_POST['email'];
$o= $_POST['id'];
echo $v,$w,$x,$y,$z,$o;
$sql = "INSERT INTO `buy`(`firstname`, `middlename`, `lastname`, `address`, `email`,`id`) VALUES ('$v','$w','$x','$y','$z','$o')";
if(mysql_query($sql)){
    echo "Records inserted successfully.";}
else
{
	echo "not done";
}



?>
<form action="payment5.php" method="post">
<table width="100%" class="table table-dark table-striped">
	<tr>
		<th>Firstname</th>
		<th>Middlename</th>
		<th>Lastname</th>
		<th>Address</th>
		<th>E-mail</th>
	</tr>
	<tr>
		<td><?php echo $_POST['fname'];?></td>
		<td><?php echo $_POST['mname'];?></td>
		<td><?php echo $_POST['lname'];?></td>
		<td><?php echo $_POST['add'];?></td>
		<td><?php echo $_POST['email'];?></td>
	</tr>


	<tr>
		<td></td>
		<td><button onclick="location.href='<?php echo $a?>'" class="btn btn-info">Click to edit</button></td>
		<td></td>
		<td><input type="hidden" name="varname" value="<?php echo $_POST['id']?>">
			<input type="hidden" name="varname1" value="<?php echo $b ?>">
			<input type="submit" value="Submit" class="btn btn-info"></td>
		<td></td>
	</table>
</form>
</body>
</html>
