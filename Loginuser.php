
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
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
}


.side {
  -ms-flex: 30%; 
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}


.main {   
  -ms-flex: 70%; 
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
  <a href="SBS Builders.html">Home</a>
  <a href="who.html">Meet us</a>
  <a href="Photos.html">Photos</a>
  <a href="Quote.html">Quote</a>
  <a href="register.php" class="right">Register</a>
  <a style="background-color: LightGray;color:black" href="Login.html" class="right">Login</a>
</div>

<div class="main">
  <div class="side">
    <div class="login">
        <h1>Login</h1>
        <form action="authenticate.php" method="post">
            <label for="username">
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="submit" value="Login">
            <p>Incorrect Username</p>
        </form>
      
  </div>
</div>

<div class="footer">
  <h2 style="font-family:serif">SBS Builders</h2>
  <h5 style="font-family:courier">Phone Number: 0000000000
  <br>Email: abc@gmail.com
  </h5>
</div>



</html>
