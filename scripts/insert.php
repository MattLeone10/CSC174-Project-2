<?php
include ('renderform.php');

include ('config.php');

if (isset($_POST['submit'])) {
	$firstName = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstName']));
	$lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastname']));
	$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
	$phoneNumber = mysqli_real_escape_string($connection, htmlspecialchars($_POST['phoneNumber']));
	$city = mysqli_real_escape_string($connection, htmlspecialchars($_POST['hangout']));

	if ($firstName == ''){
		$error = "Please fill in required fields";

		renderForm($count, $firstName,$error);
	} else {
		$result = mysqli_query($connection, "INSERT INTO guestbook (firstName, lastname, email, phoneNumber, city) VALUES ('$firstName','$lastname','$email','$phoneNumber','$city')");

		header("Location: index.php");
	}
} else {
	renderForm('','','','','','','');
}
?>