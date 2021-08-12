<?php 
include "inc/top-part.php"; 
?>
	<div class="container">

		<header>
			<h1>Visit our Cities</h1>
		</header>

		<?php 
		include "inc/nav.php"; 
		?>

		<!-- hero image -->

		<article class="row justify-content-evenly">
			<h2 class="text-center">Our Cities:</h2>

			<div class="col-3 card">
				<a href="chicago.php">
					<!-- background image to represent Chicago -->
					<h3>Chicago, IL</h3>
					<p>The third largest city in the world, Chicago sits on the shore of Lake Michigan and has plenty of museums, parks, and other attractions to offer.</p>
				</a>
			</div>

			<div class="col-3 card">
				<a href="phoenix.php">
					<!-- background image to represent Phoenix -->
					<h3>Phoenix, AZ</h3>
					<p>Located in the Arizona desert, Phoenix is home to natural wonders and hotel resorts alike and offers some of the best Southwestern food and art.</p>
				</a>
			</div>

			<div class="col-3 card">
				<a href="ridgewood.php card">
					<!-- background image to represent Ridgewood -->
					<h3>Ridgewood, NJ</h3>
					<p>Located near Manhattan with a ridge providing a view of the city, Ridgewood is home to several parks, a schoolhouse museum, and a landscape architectural center.</p>
				</a>
			</div>
		</article>

		<aside class="row align-items-center">
			<?php include "scripts/insert.php";?>
		</aside>

	</div>

<?php include "inc/bottom-part.php"; ?>