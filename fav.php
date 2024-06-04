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
  <li><a href="http://localhost/mppl20059_mppl20067/Favoritedisk.php">Add to Favorites Disk</a></li>
  <li><a href="emailLogin.html">Contact Us</a></li>
  <li><a href="aboutLogin.html">About</a></li>
   <li style="float:right"><a href="http://localhost/mppl20059_mppl20067/logout.php">Logout</a></li>

	</ul>

</body>
</html>
<br><br><br><br><br><br>

<?php
$host = "localhost";
$port = "5432";
$dbname = "recordstorerock";
$user = "postgres";
$password = "39613962"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);

$sql ="select * from showfav";

$ret = pg_query($dbconn, $sql);
/*εκτυπώνω στο φυλλομετρητή το ερώτημα ώστε να ελέγξω μην έχει πάει κάτι λάθος*/

//εκτέλεση ερωτήματος στη βάση
$result = pg_query($dbconn, $sql) ;
//έλεγχος αποτελεσμάτων
if ($result) {
} else {
die('Query failed: ' . pg_last_error());
}
//Εμφάνιση αποτελεσμάτων σε μορφή πίνακα
echo "<table style='border:1px solid black'>";
echo "<tr><th>Τίτλος</th><th>Δημιουργός</th><th>Τιμή</th>";
// Εμφάνιση αποτελεσμάτων στις γραμμές του πίνακα
while($row = pg_fetch_assoc($result)) {
echo "<tr><td>".$row['tittle']."</td>".
"<td>".$row['creator']."</td>".
"<td>".$row['price']."</td></tr>";
}
echo "</table>" ;
//κλείσιμο σύνδεσης
pg_close($dbconn);
?>

