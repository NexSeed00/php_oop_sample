<?php

// あるクラスのプロパティは、
// 別のあるクラスのインスタンスが入ってることがあります。

require_once('Hitokage.php');

class Trainer
{
    // ポケモンを入れておく配列
    private $pokemons = [];
    public $favoritePokemon;

    public function __construct()
    {
        $this->favoritePokemon = new Hitokage('りょうすけ');
    }

    public function getPokemon()
    {
        // pokemonsプロパティに、pokemonのインスタンスを追加
        $this->pokemons['ゼニガメ'] = new Pokemon('ゼニガメ');
    }

    public function callPokemon($name)
    {
        return $this->pokemons[$name];
    }
}

$trainer = new Trainer();

$trainer->getPokemon();

$pokemon = $trainer->callPokemon('ゼニガメ');

$pokemon->attack();

$trainer->favoritePokemon->attack();
