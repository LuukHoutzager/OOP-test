<?php
include 'classes/Database.class.php'; //bewerkingen uitvoeren (CRUD)

$imdbID = $_GET['imdbID']; //INPUT (vanuit URL)

$dbObj = new Database(); //wordt hier automatisch altijd de constructor, constructor bouwt het object

//INSERT
//TODO: check of een film die jij wilt toevoegen aan de DB, eerder is toeveoegd door een andere gebruiker.
$dbObj->SQLBewerking('UPDATE film SET Algezien = 1 WHERE imdbID = :imdbID');  	//single user //bij multi user in (2) tabellen INSERTEN userID inserten
$dbObj->GeefWaardeMee(':imdbID', $imdbID, null); //beveiliging 		//optioneel

//TODO: Check of deze film al bestaat dmv SELECT bewerking, geef melding, op DB niveau is beveiligd tegen dubbele input

$Qres = $dbObj->Uitvoeren(); //Bij een INSERT, bool

if($Qres)
{
	echo 'Film is succesvol gewijzigd! Zie <a href="movieswatched.php">MoviesWatched</a>!!<br />';
	echo 'Of ga terug naar de lijst met nog te bekijken <a href="watchlist.php">ga terug</a>';
}else
{
	echo 'Er ging iets mis bij het opslaan!';
}
?>
