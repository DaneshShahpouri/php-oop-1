<?php
require_once './models/movie.php';

$titanic = new Movie('Titanic', 'drammatico', 'James Cameron', 1996, '2 ore', 'Leonardo Di Caprio');
$killBill = new Movie('Kill Bill', 'azione', 'Quentin Tarantino', 2003, '1 ora e mezzo', 'Huma Thurman');
$quartoPotere = new Movie('Quarto Potere', 'biografico', 'Orson Welles', 1941, '2 ore', 'Orson Welles');

$movie_list = [
    $titanic,
    $killBill,
    $quartoPotere
];
?>