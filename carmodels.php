<html>
<head>
	</head>

	<body>
		<?php 
		$con=mysql_connect('localhost','root','');
		mysql_select_db('cars');
		if(!$con)
		{
			echo "not connected";
		}
		else
			echo "connected";
		?>
<table>
	<tr>
		<td><img src="https://auto.ndtvimg.com/car-images/gallery/maruti-suzuki/alto-800/exterior/maruti-suzuki-alto800-front.jpg?v=2016-06-01"></td>
		<td>Alto 800</td>
		<td>Standard</td>
		<td>2.63 lakh<br>
			On-road: 2.91 lakh
		</td>
	</tr>
</table>


	</body>
	</html>
