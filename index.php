<!DOCTYPE html>

<html lang="en">

	<head>
		<title>CSC 174 | Project 2</title>
	</head>

	<body>

	<div class="container">

		<header>
			<h1>Visit our Cities</h1>
		</header>

		<?php 
		include "inc/nav.php"; 
		?>

		<!-- hero image -->

		<article>
			<h2>Our Cities:</h2>

			<!-- background image to represent Chicago -->
			<h3>Chicago, IL</h3>
			<p>Aenean malesuada Semper curabitur ipsum cum inceptos platea dignissim consequat rhoncus pede dolor. Pulvinar vel varius. Massa elementum litora nulla quis, penatibus fusce nullam magnis parturient dignissim aliquet Dignissim turpis.</p>

			<!-- background image to represent Phoenix -->
			<h3>Phoenix, AZ</h3>
			<p>Aenean malesuada Semper curabitur ipsum cum inceptos platea dignissim consequat rhoncus pede dolor. Pulvinar vel varius. Massa elementum litora nulla quis, penatibus fusce nullam magnis parturient dignissim aliquet Dignissim turpis.</p>

			<!-- background image to represent Ridgewood -->
			<h3>Ridgewood, NJ</h3>
			<p>Aenean malesuada Semper curabitur ipsum cum inceptos platea dignissim consequat rhoncus pede dolor. Pulvinar vel varius. Massa elementum litora nulla quis, penatibus fusce nullam magnis parturient dignissim aliquet Dignissim turpis.</p>

		</article>

		<aside id="homepage_form">
			
			<h2>Sign the Guest Book<h2>
			<form method="post" action="">

			<label for="firstName">First Name:</label>
			<input type="text" name="firstName"> <br> <br>

			<label for="lastname">Last Name:</label>
			<input type="text" name="lastname" id="lastname"> <br> <br>

			<label for="email">Email:</label>
			<input type="text" name="email" id="email"> <br> <br>

			<label for="phoneNumber">Zipcode:</label>
			<input type="text" name="zipcode" id="zipcode"> <br> <br>

			<label for="phoneNumber">City Visited:</label>
			<input type="text" name="city" id="city"> <br> <br>

			<div class = "submit"><input type="submit" value="Signed!"></div>

		</aside>

		<footer>
			<p>Ridgewood Copyright 2021</p>
			<p>CSC 174 Advanced Front End Web Development</p>
		</footer>

	</div>

	</body>

</html>