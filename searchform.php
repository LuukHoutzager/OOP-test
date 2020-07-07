<?php
/*
//PresentatieLaag icm bootstrap framework
//Filename: "SEARCHFORM.php"
//Formulier gebruikt om een film op te halen uit IMDB.com en input te genereren voor searchmovie.php
*/

echo'
<form class="bootstrap-class" action="searchmovie.php" method="POST">
  <input type="text" class="bootstrap-class" name="title">
  <input type="submit" class="bootstrap-class" name="sb" value="Zoek op filM!" />
</form>
';

/*
OOP structuur:

SEARCHFORM.PHP -> SEARCHMOVIE.PHP(VERWERKING) -> MOVIE.CLASS.PHP -> JSONCONVERSIE.CLASS.PHP (Je toont een film aan de voorzijde)

	HELPERCLASS (BEVAT ALGEMENE FUNCTIES DIE JE ONDERSTEUNT IN ALLE ANDERE BESTANDEN)
		MOVIEHELPER ondersteunt in Movie class met een AANTAL 'problemen' specifieke gericht op movies
		DATABASEHELPER ondersteunt bij specifiek database 'problemen'


ADDMOVIEDB.PHP(toevoegen in de de db)															//INSERT query
WATCHLIST.PHP (toon alle films die de waarde Algezien = 0, ofwel wleke films wil ik nog zien 	//(SELECT)UPDATE query (Algezien =1, Rating = Cijfer)
MOVIESWATCHED.PHP (films al beken met een rating, Algezien  = 1)								//SELECT query
-----

DATABASE.CLASS  (DATABASEHELPER.CLASS) / DatabaseConfig.php
JSONCONVERSIE.CLASS
MOVIE.CLASS -> MOVIEHELPER.CLASS

     ______                               _
    (_____ \         copyright           (_)
     _____) )  ___   _____  ____   _____  _
    |  ____/  / _ \ | ___ ||  _ \ (____ || |
    | |      | |_| || ____|| | | |/ ___ || |
    |_|       \___/ |_____)|_| |_|\_____||_|

*/

?>
