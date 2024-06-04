<?php
$host = "localhost";
$port = "5432";
$dbname = "recordstorerock";
$user = "postgres";
$password = "39613962"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
    $hashpassword = ($_POST['pwd']);
    $sql ="select *from public.users where username = '".pg_escape_string($_POST['username'])."' and password ='".$hashpassword."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    if($login_check > 0){ 
        
        echo "Login Successfully"; 
		header("Location:HomeLogin.html");
		
    }else{
        
        echo "Invalid Details";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="head.jpg" type="image/jpg" sizes="16x16">
<link rel="stylesheet" type="text/css" href="loginreg.css">
  <title>PHP PostgreSQL Login </title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<ul>
  <li><a class="active" href="Home.html">Home</a></li>
  <li><a href="https://www.rocking.gr/">News</a></li>
  <li><a href="email.html">Contact Us</a></li>
  <li><a href="about.html">About</a></li>
  <li style="float:right"><a href="http://localhost/mppl20059_mppl20067/register.php">Register</a></li>

	</ul>
<br><br>
<h1 style="text-align: center;">Login Here:</h1>
<br><br><br>
<div class="container">

  <form method="post">
  
     
  <div class="form-group">
      <label for="name"><h1 style="text-align: center;">Username:</h1></label>
      <input type="text" class="form-control" id="username" placeholder="Εισάγετε το Username σας για να συνδεθείτε" name="username" required>
    </div>
 
    <div class="form-group">
      <label for="pwd"><h1 style="text-align: center;">Password:</h1></label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd"  required>
    </div>
     
    <input type="submit" name="submit" class="btn btn-primary" value="ΕΙΣΟΔΟΣ">
	<br><br>
	<input type="reset" value="ΑΚΥΡΩΣΗ">
  </form>
</div>
</body>
</html>