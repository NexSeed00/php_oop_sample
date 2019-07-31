<?php

require_once('Pokemon.php');
// クラスの分け方に正解はない
// 継承 extends
// Pokemonクラスを継承したヒトカゲクラス
// 継承される側 スーパークラス, 親クラス
// 継承する側 サブクラス, 子クラス
// 継承のルール 以下の関係が成り立つようにする
// 子クラス is a 親クラス
// 親クラス has a 子クラス
// システム上は成り立たなくても動く
// 子クラスは親クラスのプロパティとメソッドを持ってます
class Hitokage extends Pokemon
{
    // オーバーライド
    // 親クラスと同じ名前のメソッド名をつける
    // public function attack()
    // {
    //     echo '火炎放射';
    // }

    public function attack()
    {
        // 親のメソッドを使用
        parent::attack();
        echo '火の粉';
    }
}

$hitokage = new Hitokage('あつし');

echo $hitokage->getName();
echo $hitokage->attack();
