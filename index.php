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

			<a href="chicago.php">
				<!-- background image to represent Chicago -->
				<h3>Chicago, IL</h3>
				<p>The third largest city in the world, Chicago sits on the shore of Lake Michigan and has plenty of museums, parks, and other attractions to offer.</p>
			</a>

			<a href="phoenix.php">
				<!-- background image to represent Phoenix -->
				<h3>Phoenix, AZ</h3>
				<p>Located in the Arizona desert, Phoenix is home to natural wonders and hotel resorts alike and offers some of the best Southwestern food and art.</p>
			</a>

			<a href="ridgewood.php">
				<!-- background image to represent Ridgewood -->
				<h3>Ridgewood, NJ</h3>
				<p>Located near Manhattan with a ridge providing a view of the city, Ridgewood is home to several parks, a schoolhouse museum, and a landscape architectural center.</p>
			</a>

		</article>

		<?php include "scripts/insert.php";?>
		<footer>
			<p>Ridgewood Copyright 2021</p>
			<p>CSC 174 Advanced Front End Web Development</p>
		</footer>

	</div>

	</body>

</html>