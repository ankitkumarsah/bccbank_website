<?php
$dsn = "mysql:host=135.125.180.139; dbname=bccbanki_maindatabase";
$db_user = "bccbanki_aksah3727";
$db_password = "Anku@123sah";
try {
 $conn = new PDO($dsn, $db_user, $db_password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  echo "Connected <br><hr>";
}
catch(PDOException $e) {
 echo "Connection Failed " . $e->getMessage();
}
//$websiteUrl = "https://bccbank.in/adminpannel/"
$websiteUrl = "http://localhost/bccbank/adminpannel/"
//4([]@HhY}P{I
?>
