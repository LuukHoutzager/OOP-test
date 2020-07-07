
<?php
include 'classes/Database.class.php'; //bewerkingen uitvoeren (CRUD)
include 'classes/Movie.class.php';

$dbObj = new Database(); //wordt hier automatisch altijd de constructor, constructor bouwt het object

$dbObj->SQLBewerking('SELECT imdbID,Rating FROM film WHERE Algezien = 1'); 
$dbObj->Uitvoeren();
$Qres = $dbObj->ResultaatUitDB();

//TODO: Toon in kolom Film de poster/Naam(2 kollommen) van een film Dmv JsonConversie + Movie class ophalen van de post obv de imdBID

echo'<h1>Movies Watched: Films die ik AL heb bekeken!</h1>';

echo'<table>';
echo'<tr><td>FilmNaam</td><td>FilmPoster</td><td>Status</td><td>Rating</td></tr>';
foreach($Qres as $film) //voor iedere film in de database, zet om naar filmObject
{
	$movieObj = new Movie($film['imdbID']); //op basis van
	echo '<tr>
			<td>'.$movieObj->Title().'</td>
			<td><img src="'. $movieObj->Poster() . '" height="50" width="30"></td>
			<td>
				<a href="index.php?page=updatefilmstatus&imdbID='.$movieObj->ImdbID().'">
					<button>Wijzig naar bekeken</button>
				</a>
			</td>
			<td>'.$film['Rating'].'</td>
		</tr>';
}
echo'</table>';

?>

