<?php

class Pokemon {
    
    
    private $id;
    private $name;
    private $type;
    private $weight;
    private $height;

    public function __construct($id, $name, $type, $weight, $height )
    {

        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->weight = $weight;
        $this->height = $height;
    }

    //? GETTER SETTER

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }


    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }
    
    public function getHeight()
    {
        return $this->height;
    }


    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    public static function getAllPokemon($offset){
        
        $url = "https://pokeapi.co/api/v2/pokemon/?limit=12&offset=" . $offset;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $results = curl_exec($ch);
        $results = json_decode($results, true);

        curl_close($ch); 

     return $results;
    }


    // public static function getOnePokemonId($id){
    //     $url = "https://pokeapi.co/api/v2/pokemon/". $id;

    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    //     curl_setopt($ch, CURLOPT_URL, $url); 
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    //     $result = curl_exec($ch); 
    //     $result = json_decode($result, true);

    //     curl_close($ch); 

    //     $arrayPokemon = []; 
    //     $arrayPokemon[] = new self($result['id'], $result['name'], $result['type'], $result['weight'], $result['height']);

    //     return $arrayPokemon;
    // }


    
    public static function getOnePokemonByName($name){
        $url = "https://pokeapi.co/api/v2/pokemon/". $name;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $result = curl_exec($ch); 
        $result = json_decode($result, true);
        curl_close($ch); 
        $arrayPokemon = []; 
        
        $arrayPokemon[] = new self($result['id'], $result['name'], $result['types'][0]['type']['name'], $result['weight'],  $result['height']);
        //    echo "<pre>";
        //     print_r($arrayPokemon);
        //     echo "<pre>";
    //    var_dump($result['abilities'][0]['ability']['name']);
        
        return $arrayPokemon;
    }

    public static function evolutionChain($id){
        $url = "https://pokeapi.co/api/v2/evolution-chain/". $id;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $result = curl_exec($ch); 
        $result = json_decode($result, true);
        curl_close($ch); 

        return $result;
    }



}
?>


