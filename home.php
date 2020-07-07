<?php



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




echo'<hr />';

//MENU
echo'	<a href="searchform.php">		ZOEKEN			</a> |
		<a href="watchlist.php">			WATCHLIST		</a> |
		<a href="movieswatched.php">		MOVIES WATCHED	</a>';
echo '<hr />';

?>
