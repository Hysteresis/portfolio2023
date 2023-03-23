<?php

if(!isset($_GET['uc']) ){
    header('Location: index.php?uc=pokemon&offset=0');
}

include './vue/navbar.php';
include './vue/search.php';
include './modele/Pokemon.php';
// if(empty($_GET['uc'])){
//     include './controller/pokemon_controller.php';  

            
// }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/api_pokemon/assets/css/style.css">
    <title>Accueil</title>

</head>
<body>
    <?php
// test du csv
// Charger le fichier CSV des noms de Pokémon
$pokemonNames = [];
if (($handle = fopen("pokemon_names.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        // Ajouter chaque nom de Pokémon dans le tableau
        $pokemonNames[] = $data;
        // var_dump($data);
    }
    fclose($handle);
}

// Rechercher le nom en français du Pokémon numéro 1 (Bulbizarre)
$pokemonId = 2;
$pokemonNameFr = '';
foreach ($pokemonNames as $row) {
    if ($row[0] == $pokemonId && $row[1] == 5) {
        $pokemonNameFr = $row[2];
        break;
    }
}

// Afficher le nom en français du Pokémon
// echo "Le nom est :" . $pokemonNameFr;

//fin test csv
?>
<?php 


    if( $_GET['uc'] == 'pokemon' || $_GET['uc'] == 'offset'){
        include './controller/pokemon_controller.php';   
    }
    
    if(isset($_GET['uc'])&& $_GET['uc'] == 'evolution_pokemon'){
        include './controller/evolution_pokemon_controller.php';
    }

    if(isset($_GET['uc'])&& $_GET['uc'] == 'info'){
        include './controller/info_controller.php';
    }

    if(isset($_GET['uc'])&& $_GET['uc'] == 'search'){
        include './controller/search_controller.php';
    }


?>


    <!--! SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script defer src="./assets/js/offset.js"></script>
    <!-- <script src="./assets/js/ajaxApi.js"></script> -->
</body>
</html>