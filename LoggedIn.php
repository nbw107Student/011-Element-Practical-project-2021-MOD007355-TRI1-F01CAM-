<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>SBS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}


body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.header {
  padding: 20px;
  text-align: center;
  background-image: url('work_header.jpeg');
  background-position: center center;
  backgroun-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}


.header h1 {
  font-size: 40px;
}


.navbar {
  overflow: hidden;
  background-color: #333;
}


.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  border-radius: 10px;
  padding: 14px 20px;
  text-decoration: none;
}


.navbar a.right {
  float: right;
}


.navbar a:hover {
  background-color: #ddd;
  color: black;
}




.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}


.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}


.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}



.footer {
  padding: 10px;
  margin: 0px;
  text-align: center;
  background: #ddd;
  background-image: url('work_header.jpeg');
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}



</style>
</head>
<body>

<div class="header">
  <h1 style="font-family:serif">SBS Builders</h1>
  <p style="font-family:Courier"><b>A building contractor service<b></p>
</div>

<div class="navbar">
  <a href="SBSSignedIn.html">Home</a>
  <a href="who.html">Meet us</a>
  <a href="Photos.html">Photos</a>
  <a href="Quotes.php">Quotes</a>
  <a style="background-color: LightGray;color:black" href="Logout.php" class="right">Logout</a>
</div>

<div class="main">
  <div class="side">
    <h1> Congatulations you have successfully logged in!</h1>
  </div>
</div>

<div class="footer">
  <h2 style="font-family:serif">SBS Builders</h2>
  <h5 style="font-family:courier">Phone Number: 0000000000
  <br>Email: abc@gmail.com
  </h5>
</div>



</html>
