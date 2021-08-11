<?php
function renderForm($count, $name, $email, $phone, $eat, $hangout, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>CSC 174 | Guest Book</title>
</head>
<body>
<?php
if ($error != ''){
	echo '<div '.$error.'</div>';
}
?>
	<form id="sign" method="post" action="">
		<input type="hidden" name="count" value="<?php echo $count;?>">
		<label for="firstName">First Name: </label> <input type="text" name="firstName" id="firstName" value="<?php echo $firstName;?>"><br>
		<label for="lastname">Last Name: </label> <input type="text" name="lastname" id="lastname" value="<?php echo $lastname;?>"><br>
		<label for="email">E-mail: </label> <input type="text" name="email" id="email" value="<?php echo $email;?>"><br>
		<label for="phoneNumber">Zipcode: </label> <input type="text" name="phoneNumber" id="phoneNumber" value="<?php echo $phoneNumber;?>"><br>
		<label for="city">City Visited: </label> <input type="text" name="city" id="city" value="<?php echo $city;?>"><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<div>
		<br>
		<a href="visitors.php">Go to Guest book</a>
	</div>
	<body>
	</html>
<?php 
}
?>