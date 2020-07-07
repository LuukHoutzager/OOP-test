<?php
//BussinessLogic Laag == OBJECT GEORIENTEERD
//Filename: "SEARCHMOVIE.PHP"
include('classes/Movie.class.php'); //sourcebekijken.php?page=../classes/Movie.class



$postTitle = $_POST['title']; //URL balk variable(GET) of form input HTML(POST)

//OBSTAKEL: Bad Boys wordt Bad_Boys -> replace spaces with underscores vanwege API
$newTitle = MovieHelper::ReplaceTitle($postTitle);

//Maak object
$movieObj = new Movie($newTitle); //bad boys geef ik mee, om de rest van deze film info op te halen

//Tonen object
echo'<fieldset>';
echo'<legend>MOVIE OBJECT (movie.class.php)</legend>';
echo '	<h1>		' .$movieObj->Title()	.'</h1>		';
echo '	<pre>		' .$movieObj->Year()	.'</pre>	';
echo '	<img src="	' .$movieObj->Poster()	.'" /><br />';
echo'</fieldset>';

//Doorsturen naar DB (pagina) //Verwerkings pagina om naar DB te schrijven
echo '<a href="addmoviedb.php"'.$movieObj->ImdbID().'"><button>toevoegen aan mijn watchlist!</button></a>';
//javascript benadering
//echo '<button onlick="/?page=addmoviedb&imdbID='.$movieObj->ImdbID().'">toevoegen aan mijn watchlist: '.$movieObj->ImdbID().'</button>';

//
?>
<!-- ______                               _
    (_____ \         copyright           (_)
     _____) )  ___   _____  ____   _____  _
    |  ____/  / _ \ | ___ ||  _ \ (____ || |
    | |      | |_| || ____|| | | |/ ___ || |
    |_|       \___/ |_____)|_| |_|\_____||_|
-->
