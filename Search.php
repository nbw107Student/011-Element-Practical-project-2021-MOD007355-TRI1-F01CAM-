<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$searchtext=$_POST["search"];
$database= mysqli_connect("localhost","osiris","Newpass59#","Storage");
if(isset($_POST['submit']))  {
    $sql="SELECT * FROM Quotes WHERE firstname LIKE '%$searchtext%'";

    $searchquery=$database->query($sql);

    while($row=$searchquery->fetch_assoc()){
        echo 'ID   '.$row['id'];
        echo '<br>';
        echo 'Firstname  '.$row["firstname"];
        echo '<br>';
        echo 'lastname   '.$row['lastname'];
        echo '<br>';
        echo 'email    '.$row['email'];
        echo '<br>';
        echo 'phone    '.$row['phone'];
        echo '<br>';
        echo 'quote   '.$row['quote'];
        echo '<br>';


        }       

    }



?>

<form action="" method="post">
<input type="text" name="search" value="Value">
<input type="submit" name="submit" value="Search">
</form>
<a href='Quotes.php'>Leave Back to Database </a>
