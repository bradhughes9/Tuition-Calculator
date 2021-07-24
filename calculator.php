<!DOCTYPE HTML html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/lab8.css"/>
		<link rel="stylesheet" href="css/firefox.css" />
		<link href="chart.php" />
		<link href="calculator.php" />
		<title> lab 8</title>
		
				<script>
					function loadDoc() {
					var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					document.getElementById("demo").innerHTML =
					this.responseText;
					}
					};
					xhttp.open("GET", "calculation.php", true);
					xhttp.send();
					}
				</script>
	</head>
	<div class="page">
	
	<body>
	
		<?php include ("nav.inc"); ?>
	
		<section>
			
			<h1>Tuition Calculator</h1>
			<br>
			
					<h2>Your Tuition</h2>
					<form method="post" action="calculator.php" id="form">  
						Credit Hours (1-22): <input type="number" name="CreditHours" required>  
					  <br><br>
					  Residency:
					  <input type="radio" name="residency" value="InCounty" required>Lorain County Resident
					  <input type="radio" name="residency" value="OutCounty" required>Out-of-County Resident
					  <input type="radio" name="residency" value="OutState" required>Out-of-State Resident
					  <br><br>
						<button id="demo" type="submit" value="submit" onclick="loadDoc()" name="submit">Calculate</button>
						<button id="demo" type="reset" value="reset" name="reset">Reset</button>	

					
					</form>		


		<?php include ("calculation.php"); ?>


		</section>
	
	
	
	
	
	</body>
<?php include ("footer.inc") ?>

</html>