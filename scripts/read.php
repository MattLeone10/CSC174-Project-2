<?php
	// 1. Create a database connection
	require_once("config.php");

	// 2. Perform database query
	$query  = "SELECT * FROM guestbook";
	$result = mysqli_query($connection, $query);
?>
<!doctype html>
<html>
<head>
	<title>Database Read</title>
</head>
<body>

	<h1>Database Read</h1>

	<ul>
	<?php
		// 3. Use returned data (if any)
		while($data = mysqli_fetch_assoc($result)) {
	?>
		<li>
			<?php echo 
				$data["firstName"], " ", $data["lastName"], 
				"<br><strong>", $data["email"], " ", $data["phoneNumber"]," ", $data["city"],"</strong>"; 
			?>
		</li>
	<?php } ?>
</ul>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>