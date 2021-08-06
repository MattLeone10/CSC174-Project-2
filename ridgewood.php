<!DOCTYPE html>

<html lang="en">

	<head>
		<title>CSC 174 | Ridgewood</title>
	</head>

	<body>

	<div class="container">

		<header>
			<h1>Ridgewood, NJ</h1>
			<img src="https://placebear.com/1250/256">
		</header>

		<?php 
		include "inc/nav.php"; 
		?>

		<article>
			<h2>Quick Facts</h2>
			<img src="https://placebear.com/300/400">

			<ul>
				<li>State: New Jersey</li>
				<li>Region: Mid-Atlantic</li>
				<li>Size: 5.8 square miles</li>
				<li>Population: 25,000</li>
			</ul>

			<h2>History of Ridgewood</h2>

			<h3>City's Founding</h3>
			<p>In 1700, Johannes Van Emburgh built the first home in Ridgewood, having purchased a 250 acres (100 ha) property in 1698. The Village of Ridgewood was created on November 20, 1894. In 1902, the village added portions of Orvil Township, which were returned to Orvil Township in 1915. In 1925, Ridgewood Village acquired area from Franklin Township (remainder now dissolved as Wyckoff). On February 9, 1971, Ridgewood acquired area from Washington Township. On May 28, 1974, it acquired area from Ho-Ho-Kus. The name of the village derives from the characteristics of its terrain.</p>

			<h3>Famous Historical Events</h3>
			<p>Ridgewood Train Station Circa 1900The railroad arrived in 1848 and times changed forever.  In the beginning, the nearest stop was in Hohokus.  However, mill owners clamored for a closer one and in 1851 a stop was created near the present-day train station.  A second track was added in 1865 and two more in 1902-03.  With the coming of the railroad, the center of town moved from the Paramus Church area to the intersection of Ridgewood Avenue and the railroad tracks. Commerical development clustered east of the station. Ridgewood grew steadily, slowly supplanting farms with houses and stores.</p>

			<h2>What's it like in Ridgewood?</h2>
			<h3>Landscape</h3>
			<p>Nunc senectus habitasse Massa lectus ligula tortor hac. Penatibus, primis imperdiet velit. Facilisis duis. Hac blandit vestibulum pretium etiam pellentesque diam dictum. Mi magnis Viverra nunc cum mus. Odio curabitur, dignissim, mauris Nibh cum magnis conubia semper feugiat mauris posuere vitae adipiscing mi cras, potenti lacinia ut imperdiet enim rhoncus.</p>

			<h3>Weather</h3>
			<p>Ridgewood's weather is typical for the US.  The town receives 48 inches of rainfall and 24 inches of snow per year.  The Mid-Atlantic region experiences warm summers and cold winters.  Ridgewood's average July high is 83 degree and its average January low is 18 degrees.</p>

			<img src="https://placebear.com/500/300">
			
		</article>

		<aside>
			<h2>Visit Ridgewood</h2>
			<h3>Places to See</h3>
				<figure>
					<img src="images/schoolhouse.jpg" alt="A white building with a pointed roof surrounded by trees.">
					<figcaption>Schoolhouse Museum</figcaption>
				</figure>

				<figure>
					<img src="images/james_rose.jpg" alt="A curved stone path through a garden with a gate and a decorative structure to the right.">
					<figcaption>James Rose Center</figcaption>
				</figure>

				<figure>
					<img src="images/graydon.jpg" alt="A pool and a grassy area with a tree on each side of the image.  There are people to the right and tents in the distance.">
					<figcaption>Graydon Park</figcaption>
				</figure>

			<h3>Places to Eat</h3>
				<figure>
					<img src="images/raymonds.jpg" alt="A brick building with large windows.  A black and red sign with the name Raymond's hangs above the windows.">
					<figcaption>Raymond's</figcaption>
				</figure>

				<figure>
					<img src="images/village_green.jpg" alt="A cream building with brown trim and supports and a gray peaked roof.  There is a large clock on the building's face.">
					<figcaption>Village Green Restaurant</figcaption>
				</figure>

				<figure>
					<img src="images/cafe_37.jpg" alt="Two tables of people eating outside on a patio.">
					<figcaption>Cafe 37</figcaption>
				</figure>

				<h3>Places to Stay</h3>
				<figure>
					<img src="images/riverview.jpg" alt="The front of a brick house.  There is a white door, bench and windows with green shutters.">
					<figcaption>Riverview Bed and Breakfast</figcaption>
				</figure>

				<figure>
					<img src="images/hudson.jpg" alt="A two-story yellow and brown house with a porch and hedges in front.">
					<figcaption>Casa Hudson</figcaption>
				</figure>

				<figure>
					<img src="images/waterstone.jpg" alt="A cream two-story house with a deck to the right.  A wooden staircase leads to the front door.">
					<figcaption>Waterstone Inn</figcaption>
				</figure>
			
			<!-- FPO map -->
			<iframe src="https://www.google.com/maps/d/u/1/embed?mid=1h18b6_6lk0zOcIDRPwTRwqqiOuV2BBhX" width="300" height="300"></iframe>

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