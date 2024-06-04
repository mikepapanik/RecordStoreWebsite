<?php
$host = "localhost";
$port = "5432";
$dbname = "recordstorerock";
$user = "postgres";
$password = "39613962"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
	if(isset($_POST['submit'])&&!empty($_POST['submit'])){
		
		
		$sql = "insert into public.users(username,password,firstname,lastname,email)values('".$_POST['username']."','".($_POST['pwd'])."','".($_POST['firstname'])."','".($_POST['lastname'])."','".$_POST['email']."')";
		$ret = pg_query($dbconn, $sql);
		if($ret){
			
				echo "Data saved Successfully";
		}else{
			
				echo "Soething Went Wrong";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="head.jpg" type="image/jpg" sizes="16x16">
<link rel="stylesheet" type="text/css" href="loginreg.css">
  <title>PHP PostgreSQL Registration</title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
<meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<ul>
  <li><a class="active" href="home.html">Home</a></li>
  <li><a href="https://www.rocking.gr/">News</a></li>
  <li><a href="email.html">Contact Us</a></li>
  <li><a href="about.html">About</a></li>
  <li style="float:right"><a href="http://localhost/mppl20059_mppl20067/login.php">Login</a></li>
	</ul>
<br><br><br>
 <h1 style="text-align: center;">Register Here:</h1>
 <br><br>
<div class="container">
  <form method="post">
  
	<div class="form-group">
      <label for="name">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Εισάγετε το Username σας για εγγραφή.Εάν το Username που εισάγατε υπάρχει ήδη θα σας εμφανιστεί το κατάλληλο μήνυμα." name="username" required>
    </div>
	
	<div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Εισάγετε έναν ασφαλή κωδικό" name="pwd" required> 
    </div>
    <div class="form-group">
      <label for="firstname">Όνομα:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Εισάγετε το Όνομα σας" name="firstname" required>
    </div>
	<div class="form-group">
      <label for="name">Επώνυμο:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Εισάγετε το Επίθετο σας" name="lastname" required>
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Εισάγετε το Email σας" name="email" required>
    </div>
    
    
     <br>
    <input type="submit" name="submit"  class="btn btn-primary" value="ΕΓΓΡΑΦΗ" >
	<br><br>
	<input type="reset" value="ΑΚΥΡΩΣΗ">
  </form>
</div>

</body>
</html>