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
<link rel="stylesheet" type="text/css" href="mystyle.css">
  <title>PHP PostgreSQL</title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
<meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<ul>
  <li><a class="active" href="HomeLogin.html">Home</a></li>
  <li><a href="https://www.rocking.gr/">News</a></li>
  <li><a href="emailLogin.html">Contact Us</a></li>
  <li><a href="aboutLogin.html">About</a></li>
  <li style="float:right"><a href="http://localhost/mppl20059_mppl20067/logout.php">Logout</a></li>
  <li style="float:right"><a href="http://localhost/mppl20059_mppl20067/fav.php">Show Favorites</a></li>
	</ul>
<br><br><br>
<h1 id="myac" style="text-align:center"> Important Disks </h2>
	<br><br>
	
	<div class="row">
	  <div class="column">
	  <div class="img-with-text">
	    <a href="thewhoLogin.html">
		<img src="the.jpg" alt="Snow" style="width:50%" alt="sometext">
		</a>
		  <p style="text-align: center;">Who's Next - The Who <br><a href="favor.php"><img src="favourite.jpg" style="width:10%" title="Προσθήκη στα Αγαπημένα!!"/></p>
	  </div>
	  </div>
	  <div class="column">
	  <div class="img-with-text">
	  <a href="ledzepLogin.html">
		<img src="ledzepelinn.jpg" alt="Forest" style="width:50%" alt="sometext">
		</a>
		  <p style="text-align: center;">Led Zeppelin II - Led Zeppelin <br><a href="favor1.php"><img src="favourite.jpg" style="width:10%" title="Προσθήκη στα Αγαπημένα!!"></p>
	  </div>
	  </div>
	  <div class="column">
	  <div class="img-with-text">
	   <a href="blacksabbathLogin.html">
		<img src="bkack.jpg" alt="Mountains" style="width:50%"alt="sometext">
		</a>
		<p style="text-align: center;">Paranoid - Black Sabbath <br><a href="favor2.php"><img src="favourite.jpg" style="width:10%" title="Προσθήκη στα Αγαπημένα!!"></p>
	  </div>
	</div>
	</div>
	<br><br><br><br><br><br>
	<div class="row">
	  <div class="column">
	  <div class="img-with-text">
	   <a href=https://en.wikipedia.org/wiki/Moving_Pictures_(Rush_album)>
		<img src="rush.jpg" alt="Snow" style="width:50%"alt="sometext">
		</a>
		<p style="text-align: center;">Moving Pictures - Rush  <br><a href="favor3.php"><img src="favourite.jpg" style="width:10%" title="Προσθήκη στα Αγαπημένα!!"></p>
	  </div>
	  </div>
	  <div class="column">
	  <div class="img-with-text">
	  <a href=https://en.wikipedia.org/wiki/Back_in_Black>
		<img src="acdc.jpg" alt="Forest" style="width:50%"alt="sometext">
		</a>
		<p style="text-align: center;">Back in Black - AC/DC <br><a href="favor4.php"> <img src="favourite.jpg" style="width:10%" title="Προσθήκη στα Αγαπημένα!!"></p>
	  </div>
	  </div>
	  <div class="column">
	  <div class="img-with-text">
	  <a href=https://en.wikipedia.org/wiki/The_Wall>
		<img src="pink.jpg" alt="Mountains" style="width:50%"alt="sometext">
		</a>
		<p style="text-align: center;">The Wall - Pink Floyd  <br><a href="favor5.php"> <img src="favourite.jpg" style="width:10%" title="Προσθήκη στα Αγαπημένα!!"></p>
	  </div>
	  </div>
	</div>
	<br><br><br><br><br><br>
	<div class="row">
	  <div class="column">
	  <div class="img-with-text">
	  <a href=https://en.wikipedia.org/wiki/Sgt._Pepper%27s_Lonely_Hearts_Club_Band>
		<img src="beatles.jpg" alt="Snow" style="width:50%"alt="sometext">
		</a>
		<p style="text-align: center;">Sgt. Peppers Lonely Hearts Club Band - The Beatles <br><a href="favor6.php"> <img src="favourite.jpg" style="width:10%" title="Προσθήκη στα Αγαπημένα!!"></p>
	  </div>
	  </div>
	  <div class="column">
	  <div class="img-with-text">
	  <a href="https://en.wikipedia.org/wiki/Led_Zeppelin_IV">
		<img src="ledzepelin.jpg" alt="Forest" style="width:50%"alt="sometext">
		</a>
		<p style="text-align: center;">Led Zeppelin IV - Led Zeppelin <br><a href="favor7.php"> <img src="favourite.jpg" style="width:10%" title="Προσθήκη στα Αγαπημένα!!"></p>
	  </div>
	  </div>
	  <div class="column">
	  <div class="img-with-text">
	  <a href="https://en.wikipedia.org/wiki/The_Dark_Side_of_the_Moon">
		<img src="Darkside.jpg" alt="Mountains" style="width:50%"alt="sometext">
		</a>
		<p style="text-align: center;">Dark Side of the Moon - Pink Floyd <br><a href="favor8.php"> <img src="favourite.jpg" style="width:10%" title="Προσθήκη στα Αγαπημένα!!"></p>
		
	  </div>
	  </div>
	</div>
	<br><br><br><br><br><br><br>


</body>
</html>