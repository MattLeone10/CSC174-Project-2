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

		<navbar class="menu">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="chicago.html">Chicago</a></li>
				<li><a href="phoenix.html">Phoenix</a></li>
				<li><a href="ridgewood.html">Ridgewood</a></li>
			</ul>
		</navbar>

		<section>
			<img src="https://placebear.com/1250/800">
		</section>

		<article>
			<h2>Our Cities:</h2>

			<img src="https://placebear.com/150/150">
			<h3>Chicago, IL</h3>
			<p>Aenean malesuada Semper curabitur ipsum cum inceptos platea dignissim consequat rhoncus pede dolor. Pulvinar vel varius. Massa elementum litora nulla quis, penatibus fusce nullam magnis parturient dignissim aliquet Dignissim turpis.</p>

			<img src="https://placebear.com/150/150">
			<h3>Phoenix, AZ</h3>
			<p>Aenean malesuada Semper curabitur ipsum cum inceptos platea dignissim consequat rhoncus pede dolor. Pulvinar vel varius. Massa elementum litora nulla quis, penatibus fusce nullam magnis parturient dignissim aliquet Dignissim turpis.</p>

			<img src="https://placebear.com/150/150">
			<h3>Ridgewood, NJ</h3>
			<p>Aenean malesuada Semper curabitur ipsum cum inceptos platea dignissim consequat rhoncus pede dolor. Pulvinar vel varius. Massa elementum litora nulla quis, penatibus fusce nullam magnis parturient dignissim aliquet Dignissim turpis.</p>

		</article>

		<aside>
			<h2>Order our Free Travel Guide<h2>
			<p>Fill out this form and we'll email you our free guide with all you need to plan a trip to all three cities!</p>

			<form method="post" action="">

			<label for="firstName">First Name:</label>
			<input type="text" name="firstName"> <br> <br>

			<label for="lastname">Last Name:</label>
			<input type="text" name="lastname" id="lastname"> <br> <br>

			<label for="email">Email:</label>
			<input type="text" name="email" id="email"> <br> <br>

			<label for="phoneNumber">Zipcode:</label>
			<input type="text" name="phoneNumber" id="phoneNumber"> <br> <br>

			<div class = "submit"><input type="submit" value="Send me my guide!"></div>

	</form> 

		</aside>

		<footer>
			<p>Ridgewood Copyright 2021</p>
			<p>CSC 174 Advanced Front End Web Development</p>
		</footer>

	</div>

	</body>

</html>