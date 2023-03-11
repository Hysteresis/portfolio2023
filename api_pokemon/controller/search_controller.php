<?php

$onePokemon = Pokemon::getOnePokemonByName($_POST['search']);


include './vue/info.php';

?>