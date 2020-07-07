<?php
include 'classes/Database.class.php'; //bewerkingen uitvoeren (CRUD)
include 'classes/Movie.class.php'; //sourcebekijken.php?page=../classes/Movie.class

$dbObj = new Database(); //wordt hier automatisch altijd de constructor, constructor bouwt het object

//INSERT
$dbObj->SQLBewerking('SELECT imdbID FROM film WHERE Algezien = 0');
$dbObj->Uitvoeren();
$Qres = $dbObj->ResultaatUitDB();

//TODO: Toon in kolom Film de poster/Naam(2 kollommen) van een film Dmv JsonConversie + Movie class ophalen van de post obv de imdBID

echo'<h1>Watchlist: Films die ik nog wil bekijken!</h1>';

echo'<table>';
echo'<tr><td>FilmNaam</td><td>FilmPoster</td><td>Status</td></tr>';
foreach($Qres as $film) //voor iedere film in de database, zet om naar filmObject
{
	$movieObj = new Movie($film['imdbID']); //op basis van
	echo '<tr><td>'.$movieObj->Title().'</td><td><img src="'. $movieObj->Poster() . '" height="50" width="30"></td><td><a href="updatefilmstatus.php'   .$movieObj->ImdbID().'"><button>Wijzig naar bekeken</button></a></td></tr>';
}
echo'</table>';

?>
