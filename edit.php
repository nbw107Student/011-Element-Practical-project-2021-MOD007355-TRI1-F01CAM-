<?php

$database= mysqli_connect("localhost","osiris","Newpass59#","Storage");
$id = $_GET['id']; 


if(isset($_POST['submit'])) 
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $quote = $_POST['quote'];

	
    $update = mysqli_query($database,"UPDATE Quotes set firstname='$firstname', lastname='$lastname', email='$email', phone='$phone', quote='$quote' WHERE id='$id'");
	
    if($update)
    {
        mysqli_close($database); 
        header("location:Quotes.php"); 
        exit;
    }   	
}
?>

<p>Edit Data</p>
<p>----------</p>
<form method="POST">
  <input type="text" name="firstname" value="<?php echo $row['firstname'] ?>" placeholder="Enter First Name" Required>
  <input type="text" name="lastname" value="<?php echo $row['lastname'] ?>" placeholder="Enter Last name" Required>
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter Email" Required>
  <input type="text" name="phone" value="<?php echo $data['phone'] ?>" placeholder="Enter Phone Number" Required>
  <input type="text" name="quote" value="<?php echo $data['quote'] ?>" placeholder="Enter New or Existing quote" Required>
  <input type="submit" name="submit" value="Update">
</form>
