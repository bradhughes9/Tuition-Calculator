
					<?php
					
					if(isset($_POST['CreditHours'])){ $CreditHours = $_POST['CreditHours'];}
					$Cost = $residency = "";
					$location = "";
					$error = "";
					$exception = 14;
					$exception1 =15;
					$exception2 =16;
					$exception3 =17;
					$exception4 =18;
					
					if(isset($_POST['submit']))
					{
						if(is_numeric($_POST['CreditHours']))
						{
							//incounty

							if(($_POST['CreditHours'] == $exception) && ($_POST['residency'] == 'InCounty'))
								{
									$Cost = 1742.52;
								}
								elseif(($_POST['CreditHours'] == $exception1) && ($_POST['residency'] == 'InCounty'))
								{
									$Cost = 1742.52;
								}
								elseif(($_POST['CreditHours'] == $exception2) && ($_POST['residency'] == 'InCounty'))
								{
									$Cost = 1742.52;
								}
								elseif(($_POST['CreditHours'] == $exception3) && ($_POST['residency'] == 'InCounty'))
								{
									$Cost = 1742.52;
								}
								elseif(($_POST['CreditHours'] == $exception4) && ($_POST['residency'] == 'InCounty'))
								{
									$Cost = 1742.52;
								}
								elseif(($_POST['CreditHours'] < 1) && ($_POST['residency'] == 'InCounty'))
								{
									$Cost = 0;
									$error = "ERROR: You must take at least 1 credit hour";
								}
								elseif(($_POST['CreditHours'] > 22) && ($_POST['residency'] == 'InCounty'))
								{
									$Cost = 0;
									$error = "You can't take more than 22 credit hours.";
								}
								elseif($_POST['residency'] == 'InCounty')
								{	
									$Cost =  $CreditHours * 134.04;
									$location = 'In Lorain County';	
								}
							//out of county

							if(($_POST['CreditHours'] == $exception) && ($_POST['residency'] == 'OutCounty'))
								{
									$Cost = 2096.86;
								}
								elseif(($_POST['CreditHours'] == $exception1) && ($_POST['residency'] == 'OutCounty'))
								{
									$Cost = 2096.86;
								}
								elseif(($_POST['CreditHours'] == $exception2) && ($_POST['residency'] == 'OutCounty'))
								{
									$Cost = 2096.86;
								}
								elseif(($_POST['CreditHours'] == $exception3) && ($_POST['residency'] == 'OutCounty'))
								{
									$Cost = 2096.86;
								}
								elseif(($_POST['CreditHours'] == $exception4) && ($_POST['residency'] == 'OutCounty'))
								{
									$Cost = 2096.86;
								}
								elseif(($_POST['CreditHours'] < 1) && ($_POST['residency'] == 'OutCounty'))
								{
									$Cost = 0;
									$error = "ERROR: You must take at least 1 credit hour";
								}
								elseif(($_POST['CreditHours'] > 22) && ($_POST['residency'] == 'OutCounty'))
								{
									$Cost = 0;
									$error = "You can't take more than 22 credit hours.";
								}
								elseif($_POST['residency'] == 'OutCounty')
								{
									$Cost = $CreditHours * 159.22;
									$location = 'Out of Lorain County';
								}								
							//out of state

							if(($_POST['CreditHours'] == $exception) && ($_POST['residency'] == 'OutState'))
								{
									$Cost = 4040.27;
								}
								elseif(($_POST['CreditHours'] == $exception1) && ($_POST['residency'] == 'OutState'))
								{
									$Cost = 4040.27;
								}
								elseif(($_POST['CreditHours'] == $exception2) && ($_POST['residency'] == 'OutState'))
								{
									$Cost = 4040.27;
								}
								elseif(($_POST['CreditHours'] == $exception3) && ($_POST['residency'] == 'OutState'))
								{
									$Cost = 4040.27;
								}
								elseif(($_POST['CreditHours'] == $exception4) && ($_POST['residency'] == 'OutState'))
								{
									$Cost = 4040.27;
								}
								elseif(($_POST['CreditHours'] < 1) && ($_POST['residency'] == 'OutState'))
								{
									$Cost = 0;
									$error = "ERROR: You must take at least 1 credit hour";
									
								}
								elseif(($_POST['CreditHours'] > 22) && ($_POST['residency'] == 'OutState'))
								{
									$Cost = 0;
									$error = "You can't take more than 22 credit hours.";
								}
								elseif($_POST['residency'] == 'OutState')
								{
									$Cost = $CreditHours * 310.79;
									$location = 'Out of State';
								}


						}
					}
		
	
		echo "<h2>Your Tuition Cost:</h2>";
		echo "<p>$Cost</p>";
		echo "<br>";
		echo "<p> Credits Hours: </p>";
			if(isset($_POST['submit']))
			{
				echo "<p> {$_POST['CreditHours']} </p>";
			}
		echo "<br>";
		echo "<p>Residency: </p>";
					if(isset($_POST['submit']))
			{
				echo "<p> {$_POST['residency']} </p>";
			}
		echo "<br>";
		echo "<p>$error</p>"; 
	
					
					?>