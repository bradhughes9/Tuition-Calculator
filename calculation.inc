
					<?php
					$CreditHours = $_POST['CreditHours'];
					$cost = $residency = "";
					$CreditHoursExemption = 14 && 15 && 16 && 17 && 18;
					$location = "";
					$error = "";
					
					if(isset($_POST['submit']))
					{
						if(is_numeric($_POST['CreditHours']))
						{

							if($_POST['residency'] == 'InCounty')
							{	
								$cost =  $CreditHours * 134.04;
								$location = 'In Lorain County';
								
							}
							if(($_POST['CreditHours'] == $CreditHoursExemption) && ($_POST['residency'] == 'InCounty'))
							{
								$cost = 1742.52;
								$location = 'In Lorain County';
							}
							if(($_POST['CreditHours'] > 22) && ($_POST['residency'] == 'InCounty'))
							{
								$error = "Credit hours must be between 1-22 Credit hours.";
							}
							if(($_POST['CreditHours'] < 22) && ($_POST['residency'] == 'InCounty'))
							{
								$error = "Credit hours must be between 1-22 Credit hours.";
							}
							
							if($_POST['residency'] == 'OutCounty')
							{
								$cost = $CreditHours * 159.22;
								$location = 'Out of Lorain County';
							}
							if(($_POST['CreditHours'] == $CreditHoursExemption) && ($_POST['residency'] == 'OutCounty'))
							{
								$cost = 2069.86;
								$location = 'Out of Lorain County';
							}
							if(($_POST['CreditHours'] > 22) && ($_POST['residency'] == 'OutCounty'))
							{
								$error = "Credit hours must be between 1-22 Credit hours.";
							}
							if(($_POST['CreditHours'] < 22) && ($_POST['residency'] == 'OutCounty'))
							{
								$error = "Credit hours must be between 1-22 Credit hours.";
							}
							
							if($_POST['residency'] == 'OutState')
							{
								$cost = $CreditHours * 310.79;
								$location = 'Out of State';
							}
							if(($_POST['CreditHours'] == $CreditHoursExemption) && ($_POST['residency'] == 'OutState'))
							{
								$cost = 4040.27;
								$location = 'Out of State';
							}							
							elseif(($_POST['CreditHours'] > 22) && ($_POST['residency'] == 'OutState'))
							{
								$error = "Credit hours must be between 1-22 Credit hours.";
							}
							elseif(($_POST['CreditHours'] < 22) && ($_POST['residency'] == 'OutState'))
							{
								$error = "Credit hours must be between 1-22 Credit hours.";
							}

							
							echo "<h2>Your Tuition Will Cost: </h2>";
							echo "<p>$ {$cost} while taking {$_POST['CreditHours']} Credit Hours {$location}.</p>";
						
					
						} 	else 
						{	echo"<h1>Numeric Values are Required for Credit Hours";
						}
					}
					
					?>