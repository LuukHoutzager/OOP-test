<?php
// gar-connect.php
// maakt een connectie met de database 'garage'
// Anjo Eijeriks

$servername = "localhost";
$dbname = "oopmovie";
$username = "root";
$password = "luuk123";

try {

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "<p class='p'>U bent verbonden met de Database! <br>";
}
catch(PDOException $e)
{
   echo "Connectie mislukt:" . $e->getMessage();
}

 ?>
