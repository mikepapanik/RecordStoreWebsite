<?php
$host = "localhost";
$port = "5432";
$dbname = "recordstorerock";
$user = "postgres";
$password = "39613962"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);

 
$sql = "INSERT INTO showfav VALUES('Whos_Next_The Who','The Who',25)";
/*εκτυπώνω στο φυλλομετρητή το ερώτημα ώστε να ελέγξω μην έχει πάει κάτι λάθος*/
echo $sql;
//εκτέλεση ερωτήματος στη βάση

$result = pg_query($dbconn, $sql) ;
//έλεγχος αποτελεσμάτων

if ($result) {
		header("Location:http://localhost/mppl20059_mppl20067/Favoritedisk.php");
echo "αποθηκευση στα αγαπημένα σας";
} else {
		header("Location:http://localhost/mppl20059_mppl20067/Favoritedisk.php");
echo "αποθηκευση NOT οκ <br>";
die('Query failed: ' . pg_last_error());

}
pg_close($dbconn);
?>

