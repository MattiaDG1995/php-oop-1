<?php

include_once __DIR__ . '/movie.php';

$film = new Movie('zoolander', 1999 ,'commedia');
echo '<h3>' .$film->titolo. '</h3>';
echo '<h3>' .$film->annouscita. '</h3>';
echo '<h3>' .$film->genere. '</h3>';
echo '<h3>' .$film->data(). '</h3>';

?>