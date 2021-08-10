<?php
include ('renderform.php');

require_once ('config.php');

if (isset($_POST['submit'])) {
	if (is_numeric($_POST['count'])){
		$count= $_POST['count'];
		$firstName = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstName']));
		$lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastname']));
		$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
		$phoneNumber = mysqli_real_escape_string($connection, htmlspecialchars($_POST['phoneNumber']));
		$city = mysqli_real_escape_string($connection, htmlspecialchars($_POST['city']));

		if ($firstName == ''){
			$error = "Please fill in required fields";

			renderform($count, $firstName, $lastname, $email, $phoneNumber, $city, $error);
		} else {
			$result = mysqli_query($connection, "UPDATE guestbook SET firstName='$firstName', lastname='$lastname', email='$email', phoneNumber='$phoneNumber', city='$city' WHERE count='$count'");

			if ($result){
				echo "success";
			}
			else{
				die("query failed");
			}

			header("Location: ../visitors.php");	
		}
	} else{
		echo "Error";
	}
} else{
	if (isset($_GET['count']) && is_numeric($_GET['count']) && $_GET['count'] >0 ) {
		$count = $_GET['count'];
		$result = mysqli_query($connection, "SELECT * FROM guestbook WHERE count=$count");
		$row = mysqli_fetch_array($result);

		if($row){
			$name = $row['firstName'];
			$email = $row['lastname'];
			$phone = $row['email'];
			$eat = $row['phoneNumber'];
			$hangout = $row['city'];

			renderForm($count, $firstName, $lastname, $email, $phoneNumber, $city, '');
		} else {
			echo "No results!";
		}
	} else {
		echo "Error";
	}
}
?>