
<!DOCTYPE html>
<head>
<title>car sell form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
function validateForm() {
    var x = document.forms["myform"]["fname"].value;
    var y = document.forms["myform"]["mname"].value;
    var z = document.forms["myform"]["lname"].value;
    var w = document.forms["myform"]["add"].value;
    if (x == ""||y==""||z==""||w=="") {
        alert("Details must be filled out");
        return false;
    
    }
}
</script>
<style>
body{
      font-family: TW Cen MT Condensed;
      font-weight: bold;
      padding: 5px;
    }
    </style>

</head>
<body align="center">
    <?php
$b=$_POST['varname'];
echo $b;?>
    <?php
    $con=mysql_connect('localhost','root','');
        mysql_select_db('toyota');
        if(!$con)
        {
            echo "not connected";
        }
        else
            echo "connected";

$a=$_POST['varname'];
$sql="SELECT * FROM `toyota` WHERE id=".$a." ";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

?>

	<div class="container">

	<h1 align="center">ENTER YOUR DETAILS</h1>
<table align="center" width="100%">
    <tr>
        <td><h3 align="">Car you Chose</h3></td>
    </tr>
    <tr>
        <td align="center"><?php 
                //header("Content-type: image/jpeg");
                $b=$row['image'];
                
                    ?>
                        <img src='<?php echo $b?>' height="200px" width="350px">
                    </td>
        </tr>
        <tr>
        <td><?php
                echo $row['name'];?>
        </td>
        <td><?php
                echo $row['variant'];?>
        </td>
        <td><?php
                echo $row['price'];?>
        </td>
    </tr>
</table>

<form action="result3.php" method="post" id="demoForm" class="demoForm" name="myform" onsubmit="return validateForm()">
	<div class="container">
	<table align="center">
		<tr align="left">
	<td>First Name:</td>
	<td>Middle Name:</td>
	<td>Last Name:</td>
	</tr><br>
	<tr>
		<td><input type="text" class="form-control form-rounded" name="fname"></td>
		<td><input type="text" class="form-control form-rounded" name="mname"></td>
		<td><input type="text" class="form-control form-rounded" name="lname"></td>
	</tr>
	<tr><td></td>
	</tr>
	<tr align="left">
	<td>Address:</td>
	<td><textarea placeholder="Enter Address" class="form-control form-rounded" rows="3" name="add"></textarea></td>
</tr>
<tr>
    <td>E-mail:<input type="email" name="email" width="100%"></td>
    <td>ID:<input type="number" name="id" ></td>
    </tr>
<tr>
</head>

    


<table>
	<tr>
</tr>
</table>
	</td>
	</tr>
<tr align='center'>
<td><input type="hidden" name="varnam" value="buy3.php">
    <input type="reset" value="Reset"></td>
 <td><input type="hidden" name="varname" value="<?php echo $_POST['varname']?>">
    <input type="submit" value="Submit" ></td>
</tr>
</table>
</div>
</div>
</form>

</body>
</html>