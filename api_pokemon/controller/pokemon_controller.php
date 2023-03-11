<?php


$offset = $_GET['offset'];


$allPokemon =  Pokemon::getAllPokemon($offset);
// header('location: index.php?uc=pokemon&offset=' . $offset );






include './vue/pokemon.php';
?>