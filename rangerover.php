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
		<h1 align="center">Select Variant</h1>
		<?php 
		$con=mysql_connect('localhost','root','');
		mysql_select_db('rangerover');
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
		<form action="buy1.php" method="post">

		<td><img src="https://landrover.ssl.cdn.sdlmedia.com/636469708154037554QW.jpg?v=1" length='200px' width='200px'></td>
		<td>
			<?php
			$sql="SELECT * FROM `rangerover` where id='1'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['name'];?>

		</td>
		<td><?php
			$sql="SELECT * FROM `rangerover` where id='1' ";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['variant'];?>
</td>
		<td><?php
			$sql="SELECT * FROM `rangerover` where id='1'";
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
		<form action="buy1.php" method="post">

		<td><img src="https://landrover.ssl.cdn.sdlmedia.com/636469708154037554QW.jpg?v=1" length='200px' width='200px'></td>
		<td>
			<?php
			$sql="SELECT * FROM `rangerover` where id='2'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['name'];?>

		</td>
		<td><?php
			$sql="SELECT * FROM `rangerover` where id='2'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['variant'];?>
</td>
		<td><?php
			$sql="SELECT * FROM `rangerover` where id='2'";
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
		<form action="buy1.php" method="post">

		<td><img src="https://landrover.ssl.cdn.sdlmedia.com/636469708154037554QW.jpg?v=1" length='200px' width='200px'></td>
		<td>
			<?php
			$sql="SELECT * FROM `rangerover` where id='3'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['name'];?>

		</td>
		<td><?php
			$sql="SELECT * FROM `rangerover` where id='3'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['variant'];?>
</td>
		<td><?php
			$sql="SELECT * FROM `rangerover` where id='3'";
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
		<form action="buy1.php" method="post">

		<td><img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Land-Rover/Land-Rover-Range-Rover-Velar/6137/front-left-side-47.jpg" length='200px' width='200px'></td>
		<td>
			<?php
			$sql="SELECT * FROM `rangerover` where id='4'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['name'];?>

		</td>
		<td><?php
			$sql="SELECT * FROM `rangerover` where id='4'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['variant'];?>
</td>
		<td><?php
			$sql="SELECT * FROM `rangerover` where id='4'";
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
		<form action="buy1.php" method="post">

		<td><img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Land-Rover/Land-Rover-Range-Rover-Velar/6137/front-left-side-47.jpg" length='200px' width='200px'></td>
		<td>
			<?php
			$sql="SELECT * FROM `rangerover` where id='5'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['name'];?>

		</td>
		<td><?php
			$sql="SELECT * FROM `rangerover` where id='5'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['variant'];?>
</td>
		<td><?php
			$sql="SELECT * FROM `rangerover` where id='5'";
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
		<form action="buy1.php" method="post">

		<td><img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Land-Rover/Land-Rover-Range-Rover-Velar/6137/front-left-side-47.jpg" length='200px' width='200px'></td>
		<td>
			<?php
			$sql="SELECT * FROM `rangerover` where id='6'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['name'];?>

		</td>
		<td><?php
			$sql="SELECT * FROM `rangerover` where id='6'";
			$result=mysql_query($sql);

			$row = mysql_fetch_array($result);
			echo $row['variant'];?>
</td>
		<td><?php
			$sql="SELECT * FROM `rangerover` where id='6'";
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
