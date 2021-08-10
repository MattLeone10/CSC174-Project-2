<?php 
include "inc/top-part.php"; 
?>
<?php
// connect to the database
include('scripts/config.php');

// get results from database
$result = mysqli_query($connection, "SELECT * FROM guestbook");
?>

<table class="readtable">
  <tr>
    <th>count</th>
    <th>firstName</th>
    <th>lastname</th>
    <th>email</th>
    <th>phoneNumber</th>
    <th>city</th>
    <th colspan="2"><em>functions</em></th>
  </tr>
<?php
// loop through results of database query, displaying them in the table
while($row = mysqli_fetch_array( $result )) {
?>
  <tr>
    <td><?php echo $row['count']; ?></td>
    <td><?php echo $row['firstName']; ?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phoneNumber']; ?></td>
    <td><?php echo $row['city']; ?></td>
  <!--   <td><a href="scripts/update.php?count=<?php echo $row['count']; ?>">Edit</a></td> -->
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