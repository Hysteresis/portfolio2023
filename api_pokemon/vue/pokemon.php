<!-- <img class="character" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2940219/Mewtwo.png" /> -->
<!-- <img src="./assets/image/card/fire.png"> -->
<!-- <img class="character" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2940219/Charizard.png"  /> -->
<!-- <img class="character" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2940219/Charizard.png" /> -->


<div class="container bgPikachu">
    <!--  -->
    <div class="row my-2">
        <div class="col d-flex justify-content-between mx-4 mx-md-4 mx-lg-3 my-3">
            <a class="btn btn-danger" id="minus"  role="button"><< Previous</a>
            <a class="btn btn-danger" id="plus"  role="button">Next >></a>

        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-4 gx-4 gy-4">

        <?php

        foreach ($allPokemon['results'] as $pokemon) {

            $onePokemon = Pokemon::getOnePokemonByName($pokemon['name']);
            
        ?>
            <div class="col">
                <div class="card mx-auto bg-dark text-white" style="width: 18rem;">
                    <img class="mx-auto" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-v/black-white/animated/<?= $onePokemon[0]->getId() ?>.gif" style="height: 100px; width: 100px;" class="card-img-top" alt="...">

                    <div class="card-body">
                        <div class="d-flex justify-content-around align-items-center">
                            <h5 class="card-title">#<?php echo $onePokemon[0]->getId() ?> 
                            <?php $onePo = Pokemon::getPokemon($onePokemon[0]->getId());?>
                            <h5><?=ucfirst($onePo['names'][4]['name'])?></h5>
                            <h6>Type : <?= ucfirst($onePokemon[0]->getType()) ?></h6>
                        </div>
                        <div class="d-flex justify-content-around">
                            <p class="card-text">Taille : <?= $onePokemon[0]->getHeight() ?> </p>
                            <p class="card-text">Poids : <?= $onePokemon[0]->getWeight() ?> </p>
                            

                        </div>
                        <div class="d-flex justify-content-around">
                            <a href="index.php?uc=info&id=<?= $onePokemon[0]->getId() ?>" class="btn btn-primary">+ info</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php  } ?>



<?php



?>



    </div>
</div>