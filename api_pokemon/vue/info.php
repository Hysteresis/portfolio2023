<div class="container">
    <div class="row ">
        <div class="col  d-flex justify-content-center">

        <div class="card-body">
        <div class="col">
                <div class="card mx-auto bg-dark text-white" style="width: 18rem;">
                    <img class="mx-auto" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-v/black-white/animated/<?= $onePokemon[0]->getId() ?>.gif" style="height: 100px; width: 100px;" class="card-img-top" alt="...">

                    <div class="card-body">
                        <div class="d-flex justify-content-around align-items-center">
                            <h5 class="card-title">#<?php echo $onePokemon[0]->getId() ?> <?= ucfirst($onePokemon[0]->getName())   ?></h5>
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

        </div>
    </div>


</div>