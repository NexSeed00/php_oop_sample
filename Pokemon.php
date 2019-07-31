<?php
// クラス
// インスタンス化
// プロパティ
// メソッド

// クラス === 設計図
class Pokemon
{
    // プロパティ
    public $level;

    // メソッド
    public function attack()
    {
        echo '攻撃';
    }
}

// インスタンス化
// $pokemonという変数にPokemonクラスのインスタンスを代入
// new Class名()でインスタンス化
$pokemon = new Pokemon();

// インスタンス化すると、設計図にある、
// プロパティとメソッドを使える

// インスタンス->プロパティ名 / プロパティにアクセス
// プロパティの$は抜きます。
// インスタンス->メソッド名() / メソッドにアクセス

$pokemon->level = 3;
echo $pokemon->level;
$pokemon->attack();
