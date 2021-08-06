<!DOCTYPE html>

<html lang="en">

	<head>
		<title>CSC 174 | Phoenix</title>
	</head>

	<body>

	<div class="container">

		<header>
			<h1>Phoenix, AZ</h1>
			<img src="https://placebear.com/1250/256">
		</header>

		<?php 
		include "inc/nav.php"; 
		?>


		<article>
			<h2>Quick Facts</h2>
			<img src="https://placebear.com/300/400">

			<ul>
				<li>State: Arizona</li>
				<li>Region: Southwest</li>
				<li>Size: 517 square miles</li>
				<li>Population: 4.5 million</li>
			</ul>

			<h2>History of Phoenix</h2>

			<h3>City's Founding</h3>
			<p>Mollis. Et potenti pede hac faucibus mi per nascetur gravida sed urna aliquet montes pellentesque primis rhoncus pharetra. Suspendisse cursus parturient, interdum eget dapibus mollis ad conubia accumsan neque iaculis. Magnis sodales ultricies. Lorem eget dignissim senectus ullamcorper fusce consectetuer. Nisi felis. Aenean rhoncus suscipit viverra vulputate litora. Sem. Aenean.</p>

			<h3>Famous Historical Events</h3>
			<p>Lacus cum fringilla rhoncus magnis dis ullamcorper fringilla, elit pede. Nulla curabitur fermentum. Fringilla class ipsum. Tellus mauris magna proin facilisis porta maecenas metus suscipit aenean quisque aliquam. Non aliquet nullam aptent. Elementum ligula fermentum erat at dolor suscipit est ipsum dictumst eleifend Magnis aliquam purus fringilla fusce facilisis morbi.</p>

			<h2>What's it like in Phoenix?</h2>
			<h3>Landscape</h3>
			<p>Nunc senectus habitasse Massa lectus ligula tortor hac. Penatibus, primis imperdiet velit. Facilisis duis. Hac blandit vestibulum pretium etiam pellentesque diam dictum. Mi magnis Viverra nunc cum mus. Odio curabitur, dignissim, mauris Nibh cum magnis conubia semper feugiat mauris posuere vitae adipiscing mi cras, potenti lacinia ut imperdiet enim rhoncus.</p>

			<h3>Weather</h3>
			<p>Phoenix is famous for being very hot and very dry.  Phoenix's average July high is 105 degrees, with winter "cooling" the city down to an average January low of 43 degrees.  Phoenix only receives about 9 inches of rain per year, a quarter of the US average.</p>

			<img src="https://placebear.com/500/300">
			
		</article>

		<aside>
			<h2>Visit Phoenix</h2>
			<h3>Places to See</h3>
				<figure>
					<img src="images/botanical.jpg" alt="A sculpture of a pink head on a blue pedestal surrounded by cacti outside">
					<figcaption>Desert Botanical Garden</figcaption>
				</figure>

				<figure>
					<img src="images/lost_dutchman.jpg" alt="A large rock structure in the desert with a cactus to the right.">
					<figcaption>Lost Dutchman State Park</figcaption>
				</figure>

				<figure>
					<img src="images/scottsdale.jpg" alt="Three buildings styled like the Old West with three cars parked in front of them and metal cowboy sculptures to the right.">
					<figcaption>Scottsdale Old Town</figcaption>
				</figure>

			<h3>Places to Eat</h3>
				<figure>
					<img src="images/ghost_ranch.jpg" alt="A dining area with wooden tables, yellow walls, and southwest inspired decorations.">
					<figcaption>Ghost Ranch</figcaption>
				</figure>

				<figure>
					<img src="images/kai.jpg" alt="A spacious dining area with a gray and white interior and large windows.">
					<figcaption>Kai</figcaption>
				</figure>

				<figure>
					<img src="images/bbq.jpg" alt="One of the famous long lines for Little Miss BBQ waiting outside the building.">
					<figcaption>Little Miss BBQ</figcaption>
				</figure>

				<h3>Places to Stay</h3>
				<figure>
					<img src="images/san_carlos.jpg" alt="A large and old-fashioned hotel building with a sign that says San Carlos Hotel.">
					<figcaption>Hotel San Carlos</figcaption>
				</figure>

				<figure>
					<img src="images/biltmore.jpg" alt="A large brick building with many sections and stories">
					<figcaption>Arizona Biltmore</figcaption>
				</figure>

				<figure>
					<img src="images/hi_phoenix.jpg" alt="A hostel room with two sets of bunk beds with colorful bedding">
					<figcaption>HI Phoenix</figcaption>
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
			<p>Phoenix Copyright 2021</p>
			<p>CSC 174 Advanced Front End Web Development</p>
		</footer>

	</div>

	</body>

</html>