<?php
$id = $_GET['id'];
$onePokemon = Pokemon::getOnePokemonByName($id);

echo "<pre>";
print_r($onePokemon);
echo "<pre>";



// $evolution = Pokemon::evolutionChain($id);
// $arrayEvolution = json_decode($evolution, true);


// // 1er
// echo $arrayEvolution['chain']['species']['name'];

// $onePokemonName = Pokemon::getOnePokemonByName($arrayEvolution['chain']['species']['name']);
// // $arrayOnePokemonName = json_decode($onePokemonName, true);

// echo "<pre>";
// print_r($arrayOnePokemonName);
// echo "<pre>";
// // 2eme
// echo $arrayEvolution['chain']['evolves_to'][0]['species']['name'];
// // 3eme
// echo $arrayEvolution['chain']['evolves_to'][0]['evolves_to'][0]['species']['name'];
include './vue/evolution_pokemon.php';
?>