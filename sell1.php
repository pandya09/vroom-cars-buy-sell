<!doctype html>
<html>
	<head>
		<title>Vroom</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  		<link rel="stylesheet" type="text/css" href="\sell.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  		<style type="text/css">
  		body{
	font-family: TW Cen MT Condensed;
	font-weight: bold;
      padding: 5px;
      margin: 10px;
}
h1 {
		font-family: TW Cen MT Condensed;
	font-weight: bold;
      padding: 5px;
      margin: 5px;
}
  			<style>

/* Reset Select */
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #2c3e50;
  background-image: none;
}
/* Custom Select */
.select {
  position: relative;
  display: block;
  width: 170px;
  height: 3em;
  line-height: 3;
  background: #2c3e50;
  overflow: hidden;
  border-radius: .25em;
}
select {
  width: 50%;
  height: 100%;
  margin: 0;
  padding: 0 0 0 .5em;
  color: #fff;
  cursor: pointer;
}
select::-ms-expand {
  display: none;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  padding: 0 1em;
  background: #34495e;
  pointer-events: none;
}
/* Transition */
.select:hover::after {
  color: #f39c12;
}
.select::after {
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}

.btn{
	padding: 8px;
	padding-left: 10px;
	padding-right: 10px;
}
  		</style>

	</head>
	<script type="text/javascript">
		var makesByModel = {
		    Hyundai: ["Grand i10", "Elite i20", "Verna", "EON", "Santro", "Elantra"],
		    Toyota: ["Etios Cross", "Yaris", "Corolla Altis", "Fortuner", "Prius"],
		    Honda: ["Amaze", "City", "Brio", "Accord", "WR-V", "BR-V"],
		    Maruti: ["Ciaz", "Baleno RS", "S-Cross", "Swift", "Dzire", "Vitara Brezza"],
		    Jaguar: ["XE", "XF", "XJ", "F-Pace", "F-Type", "I-Pace"],
		    BMW: ["X5 M", "M4 Coupe", "GT", "X1", "M760Li"],
		    Rover: ["Sport", "Velar", "Evoque", "Discovery", "Discovery Sport"],
		    Jeep: ["Compass", "Wrangler Unlimited", "Grand Cherokee", "Grand Cherokee SRT"],
		    Mercedes: ["A 180 Sport", "C Class Cabriolet", "E 200", "Maybach S 500"],
		    Nissan: ["Sunny", "Terrano", "Micra Active", "GT-R"]
		}


    	function changemod(value) {
    	    if (value.length == 0) document.getElementById("model").innerHTML = "<option></option>";
    	    else {
    	        var modOptions = "";
    	        for (modelId in makesByModel[value]) {
    	            modOptions += "<option>" + makesByModel[value][modelId] + "</option>";
    	        }
    	        document.getElementById("model").innerHTML = modOptions;
    	    }
    	}
    	// function changeyear(value) {
    	// 	if(value.length == 0) document.getElementById("year").innerHTML = "<option></option>";
    		
    	// }



	</script>
	<body>
		<div class="body-content">
			
		<form method="post" name="sell_car" action="" enctype="multipart/form-data">
			<br>
			<div class="form-control">
				<table>
					<tr>
						<th style="padding-left: 50px;">Select make</th>
						<th>Select model</th>
						<th>Select year</th>
						<th>EXPECTED PRICE (&#8377;)</th>  
					</tr>
					<tr><td style="padding-right: 100px; padding-left: 50px;">
							<select name="make" id="make" class="select" onChange="changemod(this.value);">
							    <option value="" disabled selected>Select</option>
							    <option value="Hyundai">Hyundai</option>
							    <option value="Toyota">Toyota</option>
							    <option value="Honda">Honda</option>
							    <option value="Maruti">Maruti</option>
							    <option value="Jaguar">Jaguar</option>
							    <option value="BMW">BMW</option>
							    <option value="Rover">Range Rover</option>
							    <option value="Jeep">Jeep</option>
							    <option value="Mercedes">Mercedes Benz</option>
							    <option value="Nissan">Nissan</option>
							</select></td><td style="padding-right: 100px;">
							<select name="model" id="model" class="select">
							    <option value="" disabled selected>Select</option>
							</select>
						</td>
						<td style="padding-right: 100px;">
							<select name="year" id="year" class="select">
								<option value="" disabled selected>Select</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>	
							</select>
						</td>
						<td style="padding-right: 150px;">
							<select name="price" id="price" class="select">
								<option value="" disabled selected>Select</option>
								<option value="5">5,00,000</option>
								<option value="6">6,00,000</option>
								<option value="7">7,00,000</option>
								<option value="8">8,00,000</option>
								<option value="9">9,00,000</option>
								<option value="10">10,00,000</option>
								<option value="11">11,00,000</option>
								<option value="12">12,00,000</option>
								<option value="13">13,00,000</option>
								<option value="14">14,00,000</option>
								<option value="15">15,00,000</option>
							</select>
						</td>
						<td>
							<input type="submit" name="sell_now" value="SELL NOW" class="btn btn-block btn-primary">
						</td>
					</tr>
				</table>
			</div>
			
			<br>
			<div class="tp-bgimg defaultimg" style="background-color: rgba(0, 0, 0, 0);
											background-repeat: no-repeat;
											background-image: url(http://themes.potenzaglobalsolutions.com/html/cardealer/revolution/assets/3ecde-01.jpg);
											background-size: cover;
											background-position: center center;
											width: 100%;
											height: 550px;
											opacity: 1;
											visibility: inherit; 
											z-index: 20;"><br><br><br><br><br><br><br>
				<h1>&nbsp;&nbsp;&nbsp;&nbsp;WE ARE HERE </h1><br>
				<h1>&nbsp;&nbsp;&nbsp;&nbsp;TO SELL YOUR CAR</h1><br>
				<h1>&nbsp;&nbsp;&nbsp;&nbsp;AT THE BEST PRICES.</h1><br>
			</div>
			<br><br><br>

			
		</form>

		</div>
	</body>
</html>