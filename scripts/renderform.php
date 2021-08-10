<?php
function renderForm($count, $name, $email, $phone, $eat, $hangout, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title> Add or Edit an entry</title>
</head>
<body>
<?php
if ($error != ''){
	echo '<div '.$error.'</div>';
}
?>
	<form method="post" action="">
		<input type="hidden" name="count" value="<?php echo $count;?>">
		<h2>Contact Information</h2>
		<p>Give us your information so we know you were here!</p>
		<label for="firstName"> Write down your first name:</label> <input type="text" name="firstName" id="firstName" value="<?php echo $firstName;?>"><br>
		<label for="lastname"> Last Name:</label> <input type="text" name="lastname" id="lastname" value="<?php echo $lastname;?>"><br>
		<label for="email"> E-mail:</label> <input type="text" name="email" id="email" value="<?php echo $email;?>"><br>
		<label for="phoneNumber"> Write down your phone number:</label> <input type="text" name="phoneNumber" id="phoneNumber" value="<?php echo $phoneNumber;?>"><br>
		<label for="city"> Write down what city you visited:</label> <input type="text" name="city" id="city" value="<?php echo $city;?>"><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<div>
		<br>
		<a href="visitors.php">Cancel</a>
	</div>
	<body>
	</html>
<?php 
}
?>