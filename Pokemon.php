<?php
// クラス
// インスタンス化
// プロパティ
// メソッド
// アクセス修飾子
// - アクセスできる範囲を制限する
// public, protected, private
// public - どこからでもアクセス可能
// protected - 子クラスからアクセス可能
// private - 自分だけしかアクセスができない

// コンストラクタ
// インスタンス化した時に自動で呼ばれるメソッド
// 書き方 __construct

// クラス === 設計図
class Pokemon
{
    // プロパティ
    public $level;
    private $name;

    // インスタンス化した時に自動で呼ばれるメソッド
    public function __construct($name)
    {
        // $this === このクラスのインスタンス
        // ポケモンクラスのインスタンスのnameプロパティに、変数$nameを代入
        $this->name = $name;
    }

    // メソッド
    public function attack()
    {
        echo '攻撃します';
    }

    // ゲッター getPropertyName, セッター setPropertyName
    // プロパティに直接アクセスされないように
    public function getName()
    {
        return $this->name;
    }
}

// インスタンス化
// $pokemonという変数にPokemonクラスのインスタンスを代入
// new Class名()でインスタンス化
$pokemon = new Pokemon('ピカチュウ');

// インスタンス化すると、設計図にある、
// プロパティとメソッドを使える

// インスタンス->プロパティ名 / プロパティにアクセス
// プロパティの$は抜きます。
// インスタンス->メソッド名() / メソッドにアクセス
// -> アロー演算子 「の」

// ポケモンインスタンスのlevelに3を代入
$pokemon->level = 3;
echo $pokemon->level;

// ポケモンインスタンスのattackメソッド
$pokemon->attack();

// ポケモンインスタンスのnameにピカチュウを代入する
echo $pokemon->getName();

// インスタンスは何個でも作れます
$fushigidane = new Pokemon('フシギダネ');
$zenigame = new Pokemon('ゼニガメ');

echo $fushigidane->getName();
echo $zenigame->getName();

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
