<?php 
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$database = mysqli_connect("localhost","osiris","Newpass59#","Storage");

if(!$database)
{
    echo 'connection failure';
}
echo 'List of Quotes';
?>

<html>
<body>


<table border="10">
  <tr>
    <td>ID</td>
    <td>First Name</td>
    <td>Second Name</td>
    <td>Email</td>
    <td>Phone</td>
    <td>Quote</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
<?php
$query = mysqli_query($database,"SELECT * FROM Quotes");

while($row = mysqli_fetch_array($query))
{
?>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><?php echo $row['email']; ?></td>    
    <td><?php echo $row['phone']; ?></td>    
    <td><?php echo $row['quote']; ?></td>    
    <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    <td><a href="deleterecord.php?id=<?php echo $row['id']; ?>">Delete</a></td>
  </tr>
<?php
}
?>
</table>
</body>
<a href="LoggedIn.php">Leave Page </a>
<a>&nbsp</a>

<a href="Search.php"> Go to Search page</a>
<a href="Add.php"> Add a Table </a>
</html>
