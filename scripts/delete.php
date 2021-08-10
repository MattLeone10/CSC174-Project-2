<?php

include ('config.php');

if (isset($_GET['count']) && is_numeric($_GET['count'])){
	$count = $_GET['count'];

	$result = mysqli_query($connection, "DELETE FROM guestbook WHERE count=$count");

	header("Location: ../visitors.php");
} else {
	header("Location: ../visitors.php");
}