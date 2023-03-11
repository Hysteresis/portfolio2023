<?php



$id = $_GET['id'];
$onePokemon = Pokemon::getOnePokemonByName($id);

include './vue/info.php';
?>