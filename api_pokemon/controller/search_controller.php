<?php

$onePokemon = Pokemon::getOnePokemonByName(strtolower($_POST['search']));


include './vue/info.php';

?>