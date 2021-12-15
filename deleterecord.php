<?php
$database= mysqli_connect("localhost","osiris","Newpass59#","Storage");
$id = $_GET['id'];
$delete = mysqli_query($database,"DELETE FROM Quotes where id = '$id'"); 
if($delete)
{
    mysqli_close($database);
    header("location:Quotes.php"); 
    exit;	
}
?>
