<?php 
include "inc/top-part.php"; 
?>

<header>
  <h1>Visit our Cities</h1>
</header>

<?php 
include "inc/nav.php"; 
?>
<?php
// connect to the database
include('scripts/config.php');

// get results from database
$result = mysqli_query($connection, "SELECT * FROM guestbook");
?>

<h2>Our Guest Book</h2>
<p>See who has visited Chicago, Phoenix, or Ridgewood</p>

<table class="readtable">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Phone Number</th>
    <th>City Visited</th>
    <th colspan="2">Functions</th>
  </tr>
<?php
// loop through results of database query, displaying them in the table
while($row = mysqli_fetch_array( $result )) {
?>
  <tr>
    <td><?php echo $row['firstName']; ?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><?php echo $row['phoneNumber']; ?></td>
    <td><?php echo $row['city']; ?></td>
    <td><a href="scripts/update.php?count=<?php echo $row['count']; ?>">Edit</a></td>
    <td><a onclick="return confirm('Are you sure you want to delete count: <?php echo $row["count"]; ?>?')" href="scripts/delete.php?count=<?php echo $row['count']; ?>">Delete</a></td> 
  </tr>
<?php
// close the loop
}
?>
</table>
<?php include "inc/bottom-part.php"; ?>
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>