<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</head>

	<body background="https://images3.alphacoders.com/808/80877.jpg">
		<h1 align="center">Select Variant</h1>
		<?php 
		$con=mysql_connect('localhost','root','');
		mysql_select_db('bmw');
		if(!$con)
		{
			echo "not connected";
		}
		else
			echo "connected";
		
		?>
<table border="1px" align="center" class="table table-dark table-striped">
	<tr>
		<th>Image</th>
		<th>Model</th>
		<th>Variant</th>
		<th>Price(INR)</th>
		<th>Option</th>
	</tr>
	<tr>
		<form action="buy5.php" method="post">

		<td><img src="https://c4d709dd302a2586107d-f8305d22c3db1fdd6f8607b49e47a10c.ssl.cf1.rackcdn.com/thumbnails/stock-images/5dc64248fbf4f2ef37fb867c929ef9fc.png" length='200px' width='200px'></td>
		<td>
			<?php
			$sql="SELECT * FROM `bmw` where id='1'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['name'];?>

		</td>
		<td><?php
			$sql="SELECT * FROM `bmw` where id='1' ";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['variant'];?>
</td>
		<td><?php
			$sql="SELECT * FROM `bmw` where id='1'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['price'];?>

		</td>
		<td>
			
			<input type="hidden" name="varname" value="1">
    <input type="submit" value="Buy" class="btn btn-info"><br><br>
			<input type="submit" value="Rent" class="btn btn-info">	
		</td>
		</form>
	</tr>
	<tr>
		<form action="buy5.php" method="post">

		<td><img src="https://c4d709dd302a2586107d-f8305d22c3db1fdd6f8607b49e47a10c.ssl.cf1.rackcdn.com/thumbnails/stock-images/5dc64248fbf4f2ef37fb867c929ef9fc.png" length='200px' width='200px'></td>
		<td>
			<?php
			$sql="SELECT * FROM `bmw` where id='2'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['name'];?>

		</td>
		<td><?php
			$sql="SELECT * FROM `bmw` where id='2'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['variant'];?>
</td>
		<td><?php
			$sql="SELECT * FROM `bmw` where id='2'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['price'];?>

		</td>
		<td>
			
			<input type="hidden" name="varname" value="2">
    <input type="submit" value="Buy" class="btn btn-info"><br><br>
			<input type="submit" value="Rent" class="btn btn-info">	
		</td>
		</form>
	</tr>
	<tr>
		<form action="buy5.php" method="post">

		<td><img src="https://c4d709dd302a2586107d-f8305d22c3db1fdd6f8607b49e47a10c.ssl.cf1.rackcdn.com/thumbnails/stock-images/5dc64248fbf4f2ef37fb867c929ef9fc.png" length='200px' width='200px'></td>
		<td>
			<?php
			$sql="SELECT * FROM `bmw` where id='3'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['name'];?>

		</td>
		<td><?php
			$sql="SELECT * FROM `bmw` where id='3'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['variant'];?>
</td>
		<td><?php
			$sql="SELECT * FROM `bmw` where id='3'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['price'];?>

		</td>
		<td>
			
			<input type="hidden" name="varname" value="3">
    <input type="submit" value="Buy" class="btn btn-info"><br><br>
			<input type="submit" value="Rent" class="btn btn-info">	
		</td>
		</form>
	</tr>
	<tr>
		<form action="buy5.php" method="post">

		<td><img src="https://mbtskoudsalg.com/images/bmw-x3-png-4.png" length='200px' width='200px'></td>
		<td>
			<?php
			$sql="SELECT * FROM `bmw` where id='4'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['name'];?>

		</td>
		<td><?php
			$sql="SELECT * FROM `bmw` where id='4'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['variant'];?>
</td>
		<td><?php
			$sql="SELECT * FROM `bmw` where id='4'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['price'];?>

		</td>
		<td>
			
			<input type="hidden" name="varname" value="4">
    <input type="submit" value="Buy" class="btn btn-info"><br><br>
			<input type="submit" value="Rent" class="btn btn-info">	
		</td>
		</form>
	</tr>
	<tr>
		<form action="buy5.php" method="post">

		<td><img src="https://mbtskoudsalg.com/images/bmw-x3-png-4.png" length='200px' width='200px'></td>
		<td>
			<?php
			$sql="SELECT * FROM `bmw` where id='5'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['name'];?>

		</td>
		<td><?php
			$sql="SELECT * FROM `bmw` where id='5'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['variant'];?>
</td>
		<td><?php
			$sql="SELECT * FROM `bmw` where id='5'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['price'];?>

		</td>
		<td>
			
			<input type="hidden" name="varname" value="5">
    <input type="submit" value="Buy" class="btn btn-info"><br><br>
			<input type="submit" value="Rent" class="btn btn-info">	
		</td>
		</form>
	</tr>
	<tr>
		<form action="buy5.php" method="post">

		<td><img src="https://mbtskoudsalg.com/images/bmw-x3-png-4.png" length='200px' width='200px'></td>
		<td>
			<?php
			$sql="SELECT * FROM `bmw` where id='6'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['name'];?>

		</td>
		<td><?php
			$sql="SELECT * FROM `bmw` where id='6'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['variant'];?>
</td>
		<td><?php
			$sql="SELECT * FROM `bmw` where id='6'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['price'];?>

		</td>
		<td>
			
			<input type="hidden" name="varname" value="6">
    <input type="submit" value="Buy" class="btn btn-info"><br><br>
			<input type="submit" value="Rent" class="btn btn-info">	
		</td>
		</form>
	</tr>

</table>


	</body>
	</html>
